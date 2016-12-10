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
	pluginDirectory = '../wp-content/plugins',
	themeDirectory = '../wp-content/themes/autoobuv',
	devTpl = 'dev/templates/',
	devPlg = 'dev/plugins/',
	devImg = 'dev/images/',
	devCss = 'dev/css/',
	devJs = 'dev/js/'

//copy templates
gulp.task('tplCp', function () {
	gulp.src(devTpl + '*.php')
	.pipe(gulp.dest(themeDirectory))
	.pipe(livereload());
});

//copy plugins
gulp.task('plgCp', function () {
	gulp.src(devPlg + '*.php')
	.pipe(gulp.dest(pluginDirectory))
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
		.pipe(gulp.dest(themeDirectory))
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
	gulp.watch(devTpl + '**/*.php', ['tplCp']);
	gulp.watch(devPlg + '**/*.php', ['plgCp']);
	gulp.watch(devImg + '**/*.svg', ['svgMin']);
	gulp.watch(devCss + '**/*.css', ['cssPrep']);	
	gulp.watch(devJs + '*.js', ['jsConcat']);
});

gulp.task( 'default', [ 'tplCp', 'plgCp', 'svgMin', 'cssPrep', 'jsConcat', 'watch' ] );