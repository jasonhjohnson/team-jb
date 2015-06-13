var Calendar = (function($) {
  return function() {
    var self = this;

    self.init = function() {
		
		$.ajax({
	        url: '/wp-json/events',
	        type: 'GET',     
	        success: function (res) {  
				var data = {};
				 				
				for (var i = 0; i < res.length; i++) {
					var event = res[i];
					 var start = new Date(event.start);
					 var startFormatted =  $.datepicker.formatDate( "mm-dd-yy", start); //start.toLocaleDateString().replace(/\//g, '-');
					 
					 var title = '';
					 if (event.title) {
					 	title = event.title.replace(/'/g, "\\'");
					 }
					 
					 var content = '<a href="' + event.link + '" target="_blank">' + title + '</a>';
					
					 data[startFormatted] = content;				
				 }	
				 				 
				 var cal = $( '#calendar' ).calendario( {
						onDayClick : function( $el, $contentEl, dateProperties ) {														
							var content = $contentEl.content;
							var holdMe = document.createElement('div');
							holdMe.innerHTML = content;							
							var href = holdMe.firstChild.getAttribute('href');
							
							//window.open(href, '_blank');					
						},
						caldata : data,
						checkUpdate: false
					} ),
					$month = $( '#custom-month' ).html( cal.getMonthName() ),
					$year = $( '#custom-year' ).html( cal.getYear() );
				$( '#custom-next' ).on( 'click', function() {
					cal.gotoNextMonth( updateMonthYear );
				} );
				$( '#custom-prev' ).on( 'click', function() {
					cal.gotoPreviousMonth( updateMonthYear );
				} );
				$( '#custom-current' ).on( 'click', function() {
					cal.gotoNow( updateMonthYear );
				} );
				function updateMonthYear() {				
					$month.html( cal.getMonthName() );
					$year.html( cal.getYear() );
				}
				// add more data later on..if we want. As an example:
				/*
				someElement.on( 'click', function() {
					
					cal.setData( {
						'03-01-2013' : '<a href="#">testing</a>',
						'03-10-2013' : '<a href="#">testing</a>',
						'03-12-2013' : '<a href="#">testing</a>'
					} );
					// goes to a specific month/year
					cal.goto( 3, 2013, updateMonthYear );
				} );
				*/
			}
		});         
    };      
  };
}(jQuery));
