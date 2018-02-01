'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
 
gulp.task('sass', function () {
  return gulp.src('./wp-content/themes/Fevr_2018/styles/scss/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./wp-content/themes/Fevr_2018/styles/css/'));
});
 
gulp.task('sass:watch', function () {
  gulp.watch('./wp-content/themes/Fevr_2018/styles/scss/*.scss', ['sass']);
});