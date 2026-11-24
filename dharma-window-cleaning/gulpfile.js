
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const php2html = require('gulp-php2html');
const rename = require('gulp-rename');


// PHP TO HTML

function html() {
  return gulp
    .src('./public/*.php')
    .pipe(php2html())
    .pipe(gulp.dest('./public/'));
}


// SCSS TO CSS

function style() {
  return gulp
    .src('./public/scss/style.scss')
    .pipe(
      sass({
        outputStyle: 'compressed'
      }).on('error', sass.logError)
    )
    .pipe(rename('main.min.css'))
    .pipe(gulp.dest('./public/css'));
}


// WATCH SCSS

function watchScss() {
  gulp.watch('./public/scss/**/*.scss', style);
}


// WATCH PHP

function watchPhp() {
  gulp.watch('./public/**/*.php', html);
}


// WATCH BOTH PHP + SCSS

function watchAll() {
  gulp.watch('./public/scss/**/*.scss', style);
  gulp.watch('./public/**/*.php', html);
}


// Run PHP to HTML once
gulp.task('html', html);

// Run SCSS once
gulp.task('style', style);

// Watch only SCSS
gulp.task('watch', watchScss);

// Watch only PHP
gulp.task('php', watchPhp);

// Watch PHP + SCSS together
gulp.task('dev', watchAll);

// Default command
gulp.task('default', gulp.series(
  gulp.parallel(style, html),
  watchAll
));

