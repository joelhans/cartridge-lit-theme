gulp         = require('gulp')
gutil        = require('gulp-util')
sass         = require('gulp-ruby-sass')
autoprefixer = require('gulp-autoprefixer')
minifycss    = require('gulp-minify-css')
rename       = require('gulp-rename')
watch        = require('gulp-watch')
coffee       = require('gulp-coffee')
concat       = require('gulp-concat')
uglify       = require('gulp-uglify')
ignore       = require('gulp-ignore')
rimraf       = require('gulp-rimraf')

paths =
  styles:
    src:  'assets/stylesheets/source/**/*.sass'
    dest: 'assets/stylesheets/build/'
  scripts:
    src: 'assets/javascripts/source/**/*.coffee'
    vendor: 'assets/javascripts/vendor/**/*'
    dest: 'assets/javascripts/build/'

gulp.task 'rimraf', ->
  return gulp.src(paths.scripts.dest+'*.js', { read: false })
    .pipe(rimraf())

gulp.task 'coffee', ->
  return gulp.src(paths.scripts.src)
    .pipe(coffee().on('error', gutil.log))
    .pipe(gulp.dest(paths.scripts.dest))

gulp.task 'concat', ->
  return gulp.src([paths.scripts.vendor+'*.js', paths.scripts.dest+'*.js'])
    .pipe(concat('script.js'))
    .pipe(gulp.dest(paths.scripts.dest))

gulp.task 'uglify', ->
  return gulp.src(paths.scripts.dest+'script.js')
    .pipe(uglify())
    .pipe(rename('script.min.js'))
    .pipe(gulp.dest(paths.scripts.dest))

gulp.task 'cleanup', ->
  return gulp.src(paths.scripts.dest+'*.js', { read: false })
    .pipe(ignore.exclude('**/*.min.js'))
    .pipe(rimraf())

gulp.task 'script', ->
  gulp.run 'rimraf', ->
    gulp.run 'coffee', ->
      gulp.run 'concat', ->
        gulp.run 'uglify', ->
          gulp.run 'cleanup', ->

gulp.task 'sass', ->
  return gulp.src(paths.styles.src)
    .pipe(sass({ style: 'compressed', require: 'susy' }))
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest(paths.styles.dest))

gulp.task 'watch', ->
  gulp.watch(paths.scripts.src, ['rimraf', 'coffee', 'concat', 'uglify', 'cleanup'])
  gulp.watch(paths.styles.src, ['sass'])
});
