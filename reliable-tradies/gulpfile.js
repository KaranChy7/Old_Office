/**
 * gulpfile.js — Reliable Tradies Group
 */

import gulp from "gulp";
import gulpSass from "gulp-sass";
import * as sass from "sass";
import postcss from "gulp-postcss";
import autoprefixer from "autoprefixer";
import cleanCSS from "gulp-clean-css";
import php2html from "gulp-php2html";

const sassCompile = gulpSass(sass);

// ─── Paths ─────────────────────────────────────────────
const paths = {
  scss: {
    src: "public/scss/style.scss",
    watch: "public/scss/**/*.scss",
    dest: "public/css",
  },
  php: {
    src: "public/*.php",
    watch: ["public/*.php", "includes/**/*.php"],
    dest: "public",
  },
};

// ─── SCSS → CSS ─────────────────────────────────────────
export function styles() {
  return gulp
    .src(paths.scss.src, { sourcemaps: false })
    .pipe(
      sassCompile({
        silenceDeprecations: ["legacy-js-api"],
      }).on("error", sassCompile.logError),
    )
    .pipe(postcss([autoprefixer()]))
    .pipe(cleanCSS({ level: 1 }))
    .pipe(gulp.dest(paths.scss.dest));
}

// ─── PHP → HTML ─────────────────────────────────────────
export function phpBuild() {
  return gulp
    .src(paths.php.src)
    .pipe(php2html())
    .pipe(gulp.dest(paths.php.dest));
}

// ─── Watchers ───────────────────────────────────────────
export function watchFiles() {
  gulp.watch(paths.scss.watch, styles);
  gulp.watch(paths.php.watch, phpBuild);
}

// ─── Named Tasks ────────────────────────────────────────
export const sassTask = styles;
export const php = gulp.series(phpBuild, function phpWatch() {
  gulp.watch(paths.php.watch, phpBuild);
});

export const watch = gulp.series(gulp.parallel(styles, phpBuild), watchFiles);

// ─── Default Task ───────────────────────────────────────
export default watch;
