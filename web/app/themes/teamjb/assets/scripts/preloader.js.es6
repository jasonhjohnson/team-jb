//import {$} from 'jquery';

export class Preloader {
    constructor() {
        console.log('Preloader initialized.');  
        this.$window = $(window);
    }
    
    run() {        
        let _self = this;    
        this.preloader = $('.coll-site-preloader');
   
       _self.$window.load(function () {
          _self.load(); 
       });
    }   
    
    load() {
        let _self = this;
        
         $('.wrapper.common').css('visibility', 'visible');

        _self.preloader.animate({
            opacity: 0 
        }, 
        500, 
        "linear", 
        function () {          
            $(this).remove();
        });
    }
}