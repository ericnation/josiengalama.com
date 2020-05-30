var gulp = require('gulp'),
	stylus = require('gulp-stylus'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglifyjs'),
	cssmin = require('gulp-cssmin'),
	autoprefixer = require('gulp-autoprefixer'),
	cssbeautify = require('gulp-cssbeautify');
	concatCss = require('gulp-concat-css');

// gulp.task('scripts', function() {

// 	return gulp.src([
// 		'vendors/*.js'
// 	])
// 	.pipe(concat('plugins.min.js'))
// 	.pipe(uglify())
// 	.pipe(gulp.dest('scripts/'));


// });

// gulp.task('css', function() {

// 	return gulp.src([
// 		'css/plugins/*.css'
// 	])
// 	.pipe(concatCss('plugins.min.css'))
// 	.pipe(cssmin())
// 	.pipe(gulp.dest('css/'));

// });

gulp.task('stylus', function() {

	return gulp.src([
		'assets/css/stylus/style.styl',
		'assets/css/stylus/gutenberg-style.styl'
	])
	.pipe(stylus())
	.pipe(autoprefixer('last 2 versions'))
	.pipe(cssbeautify())
	.pipe(gulp.dest('assets/css/'));


});


gulp.task('watch', function() {
  	gulp.watch('assets/css/**/*.styl', ['stylus']);
  	// gulp.watch('css/plugins/*.css', ['css']);
  	// gulp.watch('vendors/*.js', ['scripts']);
});



// gulp.task('default', ['watch', 'css', 'stylus', 'scripts']);
gulp.task('default', ['watch', 'stylus']);