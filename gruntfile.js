module.exports = function(grunt) {

	// Configure tasks
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		bootlint: {
			options: {
				relaxerror: ['W003'],
				showallerrors: true
			},
			files: ['src/*.html']
		},
		csslint: {
			options: {
				important: false
			},
			src: ['src/css/tcs.css']
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
					'index.html': 'src/index.html', // 'destination': 'source' 
				}
			},
			dev: { // Another target 
				// options: {
				// 	lint: true
				// },
				files: {
					'index.html': 'src/index.html'
				}
			}
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
				files: ['src/*.html'],
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
	grunt.registerTask('default', ['bootlint', 'htmlmin:dev', 'csslint', 'cssmin', 'jshint','uglify:dev']);
	grunt.registerTask('dist', ['htmlmin:dist', 'uglify:dist']);
	grunt.registerTask('spriteGen', ['sprite'])
};