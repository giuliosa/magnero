var gulp = require('gulp'),
    sass = require('gulp-sass');

gulp.task('sass', function(){

    gulp.src('./sass/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('./'));   

});

gulp.task('listen', function(){
    gulp.watch('./sass/**/*.scss', ['sass']);
})