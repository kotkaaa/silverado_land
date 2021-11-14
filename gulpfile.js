var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
let sourcemaps = require('gulp-sourcemaps');
let browserSync = require('browser-sync');
var useref = require('gulp-useref');
var uglify = require('gulp-uglify');
var gulpIf = require('gulp-if');
var cssnano = require('gulp-cssnano');
var imagemin = import('gulp-imagemin');
var cache = require('gulp-cache');
var del = require('del');
var runSequence = require('run-sequence');
var postcss = require('gulp-postcss');
var autoprefixer = require('gulp-autoprefixer');

// Basic Gulp task syntax
gulp.task('hello', function () {
    console.log('Hello Zell!');
});

// Start browserSync server
gulp.task('browserSync', function () {
    browserSync({
        server: {
            baseDir: 'app'
        }
    });
});

gulp.task('sass', async function () {
    gulp.src('frontend/web/scss/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('frontend/web/css'));
});

// Watchers
// запускаешь компиляцию scss и выгружаешь
gulp.task('watch', function () {
    gulp.watch('frontend/web/scss/**/*.scss', ['sass']);
    gulp.watch('frontend/web/*.html', browserSync.reload);
    gulp.watch('frontend/web/js/**/*.js', browserSync.reload);
});

// Optimizing Images
gulp.task('images', function () {
    return gulp.src('frontend/web/images/**/*.+(png|jpg|jpeg|gif|svg)')
        // Caching images that ran through imagemin
        .pipe(cache(imagemin({
            interlaced: true,
        })))
        .pipe(gulp.dest('dist/images'));
});

// Cleaning
gulp.task('clean', function () {
    return del.sync('dist').then(function (cb) {
        return cache.clearAll(cb);
    });
});

// Build Sequences
// ---------------
gulp.task('default', function (callback) {
    runSequence(['sass', 'browserSync'], 'watch',
        callback
    );
});

gulp.task('build', function (callback) {
    runSequence(
        'clean:dist',
        'sass',
        ['useref', 'images', 'fonts'],
        callback
    );
});