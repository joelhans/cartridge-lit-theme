gulp         = require 'gulp'
gutil        = require 'gulp-util'

sass         = require 'gulp-ruby-sass'
minifycss    = require 'gulp-minify-css'
rename       = require 'gulp-rename'
watch        = require 'gulp-watch'
coffee       = require 'gulp-coffee'
concat       = require 'gulp-concat'
uglify       = require 'gulp-uglify'
ignore       = require 'gulp-ignore'
rimraf       = require 'gulp-rimraf'
addsrc       = require 'gulp-add-src'

refresh      = require 'gulp-livereload'
lr           = require 'tiny-lr'
server       = do lr

styles =
  src:  'assets/stylesheets/source/**/*.sass'
  build: 'assets/stylesheets/build/'

scripts =
  src: 'assets/javascripts/source/**/*.coffee'
  vendor: 'assets/javascripts/vendor/**/*'
  build: 'assets/javascripts/build/'

# gulp.task 'rimraf', ->
#   return gulp.src(paths.scripts.dest+'*.js', { read: false })
#     .pipe(rimraf())
#
# gulp.task 'coffee', ['rimraf'], ->
#   return gulp.src(paths.scripts.src)
#     .pipe(coffee().on('error', gutil.log))
#     .pipe(gulp.dest(paths.scripts.dest))
#
# gulp.task 'concat', ['coffee'], ->
#   return gulp.src([paths.scripts.vendor+'*.js', paths.scripts.dest+'*.js'])
#     .pipe(concat('script.js'))
#     .pipe(gulp.dest(paths.scripts.dest))
#
# gulp.task 'uglify', ['concat'], ->
#   return gulp.src(paths.scripts.dest+'script.js')
#     .pipe(uglify())
#     .pipe(rename('script.min.js'))
#     .pipe(gulp.dest(paths.scripts.dest))
#
# gulp.task 'cleanup', ['uglify'], ->
#   return gulp.src(paths.scripts.dest+'*.js', { read: false })
#     .pipe(ignore.exclude('**/*.min.js'))
#     .pipe(rimraf())
#
# gulp.task 'sass', ->
#   return gulp.src(paths.styles.src)
#     .pipe(sass({ style: 'compressed', require: 'susy' }))
#     .pipe(gulp.dest(paths.styles.dest))
#     .pipe(rename({suffix: '.min'}))
#     .pipe(minifycss())
#     .pipe(gulp.dest(paths.styles.dest))

gulp.task 'watch', ->
  gulp.watch(paths.scripts.src, ['rimraf', 'coffee', 'concat', 'uglify', 'cleanup'])
  gulp.watch(paths.styles.src, ['sass'])

############################################################



# Starts the livereload server
gulp.task 'livereload', ->
    server.listen 35729, (err) ->
        console.log err if err?

# Compiles CoffeeScript files into js file
# and reloads the page
gulp.task 'coffee', ->
  return gulp.src scripts.src
    .pipe coffee()
    .pipe gulp.dest scripts.build

gulp.task 'vendor', ['coffee'], ->
  return gulp.src scripts.vendor
    .pipe concat 'vendor.js'
    .pipe gulp.dest scripts.build

gulp.task 'js', ['vendor'], ->
  return gulp.src [
      scripts.build+'vendor.js',
      scripts.build+'main.js'
    ]
    .pipe concat 'script.js'
    .pipe gulp.dest scripts.build
    # .pipe uglify()
    .pipe rename 'script.min.js'
    .pipe gulp.dest scripts.build

# return gulp.src('files/coffee/*.coffee')   // start with the .coffee files in the project
#     .pipe(coffee())                          // compiles coffee script
#     .pipe(addsrc('files/js/*.js'))           // we use addsrc to add our .js files to the mix
#     .pipe(uglify())                          // we minify everything
#     .pipe(gulp.dest('dist'));
#
# gulp.task 'scripts', ->
# 	gulp.src(scripts.src)
# 		.pipe(do coffee)
# 		.pipe(do uglify)
# 		.pipe(gulp.dest scripts.build)
# 		.pipe(refresh server)

gulp.task 'default', ->
	gulp.run 'livereload'
