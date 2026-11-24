const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const php2html = require("gulp-php2html");
const  watch = require('gulp-watch');
 
gulp.task('html', function() {
    return gulp.src("./public/*.php")
        .pipe(php2html())
        .pipe(gulp.dest("./public/"));
})
 
 
gulp.task("watch", () => {
  return watch("./public/scss/**/*.scss",async function() {
    return gulp.src("./public/scss/style.scss")
        .pipe(sass({ outputStyle: 'compressed' })
            .on('error', sass.logError)
        )
         .pipe(gulp.dest("./public/css"));
}) 
});
gulp.task("php", () => {
  return watch("./public/**/*.php",async function() {
    return gulp.src("./public/*.php")
        .pipe(php2html())
        .pipe(gulp.dest("./public/"));
}) 
});
 

gulp.task('default',gulp.series('watch'));

// Gallery photos
// Put original photos in public/images/gallery/originals/ and run: npx gulp images
// Each photo gets a small copy for the grid and a large copy for the lightbox.
const fs = require('fs');
const path = require('path');
const sharp = require('sharp');

function resizePhoto(input, output, width, quality) {
    return sharp(input)
        .rotate()                                       // turn phone photos the right way up
        .resize({ width: width, withoutEnlargement: true })
        .jpeg({ quality: quality, mozjpeg: true })     // smaller files; location (GPS) data is removed too
        .toFile(output);
}

gulp.task('images', async function () {
    const inputFolder = './public/images/gallery/originals/';
    const outputFolder = './public/images/gallery/';
    const photos = fs.readdirSync(inputFolder).filter(file => /\.(jpg|jpeg|png)$/i.test(file));

    for (const photo of photos) {
        const name = path.parse(photo).name;
        await resizePhoto(inputFolder + photo, outputFolder + name + '-small.jpg', 800, 68);
        await resizePhoto(inputFolder + photo, outputFolder + name + '-large.jpg', 1600, 60);
        console.log('Done: ' + name);
    }
});
