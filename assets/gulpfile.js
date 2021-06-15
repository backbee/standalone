'use strict'

const { src, dest, parallel } = require('gulp')
const rename = require('gulp-rename')
const sass = require('gulp-sass')
const cssnano = require('gulp-cssnano')
const concat = require('gulp-concat')
const uglify = require('gulp-uglify')

const css = [
  'css/app.scss'
]
const fonts = [
  'fonts/common/**/*'
]
const modernizr = [
  'js/common/libs/modernizr.custom.min.js'
]
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
]

function scssTask () {
  return src(css)
    .pipe(sass())
    .pipe(cssnano())
    .pipe(rename('gen.css'))
    .pipe(dest('../web/css/'))
}

function topJsTask () {
  return src(modernizr)
    .pipe(concat('theme-top.min.js'))
    .pipe(uglify())
    .pipe(dest('../web/js/'))
}

function bottomJsTask () {
  return src(libs)
    .pipe(concat('theme-bottom.min.js'))
    .pipe(uglify())
    .pipe(dest('../web/js/'))
}

function fontTask () {
  return src(fonts)
    .pipe(dest('../web/css/fonts/'))
}

exports.default = parallel(scssTask, fontTask, topJsTask, bottomJsTask)
