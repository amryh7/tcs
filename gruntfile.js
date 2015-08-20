module.exports = function(grunt) {

	// Configure tasks
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		bootlint: {
			options: {
				showallerrors: true
			},
			files: ['src/*.html']
		},
		csslint: {
			options: {
				quiet: true
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
		htmltidy: {
			compileMultiple: {
				files: [{
					expand: true,
					cwd: 'src',
					src: ['index.html'],
					dest: ''
				}],
				options: {
					doctype: 'html5',
					hideComments: true,
					indent: true
				}
			}
		},
		jshint: {
			// define the file(s) to lint
			files: ['src/js/tcs.js'],
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
		watch:{
			html: {
				files: ['src/*.html'],
				tasks: ['bootlint', 'htmltidy'],
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
				files: ['src/js/*.js'],
				tasks: ['jshint', 'uglify:dev']
			}
		}
	});

	// Load the plugins
	grunt.loadNpmTasks('grunt-bootlint');
	grunt.loadNpmTasks('grunt-contrib-csslint');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-htmltidy');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	
	// Register task(s)
	grunt.registerTask('default', ['bootlint', 'cssmin', 'csslint', 'htmltidy', 'jshint', 'uglify:dev']);
	grunt.registerTask('dist', ['uglify:dist']);

};