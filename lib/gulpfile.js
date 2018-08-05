const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();
const eslint = require('gulp-eslint');
const babel = require('gulp-babel');

//Gulp Sass
gulp.task('sass', function(){
    gulp.src(['../sass/*.scss'])
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('../css'))
        .pipe(browserSync.stream())
});

//Scripts
gulp.task('scripts', function(){
    gulp.src('scripts/*.js')
        .pipe(eslint())
        .pipe(babel())
        .pipe(gulp.dest('dist'))
});

//Server
gulp.task('browser-sync', function(){
    browserSync.init({
        server:{
            baseDir:'./'
        }
    })
})

//Gulp Default
gulp.task('default', ['sass', 'browser-sync', 'scripts']);