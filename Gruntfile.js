module.exports = function (grunt) {

    require('load-grunt-tasks')(grunt);
    //This does the same almost as:
    // var pkg = grunt.file.readJSON('package.json'),
    // taskName;

    // for(taskName in pkg.devDependencies) {
    //     if(taskName.substring(0, 6) == 'grunt-') {
    //         grunt.loadNpmTasks(taskName);
    //     }
    // }
    // So you can do e.g. grunt clean, or grunt watch, etc in command line

    //because you can't abstract too much
    var vftrConfig = {
        production: 'production'
    }

    grunt.initConfig({
        vftr: vftrConfig,
        //watch should go first for ftp'ing up to sproduction directory... I think

        clean: {
            // production: ['production/'] this either creates or deletes the directory
            production: {
                files: [{
                    dot: true,
                    src: [
                        '<%= vftr.production %>/*',
                    ]
                }]
            }
        },

        //rev then usemin then copy
        rev: {
            production: {
                files: {
                    src: [
                        '<%= vftr.production %>/js/vftr-angular{,*/}*.js'
                    ]
                }
            }
        },

        // Put files not handled in other tasks here, should come last
        copy: {
            production: {
                files: [{
                    expand: true,
                    dot: false,
                    dest: '<%= vftr.production %>',
                    src: [
                        '*.php',
                        '!index.php',
                        'libraries/angular/angular.min.js',
                        'fonts/*',
                        'images/*'
                    ]
                }]
            }
        }

    }); //end initConfig

    // grunt.registerTask('default', []);
    grunt.registerTask('build', [
        'clean:production',
        'copy:production'
        ]);
};