<div data-theme="e" data-role="header" data-position="fixed">
	<h3>Events</h3>
</div>

{{#events}}		
	
	<div data-role="content" class="ui-content">
	<!--<img src="bg1.jpg" style="max-width:100%;">-->
	
	<h3>Indian Cooking Lessons and Dinning Experience Every class</h3>	
	<p>{{address}}</p>
	<p>{{datetime_summary}}</p>
	<h4>Description</h4>
	<p class="bgclr">
		{{description}}
	</p>	
	
	<p>
	<strong>Category</strong>
	<p class="bgclr">
		{{#category}}
				{{name}}
		{{/category}}
	</p>	


		{{#web_sites}}
			{{#web_sites}}
				<strong>{{name}}</strong>
				<p class="bgclr">{{url}}</p>
			{{/web_sites}}
		{{/web_sites}}

	</div>

{{/events}}

<div data-theme="e" data-role="footer" data-position="fixed">
	<h3>Codeeccentric</h3>
</div>

