
var gulp = require('gulp'); 
var uglifycss = require('gulp-uglifycss');

var concatCss = require('gulp-concat-css');
 
gulp.task('css', function (done) {
  gulp.src('css/*.css')
    .pipe(uglifycss({
      "maxLineLen": 80,
      "uglyComments": true
    }))
    .pipe(gulp.dest('assets'));
	done();
});


//gulp.task('conc', function (done) {
//  gulp.src('css/*.css')
//    .pipe(concatCss("assets/con1.css"))
//    .pipe(gulp.dest('out/'));
//	done();
//});




