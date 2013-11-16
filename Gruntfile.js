module.exports = function (grunt) {

    require('load-grunt-tasks')(grunt);
    //This does the same as:
    // var pkg = grunt.file.readJSON('package.json'),
    // taskName;

    // for(taskName in pkg.devDependencies) {
    //     if(taskName.substring(0, 6) == 'grunt-') {
    //         grunt.loadNpmTasks(taskName);
    //     }
    // }
    // So you can do e.g. grunt clean, or grunt watch, etc in command line

    grunt.initConfig({
        //watch should go first for ftp'ing up to sproduction directory... I think

        clean: {
            // production: ['production/']
            production: {
                files: [{
                    dot: true,
                    src: [
                        'production/*',
                    ]
                }]
            }
        },

        // Put files not handled in other tasks here
        copy: {
            production: {
                files: [{
                    expand: true,
                    dot: false,
                    dest: 'production',
                    src: [
                        '*.php',
                        '!index.php',
                        '*.css',
                        'bower_components/angular/angular.min.js'
                        // '*.{ico,png}',
                        // 'images/*',
                        // 'fonts/*'
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