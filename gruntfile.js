module.exports = function(grunt) {

	// Configure tasks
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		bootlint: {
			options: {
				relaxerror: ['W003'],
				showallerrors: true
			},
			files: ['src/**/*.html']
		},
		csslint: {
			options: {
				important: false
			},
			src: ['src/css/tcs.css', 'src/css/slider.css']
		},
		cssmin: {
			target: {
				files: {
					'css/styles.min.css': ['src/css/*.css']
				}
			}
		},
		htmlmin: { // Task 
			dist: { // Target 
				options: { // Target options 
					removeComments: true,
					collapseWhitespace: true,
					minifyJS: true
				},
				files: { // Dictionary of files 
					'index.html': 'src/index.html',
					'about-tcs.html': 'src/about-tcs.html', // 'destination': 'source' 
					'contact-tcs.html': 'src/contact-tcs.html', // 'destination': 'source'
					'quality.html': 'src/quality.html', // 'destination': 'source' 
					'get-a-quote/pcbs.html': 'src/get-a-quote/pcbs.html', // 'destination': 'source' 
					'get-a-quote/polymer-stencils.html': 'src/get-a-quote/polymer-stencils.html', // 'destination': 'source' 
					'get-a-quote/magnetics.html': 'src/get-a-quote/magnetics.html', // 'destination': 'source' 
					'get-a-quote/test-equipment.html': 'src/get-a-quote/test-equipment.html', // 'destination': 'source'
					'services/flex-circuits.html': 'src/services/flex-circuits.html', // 'destination': 'source' 
					'services/pcbs.html': 'src/services/pcbs.html', // 'destination': 'source' 
					'services/polymer-stencils.html': 'src/services/polymer-stencils.html', // 'destination': 'source' 
					'services/magnetics.html': 'src/services/magnetics.html', // 'destination': 'source' 
					'services/test-equipment.html': 'src/services/test-equipment.html' // 'destination': 'source' 
				}
			},
		},
		sprite: {
			services: {
				src: ['src/img/flex*.jpg', 'src/img/mag*.jpg', 'src/img/rig*.jpg', 'src/img/stencils*.jpg'], // filter out the @2x images
				retinaSrcFilter: ['src/img/*@2x.jpg'],
				dest: 'img/icons/spritesheet.services.jpg',
				retinaDest: 'img/icons/spritesheet.services@2x.jpg',
				destCss: 'css/sprite.css'
			}
		},
		jshint: {
			// define the file(s) to lint
			files: ['src/js/*.js'],
			// configure JSHint (documented at http://www.jshint.com/docs/)
			options: {
				// more options here if you want to override JSHint defaults
				globals: {
					jQuery: true
				}
			}
		},
		uglify: {
			dist: {
				src: 'src/js/*.js',
				dest: 'js/script.min.js'
			},
			dev: {
				options: {
					beautify: true,
					mangle: false,
					compress: false,
					preserveComments: 'all'
				},

				// Developer's Note: These key-values are inside the dev object!
				src: 'src/js/*.js',
				dest: 'js/script.min.js'
			}
		},
		watch: {
			html: {
				files: ['src/**/*.html'],
				tasks: ['bootlint', 'htmlmin'],
				options: {
					// Start a live reload server on the default port 35729
					livereload: true
				}
			},
			css: {
				files: ['src/css/*.css'],
				tasks: ['csslint', 'cssmin'],
				options: {
					// Start a live reload server on the default port 35729
					livereload: true
				}
			},
			js: {
				files: ['src/js/*.js', 'gruntfile.js'],
				tasks: ['jshint', 'uglify:dev']
			}
		}
	});

	// Load the plugins
	grunt.loadNpmTasks('grunt-bootlint');
	grunt.loadNpmTasks('grunt-contrib-htmlmin');
	grunt.loadNpmTasks('grunt-contrib-csslint');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-spritesmith');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Register task(s)
	grunt.registerTask('default', ['bootlint', 'htmlmin', 'csslint', 'cssmin', 'jshint','uglify:dev']);
	grunt.registerTask('dist', ['htmlmin:dist', 'uglify:dist']);
	grunt.registerTask('spriteGen', ['sprite'])
};