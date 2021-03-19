'use strict';

const { src, dest, parallel, series, watch } = require('gulp');
const rename = require('gulp-rename');
const sass = require('gulp-sass');
const cssnano = require('gulp-cssnano');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

const css = [
    'css/app.scss'
];
const fonts = [
    'fonts/common/**/*'
];
const modernizr = [
    'js/common/libs/modernizr.custom.min.js'
];
const libs = [
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/popper.js/dist/umd/popper.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/owl.carousel/dist/owl.carousel.min.js',
    'node_modules/lightbox2/dist/js/lightbox.js',
    'js/common/libs/owl.linked.js',
    'node_modules/moment/min/moment.min.js',
    'node_modules/jquery-date-range-picker/dist/jquery.daterangepicker.min.js',
    'js/common/script.js'
];

function scssTask() {
    return src(css)
        .pipe(sass())
        .pipe(cssnano())
        .pipe(rename('gen.css'))
        .pipe(dest('../web/css/'));
}

function topJsTask() {
    return src(modernizr)
        .pipe(concat('theme-top.min.js'))
        .pipe(uglify())
        .pipe(dest('../web/js/'))
}

function bottomJsTask() {
    return src(libs)
        .pipe(concat('theme-bottom.min.js'))
        .pipe(uglify())
        .pipe(dest('../web/js/'));
}

function fontTask() {
    return src(fonts)
        .pipe(dest('../web/css/fonts/'));
}

exports.default = parallel(scssTask, fontTask, topJsTask, bottomJsTask);

// const copy2 = require('gulp-copy2');
// const rename = require('gulp-rename');
// const fs = require('fs');

// const cssnano = require('gulp-cssnano');
// const sass = require('gulp-sass');

// const concat = require('gulp-concat');
// const uglify = require('gulp-uglify');

// // CSS TASK

// gulp.task('css', function () {
//     var options = {
//         "convertValues": {length: false},
//         "zindex": false
//     };
//     return gulp.src('./css/app.scss')
//     .pipe(sass().on('error', sass.logError))
//     .pipe(cssnano(options))
//     .pipe(rename('gen.css'))
//     .pipe(gulp.dest('./../web/css/'));
// });

// gulp.task('watch-css', function () {
//     gulp.watch('./css/**/*.scss', ['css']);
// });

// // JS TASK

// gulp.task('scripts-top', function() {
//     var scriptsToConcat = [
//         './js/libs/modernizr.custom.min.js'
//     ];

//     gulp.src(scriptsToConcat)
//         .pipe(concat('theme-top.min.js'))
//         .pipe(uglify())
//         .pipe(gulp.dest('./../web/js/'))
//     ;
// });

// gulp.task('scripts-bottom', function() {
//     const libs = [
//         './node_modules/jquery/dist/jquery.min.js',
//         './node_modules/popper.js/dist/umd/popper.js',
//         './node_modules/bootstrap/dist/js/bootstrap.min.js',
//         './node_modules/owl.carousel/dist/owl.carousel.min.js',
//         './node_modules/lightbox2/dist/js/lightbox.js',
//         './js/common/libs/owl.linked.js',
//         './node_modules/moment/min/moment.min.js',
//         './node_modules/jquery-date-range-picker/dist/jquery.daterangepicker.min.js',
//         './js/common/script.js'
//       ];

//     libs.forEach(function(lib) {
//         try {
//             fs.accessSync(lib)
//         } catch (e) {
//             throw `\n\n    \x1b[31m${lib} cannot be find - \x1b[0mTry to run "npm install" and/or "bower install"\n`;
//         }
//     });

//     return gulp
//         .src(libs)
//         .pipe(concat('theme-bottom.min.js'))
//         .pipe(uglify())
//         .pipe(gulp.dest('./../web/js/'));
// });

// gulp.task('js', ['scripts-top', 'scripts-bottom']);

// gulp.task('watch-js', function () {
//     gulp.watch(['./js/*.js', './js/*/*.js'], ['js']);
// });

// // GLOBAL TASK

// gulp.task('copy', function () {
//     // var paths = [
//     //     {
//     //         src: './node_modules/elegant-icons/fonts/*',
//     //         dest: './../web/css/fonts/'
//     //     },
//     //     {
//     //         src: './node_modules/lightbox2/dist/images/*',
//     //         dest: './../web/img/lightbox2/'
//     //     },
//     //     {
//     //         src: './fonts/common/*',
//     //         dest: './../web/css/fonts/'
//     //     },
//     //     {
//     //         src: './img/*',
//     //         dest: './../web/img/'
//     //     }
//     // ];

//     // return copy2(paths);

//     return gulp.src(['node_modules/elegant-icons/fonts/*', 'fonts/common/**/*']).pipe(gulp.dest('../web/css/fonts/'));
// });

// gulp.task('default', ['css', 'js', 'copy']);
