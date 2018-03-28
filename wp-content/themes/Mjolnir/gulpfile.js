var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    cleanCSS    = require('gulp-clean-css'),
    htmlmin     = require('gulp-htmlmin');

gulp.task('sass', function(){

    gulp.src('./sass/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('./src/css'));   

});

gulp.task('minify-css', () => {
    return gulp.src('./src/css/**/*.css')
               .pipe(cleanCSS())
               .pipe(gulp.dest('./'));
 });


 gulp.task('minify-html', () =>{
    return gulp.src('./src/html/**/*')
        .pipe(htmlmin({ collapseWhitespace: true }))
               .pipe(gulp.dest('./'));
 });

gulp.task('listen', function(){
    gulp.watch('./sass/**/*.scss', ['sass']);
})


