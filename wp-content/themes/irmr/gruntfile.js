module.exports = function(grunt) {
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-sass');

  grunt.initConfig({

    uglify: {
      my_target: {
        files: {
         '_/js/scripts.js': ['_/components/js/*.js']
        } //files
      } //my_target
    }, //uglify

    compass: {
      dev: {
        options: {
          sourcemap: true,
          require: 'susy',
          require: 'breakpoint',
		  require: 'modular-scale',
          config: 'config.rb'
        } //options
      } //dev
    }, //compass

    watch: {
      scripts: {
        files: [ '_/components/js/*.js' ],
        tasks: ['uglify']
      }, //scripts
      sass: {
        files: ['_/components/sass/*.scss'],
       	tasks: ['compass:dev']
      }, //sass
      html: {
         files: ['*.html']
      } //html
    }, //watch

  }) //initConfig
  grunt.registerTask('default', 'watch');
} //exports