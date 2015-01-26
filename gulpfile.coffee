gulp         = require 'gulp'
gutil        = require 'gulp-util'

sass         = require 'gulp-ruby-sass'
rename       = require 'gulp-rename'
watch        = require 'gulp-watch'
coffee       = require 'gulp-coffee'
concat       = require 'gulp-concat'
uglify       = require 'gulp-uglify'
plumber      = require 'gulp-plumber'
changed      = require 'gulp-changed'
livereload   = require 'gulp-livereload'

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

############################################################

# Start the livereload server.
# gulp.task 'livereload', ->
#   livereload.listen()

# Create vendor.js blob.
gulp.task 'vendor', ['coffee'], ->
  return gulp.src scripts.vendor
    .pipe concat 'vendor.js'
    .pipe gulp.dest scripts.build

# Set watches on Coffee/SASS files.
gulp.task 'watch', () ->
  gulp.watch scripts.src, ['js']
  gulp.watch styles.src, ['sass']
  gulp.watch php.src, ['php']
  # gulp.watch img.src, ['img']

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
    .pipe livereload()

# Compile SASS files into a css file and reload the page.
gulp.task 'sass', ->
  return gulp.src styles.src
    .pipe plumber()
    .pipe changed styles.src
    .pipe sass { style: 'compressed', require: 'susy' }
    .pipe rename {suffix: '.min'}
    .pipe gulp.dest styles.build
    .pipe livereload()

gulp.task 'img', () ->
  return gulp.src(img.src)
    .pipe livereload()

gulp.task 'php', () ->
  return gulp.src('./')
    # .pipe cachebust {type: 'timestamp'}
    .pipe changed './', {extension: '.php'}
    .pipe gulp.dest php.src
    .pipe livereload()

gulp.task 'default', ['sass', 'js', 'watch']
