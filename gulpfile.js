var autoprefixer = require('gulp-autoprefixer');
var gulp = require('gulp');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');

gulp.task('sass', function() {
    return gulp.src('assets/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer('last 2 versions'))
    // .pipe(rename('style.css'))
    .pipe(gulp.dest('assets/css'));
});

gulp.task('default', function() {
    gulp.watch('assets/scss/**/*.scss', ['sass']);
});