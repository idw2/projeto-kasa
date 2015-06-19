module.exports = function (grunt) {
    grunt.initConfig({
        cssmin: {
            options: {
                shorthandCompacting: false,
                roundingPrecision: -1
            },
            target: {
                files: {
                    'build.css': [
                        'assets/css/**/*.css',
                        'style.css'
                    ]
                }
            }
        },
         uglify: {
            target: {
              files: {
                'build.min.js': ['assets/js/*.js']
              }
            }
          },
        watch: {
            css: {
                files: [
                    '**/*.css',
                    '!build.css'
                ],
                tasks: ['cssmin']
            },
            js:{
                files: [
                        'assets/js/*.js',
                ],
                tasks: 'uglify'
            }
        }
       
    });

    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.task.registerTask('default', ['css', 'js', 'html']);
};