const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("gulp-autoprefixer");
const cleanCSS = require("gulp-clean-css");
const rename = require("gulp-rename");
const php2html = require("gulp-php2html");

/* ── SCSS → CSS ───────────────────────────── */
function buildStyles() {
  return (
    gulp
      .src("./public/scss/main.scss")
      .pipe(sass({ outputStyle: "expanded" }).on("error", sass.logError))
      .pipe(
        autoprefixer({
          overrideBrowserslist: ["last 2 versions"],
          cascade: false,
        }),
      )
      .pipe(gulp.dest("./public/css"))

      // Minify
      .pipe(cleanCSS({ level: 2 }))
      .pipe(rename({ suffix: ".min" }))
      .pipe(gulp.dest("./public/css"))
  );
}

/* ── PHP → HTML ──────────────────────────── */
/*
  Only compile page files
  Example:
  index.php
  about.php
  contact.php

  It will ignore:
  includes/
  components/
  partials/
*/

function buildHTML() {
  return gulp
    .src([
      "./public/*.php",
      "!./public/includes/**/*.php",
      "!./public/components/**/*.php",
      "!./public/partials/**/*.php",
    ])
    .pipe(php2html())
    .pipe(gulp.dest("./public"));
}

/* ── Watch Files ─────────────────────────── */
function watchFiles() {
  // Watch SCSS
  gulp.watch("./public/scss/**/*.scss", buildStyles);

  // Watch page PHP files only
  gulp.watch(
    [
      "./public/*.php",
      "!./public/includes/**/*.php",
      "!./public/components/**/*.php",
      "!./public/partials/**/*.php",
    ],
    buildHTML,
  );
}

/* ── Tasks ───────────────────────────────── */
gulp.task("css", buildStyles);
gulp.task("html", buildHTML);
gulp.task("php", buildHTML);

gulp.task("build", gulp.series(gulp.parallel(buildStyles, buildHTML)));

gulp.task("watch", watchFiles);

gulp.task("default", gulp.series("build", "watch"));
