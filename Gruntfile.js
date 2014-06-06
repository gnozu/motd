module.exports = function(grunt) {

	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-less');

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		clean: {
			build: ["public/css/build", "public/js/build"]
		},
		concat: {
			build: {
				src: ['public/css/DT_bootstrap.css', 'public/css/courses.css'],
				dest: 'public/css/build/concat.css'
			}
		},
		uglify: {
			options: {
				banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
			},
			build: {
				src: 'public/js/*.js',
				dest: 'public/js/build/<%= pkg.name %>.min.js'
			}
		},
		cssmin: {
			options: {
				banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */'
			},
			build: {
				src: 'public/css/build/concat.css',
				dest: 'public/css/build/<%= pkg.name %>.min.css'
			}
		},


		less: {
		  development: {
		    files: {
		      './public/css/courses.css': './public/css/courses.less',
		      './public/css/news.css': './public/css/news.less'
		    }
		  },

		  production: {
		    options: {
		      yuicompress: true
		    },

		    files: {
		      './public/css/courses.css': './public/css/courses.less',
		      './public/css/news.css': './public/css/news.less'
		    }
		  }
		},

		watch: {
            less: {
                files: ['./public/css/courses.less', './public/css/news.less'],
                tasks: ['clean', 'uglify', 'concat', 'less:development', 'removeconcat' ],
                options: {
                    nospawn: true,
                }
            },
            scripts: {
            	 files: ['public/js/*.js'],
            	 tasks: ['clean', 'uglify'],
            	 options: {
                    nospawn: true,
                }
            }
        }
	});

	grunt.registerTask('removeconcat', 'Removes concatted files', function(){
		grunt.file.delete('public/css/build/concat.css');
		grunt.log.writeln('Removed concatted CSS file.');
	});

	// Default task(s).
	// not using cssmin because Pantheon can't cope with minified css
	grunt.registerTask('default', ['clean', 'uglify', 'concat', 'less:development', 'removeconcat' ]);
	grunt.registerTask('production', ['clean', 'uglify', 'concat', 'less:production', 'removeconcat' ] )
};

