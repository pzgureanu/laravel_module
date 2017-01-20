// var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

// elixir(function(mix) {
//     mix.sass('app.scss');
// });
'use strict';
var path = require('path'); 
var gulp = require('gulp');
var argv = require('yargs').argv;
var exec = require('gulp-exec');
var fs  = require('fs');
var color  = require('gulp-color');

gulp.task('install', function () {
	var module = argv.m;
	if(module) {
		if (fs.existsSync('app/Modules/'+module)) { 
			return console.log(color('Module is already instaled!','RED'))
		}
		var source = 'modules/'+ module +'/**/**';
		if (fs.existsSync('modules/'+module)) {
		  	var dest = 'app/Modules/'+module;
			var migration_path = dest+'/migrations/';
			console.log( color('Module instaled with success!','GREEN'));
		    return gulp.src([source]).pipe(gulp.dest(dest)).pipe(exec('php artisan migrate --path='+migration_path));
		} else {
			console.log(color('Module not found!','RED'));
		}
	} else {
		console.log(color('Need to specify module name!','RED'));
	}	 
});