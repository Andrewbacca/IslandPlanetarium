const   gulp = require('gulp'),
        sass = require('gulp-sass')(require('sass')),
        minifycss = require('gulp-clean-css'),
        del = require('del'),
        notify = require('gulp-notify'),
        uglify = require('gulp-uglify'),
        concat = require('gulp-concat');

function styles(cb) {
    return gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(minifycss())
        .pipe(gulp.dest('src/css'))
        .pipe(notify({ message: 'Styles task complete' }))
}

function scripts(cb) {
    return gulp.src([
        'node_modules/bootstrap/dist/js/bootstrap.js',
        'js/*.js'
      ])
      .pipe(concat('main.js'))
      .pipe(uglify())
      .pipe(gulp.dest('src/js'))
      .pipe(notify({ message: 'Scripts task complete' }))
}

function styles_local(cb) {
    return gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(minifycss())
        .pipe(gulp.dest('../WightFibre/wp-content/themes/wfb/css'))
        .pipe(notify({ message: 'Styles task complete' }))
}

function scripts_local(cb) {
    return gulp.src([
        'node_modules/bootstrap/dist/js/bootstrap.js',
        'js/*.js'
    ])
        .pipe(concat('main.js'))
        .pipe(uglify())
        .pipe(gulp.dest('../WightFibre/wp-content/themes/wfb/js'))
        .pipe(notify({ message: 'Scripts task complete' }))
}

function clean(cb) {
    del(['src/css/*'], cb)
}

function watch() {
    gulp.watch(['sass/*.scss','src/sass/**/*.scss'], styles)
    gulp.watch(['js/*.js'], scripts)
}

function watch_local() {
    gulp.watch(['sass/*.scss','src/sass/**/*.scss'], styles_local)
    gulp.watch(['src/js/*.js'], scripts_local)
}

exports.clean = clean;
exports.styles = styles;
exports.scripts = scripts;
exports.watch = watch;
exports.styles_local = styles_local;
exports.scripts_local = scripts_local;
exports.watch_local = watch_local;


exports.default = gulp.series(clean, gulp.parallel([styles,scripts]))
