// =============================================
// MJR&D CONSTRUCTIONS — GULPFILE
// =============================================

import gulp from 'gulp';
import gulpSass from 'gulp-sass';
import * as sassCompiler from 'sass';
import postcss from 'gulp-postcss';
import autoprefixer from 'autoprefixer';
import cleanCSS from 'gulp-clean-css';
import rename from 'gulp-rename';
import plumber from 'gulp-plumber';
import php2html from 'gulp-php2html';

const sass = gulpSass(sassCompiler);

const paths = {
  scss: {
    src: 'public/scss/main.scss',
    watch: 'public/scss/**/*.scss',
    dest: 'public/css'
  },
  php: {
    src: 'public/*.php',
    watch: 'public/**/*.php',
    dest: 'public'
  }
};

// SCSS task
export function styles() {
  return gulp.src(paths.scss.src)
    .pipe(plumber())
    .pipe(sass({ outputStyle: 'expanded' }).on('error', sass.logError))
    .pipe(postcss([autoprefixer()]))
    .pipe(gulp.dest(paths.scss.dest))
    .pipe(cleanCSS())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest(paths.scss.dest));
}

// PHP to HTML (root only)
function phpBuild() {
  return gulp.src(paths.php.src)
    .pipe(plumber())
    .pipe(php2html())
    .pipe(gulp.dest(paths.php.dest));
}

// PHP to HTML, then keep watching for changes
export function php() {
  phpBuild();
  gulp.watch(paths.php.watch, phpBuild);
}

// Watch
export function watch() {
  gulp.watch(paths.scss.watch, styles);
  gulp.watch(paths.php.watch, phpBuild);
}

// Build
export const build = gulp.series(styles, phpBuild);

// Default
export default gulp.series(styles, gulp.parallel(watch));
