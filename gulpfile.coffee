gulp         = require 'gulp'
gutil        = require 'gulp-util'
# sass         = require 'gulp-ruby-sass'
sass         = require 'gulp-sass'
rename       = require 'gulp-rename'
autoprefixer = require 'gulp-autoprefixer'
cssnano      = require 'gulp-cssnano'
# watch        = require 'gulp-watch'
coffee       = require 'gulp-coffee'
concat       = require 'gulp-concat'

# uglify       = require 'gulp-uglify'
plumber      = require 'gulp-plumber'
changed      = require 'gulp-changed'
# livereload   = require 'gulp-livereload'
browserSync  = require('browser-sync').create()

styles =
  src:  'assets/stylesheets/source/**/*.sass'
  build: 'assets/stylesheets/build/'

scripts =
  src: 'assets/javascripts/source/**/*.coffee'
  vendor: 'assets/javascripts/vendor/**/*'
  build: 'assets/javascripts/build/'

php =
  src: '**/*.php'

img =
  src: 'assets/images/**/*'

sassPaths = [ 'node_modules/susy/sass' ]

onError = (err) ->
  console.log err.message
  this.emit 'end'

############################################################

# BrowserSync
# gulp.task 'browsersync', ->
#   browserSync.init
#     files: ['*.coffee', '*.js', '*.php', '{chapbooks}/**/*.php', '{issues}/**/*.php']
#     proxy: 'http://localhost/wp-cartridge/'

# Create vendor.js blob.
gulp.task 'vendor', ['coffee'], ->
  return gulp.src scripts.vendor
    .pipe concat 'vendor.js'
    .pipe gulp.dest scripts.build

# Set watches on Coffee/SASS files.
gulp.task 'watch', () ->
  gulp.watch scripts.src, ['js']
  gulp.watch styles.src, ['sass']

# Compile CoffeeScript files into js file and reload the page.
gulp.task 'coffee', ->
  return gulp.src scripts.src
    .pipe plumber()
    .pipe coffee()
    .pipe gulp.dest scripts.build

gulp.task 'js', ['coffee'], ->
  return gulp.src [
      scripts.build+'vendor.js',
      scripts.build+'main.js'
    ]
    .pipe concat 'script.min.js'
    .pipe uglify()
    .pipe gulp.dest scripts.build
    .pipe browserSync.reload
      stream: true

# Compile SASS files into a css file and reload the page.
gulp.task 'styles', ->
  gulp.src styles.src
    .pipe plumber { errorHandler: onError }
    .pipe sass { includePaths: sassPaths }
    .pipe autoprefixer 'last 2 versions'
    .pipe rename { suffix: '.min' }
    .pipe cssnano()
    .pipe gulp.dest styles.build
    .pipe browserSync.reload { stream: true }

    # # .pipe plumber()
    # # .pipe changed styles.src
    # .pipe sass { style: 'compressed', require: 'susy' }
    # .pipe rename {suffix: '.min'}
    # .pipe gulp.dest styles.build
    # .pipe browserSync.reload
    #   stream: true
#
# gulp.task 'img', () ->
#   return gulp.src(img.src)
#     .pipe browserSync.reload
#       stream: true

# gulp.task 'php', () ->
#   return gulp.src('./')
#     # .pipe cachebust {type: 'timestamp'}
#     .pipe changed './', {extension: '.php'}
#     .pipe gulp.dest php.src
#     .pipe browserSync.reload
#       stream: true

gulp.task 'default', ->
  browserSync.init {
    files: ['*.php', '{chapbooks}/**/*.php', '{issues}/**/*.php']
    proxy: 'http://localhost/wp-cartridge/'
  }
  gulp.watch styles.src, ['styles']
