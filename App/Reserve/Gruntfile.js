module.exports = function(grunt) {
    
    grunt.initConfig({
        main: {
            appName: 'Reserve',
            src: 'resources/assets/',
            output: '../../public/<%= main.appName.toLowerCase() %>/',
            proyect: {
                name: 'Abargon Reserve',
                version: '1.0.0',
                company: 'Melisa Company'
            }
        },
        less: {
            options: {
                compress: true
            },
            all: {
                files: {
                    '<%= main.output %>css/events-add.css': '<%= main.src %>less/events-add.less',
                    '<%= main.output %>css/events-report.css': '<%= main.src %>less/events-report.less',
                    '<%= main.output %>css/site.css': '<%= main.src %>less/site.less'
                }
            }
        },
        sass: {
            options: {
                style: 'compressed',
                noCache: true,
                sourcemap: 'none'
            },
            all: {
                files: {
                    '<%= main.output %>css/style.css': '<%= main.src %>sass/materialize.scss'
                }
            }
        },
        watch: {
            files: ['<%= main.src %>less/**/*.less'],
            tasks: ['less']
        }
    });
    
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.registerTask('default', [
        'watch'
    ]);
    
};
