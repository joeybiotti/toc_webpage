const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const babel = require('gulp-babel');
const imagemin = require('gulp-imagemin');

//Copy index.html from src to dist
gulp.task('copyHtml', function(){
    gulp.src('./src/*.html')
        .pipe(gulp.dest('./dist/'));
});

//Gulp Sass
gulp.task('sass', function(){
    gulp.src(['src/sass/*.scss'])
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('./dist'));
});

//Optimize Imgs
gulp.task('imageMin', function(){
    gulp.src('src/images/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/images'));
})

//Scripts
gulp.task('scripts', function(){
    gulp.src('src/scripts/*.js')
        .pipe(babel({
            presets: ['env']
        }))
        .pipe(uglify())
        .pipe(concat('main.js'))
        .pipe(gulp.dest('dist/scripts'))
})

//Gulp Default
gulp.task('default', ['copyHtml', 'sass', 'scripts', 'imageMin']);

//Gulp watch
gulp.task('watch', function(){
    gulp.watch('src/scripts/*.js', ['scripts']);
    gulp.watch('src/images/*', ['imageMin']);
    gulp.watch('src/sass/*.scss', ['sass']);
    gulp.watch('src/*.html', ['copyHtml']);
})