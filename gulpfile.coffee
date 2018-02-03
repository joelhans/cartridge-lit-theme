gulp         = require 'gulp'
gutil        = require 'gulp-util'
sass         = require 'gulp-sass'
rename       = require 'gulp-rename'
autoprefixer = require 'gulp-autoprefixer'
cssnano      = require 'gulp-cssnano'
coffee       = require 'gulp-coffee'
concat       = require 'gulp-concat'

uglify       = require 'gulp-uglify'
plumber      = require 'gulp-plumber'
changed      = require 'gulp-changed'
browserSync  = require('browser-sync').create()

styles =
  src: 'assets/stylesheets/source/**/*.sass'
  build: 'assets/stylesheets/build/'

scripts =
  src: 'assets/javascripts/source/**/*.coffee'
  vendor: 'assets/javascripts/vendor/**/*'
  build: 'assets/javascripts/build/'

js =
  src: 'assets/javascripts/source/**/*.js'
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

gulp.task 'default', ->
  browserSync.init {
    files: ['*.php', '{chapbooks}/**/*.php', '{issues}/**/*.php']
    proxy: 'http://127.0.0.1:8020'
    open: false
    port: 8021
  }
  gulp.watch styles.src, ['styles']
  gulp.watch scripts.src, ['js']
