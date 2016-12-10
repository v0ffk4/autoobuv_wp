//define components
var gulp = require('gulp'),
	gutil = require('gulp-util'),
	livereload = require('gulp-livereload'),

	//html processing
	htmlmin = require('gulp-html-minifier'),

	//image processing
	svgmin = require('gulp-svgmin'),

	//css processing
	postcss = require('gulp-postcss'),
	autoprefixer = require('autoprefixer'),
	cssnano = require('cssnano'),
	precss = require('precss'),

	//js processing
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	rename = require('gulp-rename'),

	//define directories
	themeDirectory = '../wp-content/themes/autoobuv',
	devTpl = 'dev/',
	devImg = 'dev/images/',
	devCss = 'dev/css/',
	devJs = 'dev/js/'

//copy templates
gulp.task('tplMin', function () {
	gulp.src(devTpl + '*.php')
	.pipe(gulp.dest(themeDirectory))
	.pipe(livereload());
});

//svg minify
gulp.task('svgMin', function () {
    gulp.src(devImg + '*.svg')
        .pipe(svgmin())
        .pipe(gulp.dest(themeDirectory + '/i'))
        .pipe(livereload());
});

//compile SASS synthax / minify
gulp.task('cssPrep', function() {
	gulp.src(devCss + 'style.css')
		.pipe(postcss([
			precss(),
			autoprefixer(),
			cssnano()
	]))
	.on('error', gutil.log)
		.pipe(gulp.dest(themeDirectory + '/c'))
		.pipe(livereload());
});

//concatinate & minify & rename javascript
gulp.task('jsConcat', function(){
	gulp.src(devJs + '*.js')
		.pipe(concat('script.js'))
		.pipe(uglify())
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest(themeDirectory + '/j'))
		.pipe(livereload());
});

//watch & process
gulp.task('watch', function() {
	livereload.listen();
	gulp.watch(devTpl + '**/*.php', ['tplMin']);
	gulp.watch(devImg + '**/*.svg', ['svgMin']);
	gulp.watch(devCss + '**/*.css', ['cssPrep']);	
	gulp.watch(devJs + '*.js', ['jsConcat']);
});

gulp.task( 'default', [ 'tplMin', 'svgMin', 'cssPrep', 'jsConcat', 'watch' ] );