const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const php2html = require("gulp-php2html");
const watch = require("gulp-watch");

// -----------------------------
// HTML Task — PHP → HTML
// Output goes to ./public (next to css/, js/, images/) — that's what gets deployed
// -----------------------------
function buildHtml() {
  return gulp
    .src("./public/*.php")
    .pipe(php2html({ ext: ".html" }))
    .pipe(gulp.dest("./public"));
}

function buildCss() {
  return gulp
    .src("./public/scss/style.scss")
    .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
    .pipe(gulp.dest("./public/css"));
}

gulp.task("html", buildHtml);
gulp.task("css", buildCss);

// One-shot build — run before committing/deploying
gulp.task("build", gulp.parallel("css", "html"));

// -----------------------------
// Watch SCSS
// -----------------------------
gulp.task("watch", () => {
  return watch("./public/scss/**/*.scss", buildCss);
});

// -----------------------------
// Watch PHP
// -----------------------------
gulp.task("php", () => {
  return watch("./public/**/*.php", buildHtml);
});

// -----------------------------
// Default task
// -----------------------------
gulp.task("default", gulp.parallel("watch", "php"));
