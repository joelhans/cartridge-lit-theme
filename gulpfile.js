require('coffee-script/register');
require('./gulpfile.coffee');

var gulp         = require('gulp'),
    gutil        = require('gulp-util'),
    sass         = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss    = require('gulp-minify-css'),
    rename       = require('gulp-rename'),
    watch        = require('gulp-watch'),
    coffee       = require('gulp-coffee'),
    concat       = require("gulp-concat"),
    uglify       = require("gulp-uglify");

var paths = {
  styles: {
    src:  'assets/stylesheets/source/**/*.sass',
    dest: 'assets/stylesheets/build/'
  },
  scripts: {
    src: 'assets/javascripts/source/**/*.coffee',
    vendor: 'assets/javascripts/vendor/**/*',
    dest: 'assets/javascripts/build/'
  }
};

gulp.task('sass', function() {
  return gulp.src(paths.styles.src)
    .pipe(sass({ style: 'compressed', require: 'susy' }))
    // .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest(paths.styles.dest));
});

gulp.task('watch', function() {
    // gulp.watch('js/*.js', ['lint', 'scripts']);
    gulp.watch(paths.styles.src, ['sass']);
});
