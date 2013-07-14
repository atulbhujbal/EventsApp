{{#event}}	
	
	<!--<img src="bg1.jpg" style="max-width:100%;">-->
	<h2>{{address}}</h2>
	<p>{{datetime_summary}}</p>
	<h4>Description</h4>
	<p class="bgclr">
		{{description}}
	</p>	
	
	<p>
	<strong>Category</strong></p>
	<p class="bgclr">
		{{#category}}
				{{name}}
		{{/category}}
	</p>	
		{{#web_sites}}
			{{#web_site}}
				<p class="bgclr"><a href="{{url}}">{{name}}</a></p>
			{{/web_site}}
		{{/web_sites}}
	
{{/event}}		


