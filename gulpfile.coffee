gulp         = require 'gulp'
gutil        = require 'gulp-util'

sass         = require 'gulp-ruby-sass'
rename       = require 'gulp-rename'
watch        = require 'gulp-watch'
coffee       = require 'gulp-coffee'
concat       = require 'gulp-concat'
uglify       = require 'gulp-uglify'
changed      = require 'gulp-changed'
livereload   = require 'gulp-livereload'

styles =
  src:  'assets/stylesheets/source/**/*.sass'
  build: 'assets/stylesheets/build/'

scripts =
  src: 'assets/javascripts/source/**/*.coffee'
  vendor: 'assets/javascripts/vendor/**/*'
  build: 'assets/javascripts/build/'

############################################################

# Start the livereload server.
gulp.task 'livereload', ->
  livereload.listen()

# Create vendor.js blob.
gulp.task 'vendor', ['coffee'], ->
  return gulp.src scripts.vendor
    .pipe concat 'vendor.js'
    .pipe gulp.dest scripts.build

# Compile CoffeeScript files into js file and reload the page.
gulp.task 'coffee', ->
  return gulp.src scripts.src
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
    .pipe livereload { auto: false }

# Compile SASS files into a css file and reload the page.
gulp.task 'sass', ->
  return gulp.src styles.src
    .pipe changed styles.build
    .pipe sass { style: 'compressed', require: 'susy' }
    .pipe rename {suffix: '.min'}
    .pipe gulp.dest styles.build
    .pipe livereload { auto: false }

# Set watches on Coffee/SASS files.
gulp.task 'watch', () ->
  gulp.watch scripts.src, ['js']
  gulp.watch styles.src, ['sass']

gulp.task 'default', ['livereload', 'watch']
