var gulp = require('gulp');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var minifyCSS = require('gulp-minify-css');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');

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
    .pipe(sourcemaps.init())
      .pipe(sass())
      .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: true,
        remove: true
      }))
      .pipe(minifyCSS())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('css/'))
    .pipe(reload({stream: true}));
});

gulp.task('jsapp', function() {
  gulp.src('js/components/*.js')
    .pipe(concat('app.js'))
    .pipe(uglify())
    .pipe(gulp.dest('js/'))
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
  gulp.watch('js/components/*.js', ['jsapp']);
  gulp.watch('js/pages/*.js', ['js']);
});