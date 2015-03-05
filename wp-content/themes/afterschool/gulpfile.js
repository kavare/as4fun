var gulp = require('gulp');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');

gulp.task('browser-sync', function() {
  var files = [
    './style.css',
    './*.php'
  ];

  browserSync.init(files, {
    proxy: "as4fun.dev/",
    notify: false
  });
});

gulp.task('sass', function() {
  gulp.src('scss/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('css/'))
    .pipe(reload({stream: true}));
});

gulp.task('js', function() {
  gulp.src('js/pages/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('js/'))
    .pipe(reload({stream: true}));
});

gulp.task('default', ['sass', 'browser-sync'], function() {
  gulp.watch('scss/**/*.scss', ['sass']);
  gulp.watch('js/**/*.js', ['js']);
});