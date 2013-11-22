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
        //watch should go first for ftp'ing up to production directory... I think

        clean: {
            // production: ['production/'] this either creates or deletes the directory
            production: {
                files: [{
                    dot: true,
                    src: [
                        '<%= vftr.production %>/*'
                    ]
                }]
            }
        },

        concat: {
                vftr: {
                    src: [
                        'js/vftr-angular/app.js',
                        'js/vftr-angular/controllers/root.js',
                        'js/vftr-angular/directives/responsive-trigger.js',
                        'js/vftr-angular/directives/mobile-nav-move.js',
                        'js/vftr-angular/directives/mobile-backbutton.js'
                        ],
                    dest: '<%= vftr.production %>/js/vftr-angular/vftr.js'
                },
                angular: {
                    src: [
                        'libraries/angular-animate/angular-animate.min.js',
                        'libraries/angular-route/angular-route.min.js',
                        'libraries/angular-touch/angular-touch.min.js'
                    ],
                    dest: '<%= vftr.production %>/libraries/angular/angular-modules.min.js'
                }
        },

        uglify: {
            options: {
                mangle: false
            },
            production: {
                files: {
                    '<%= vftr.production %>/js/vftr.js': ['<%= vftr.production %>/js/vftr.js'] //destinatio:[source]
                }
            }
        },

        // useminPrepare and usemin here would be nice

        // Put files not handled in other tasks here
        copy: {
            production: {
                files: [{
                    expand: true,
                    dot: false,
                    dest: '<%= vftr.production %>',
                    src: [
                        '*.php',
                        // 'inc/*', //solved by tweaking functions.php
                        'languages/*',
                        'style.css',
                        'libraries/angular/angular.min.js',
                        'fonts/*',
                        'images/*',
                        'data/*'
                    ]
                }]
            }
        },

        cssmin: {
            minify: {
                src: '<%= vftr.production %>/style.css',
                dest: '<%= vftr.production %>/style.css'
            }
        },

        rev: {
            production: {
                files: {
                    src: [
                        '<%= vftr.production %>/js/vftr{,*/}*.js'
                    ]
                }
            }
        },

    }); //end initConfig

    // grunt.registerTask('default', []);
    grunt.registerTask('build', [
        'clean:production',
        'concat:vftr',
        'concat:angular',
        'uglify',
        'copy:production',
        'cssmin',
        'rev'
        ]);
};