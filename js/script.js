/*$(function(){

 
	var tmpl, 	// Main template HTML
	tdata = {}	// JSON data object that feeds the template
 
	// Initialise page
	var initPage = function(){
 
		// Load the HTML template
		$.get('template.html',function(tmplt){
				tmpl = tmplt;
			}
		)											
 
		// Retrieve the server data and then initialise the page	
		$.getJSON("http://api.eventfinder.com.au/v2/events.json?callback=?", {
                    rows : 10,
					fields : "event:(name,id,address,images),images:(transforms),transforms:(url)"
				 },
			function(data){
				console.log(data);
				$.extend(tdata,data);
				//tdata=data;
				var renderedPage = Mustache.to_html( tmpl, tdata );
				$("#page2").html( renderedPage );
			}
		)
 
		// When AJAX calls are complete parse the template 
		// replacing mustache tags with vars
		/*$(document).ajaxStop(function(){
			alert("g");	
			
			
		})*		
	}()

	
})

var newfunction = function(id){
	
	alert("hello "+id);
	
}*/
$( document ).on( "pageinit", "#page1", function() {

	$.mobile.changePage( "#page2", { transition: "fade" });
	
});

$( document ).on( "pageinit", "#page2", function() {

	var tmpl, 	// Main template HTML
	tdata = {}	// JSON data object that feeds the template
 
	// Load the HTML template
	$.get('tmpl/eventsTmpl.html',function(tmplt){
			tmpl = tmplt;
		}
	)											

	// Retrieve the server data and then initialise the page	
	$.getJSON("http://eventsaroundyou:dksvrtzfqmrd@api.eventfinder.com.au/v2/events.json?callback=?", {
                rows : 20,
				fields : "event:(name,id,address,images),images:(transforms),transforms:(url)"
			 },
		function(data){
			console.log(data);
			$.extend(tdata,data);
			//tdata=data;
			var renderedPage = Mustache.to_html( tmpl, tdata );
			$("#eventlist").html( renderedPage );
			
		}
	)
	
	$(document).on('click', '.eventlink', function(){

	 		var eid = $(".id",this).val();
			//alert("Loading..."+id);

			var etmpl, 	// Main template HTML
			edata = {}	// JSON data object that feeds the template
		 // http://eventsaroundyou:dksvrtzfqmrd@api.eventfinder.com.au/v2/events.xml
			// Load the HTML template
			$.get('tmpl/eventTmpl.html',function(tmpl2){
					etmpl = tmpl2;
				}
			)											

			// Retrieve the server data and then initialise the page	
			$.getJSON("http://eventsaroundyou:dksvrtzfqmrd@api.eventfinder.com.au/v2/events.json?callback=?", {id : eid},
				function(data){
					console.log(data);
					$.extend(edata,data);
					//tdata=data;
					var Page = Mustache.to_html( etmpl, edata );
					$("#page3").html( Page );
					$.mobile.changePage( "#page3", { transition: "slideup" });
				}
			)

	});//On event link clicked
	
});


	





