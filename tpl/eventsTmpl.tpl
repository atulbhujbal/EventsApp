<ul data-role="listview" data-theme="d" data-inset="false" id="list_locations" style="padding: 0;margin: 0;">
{{#events}}	
<li data-corners="false" data-shadow="false" data-iconshadow="true" data-wrapperels="div" data-icon="arrow-r" data-iconpos="right" data-theme="d" class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-li-has-thumb ui-btn-hover-d ui-btn-up-d">

	<div class="ui-btn-inner ui-li">
		
		<div class="ui-btn-text">
			
			<a href="#" class="ui-link-inherit eventlink" >
				
				<!--<a href="#" onclick="newfunction('{{{id}}}')">link</a>-->

				<!--<li data-theme="c" class="listItem_location">-->
				<input type="hidden" class="id" value="{{{id}}}"/>
				<img id="event_{{id}}" class="ui-li-thumb event_img" />
				<h3 class="ui-li-heading">{{name}}</h3><p class="ui-li-desc">{{address}}</p>
				
				<script>
					var event_img_id = "event_{{{id}}}";
				</script>
				
				{{#images}}
					{{#images}}
						{{#is_primary}}
							{{#transforms}}
								{{#transforms}}
									<script>
										var trans_id = "{{{transformation_id}}}";
										if(trans_id == 15)
										{
											//alert(event_img_id);
											var eid = "#"+event_img_id;
											$(eid).attr("src","{{{url}}}");
										}
									</script>
								{{/transforms}}
							{{/transforms}}
						{{/is_primary}}
					{{/images}}
				{{/images}}

			</a>

		</div>
		<span class="ui-icon ui-icon-arrow-r ui-icon-shadow">&nbsp;</span>
		</div>
	</li>
	{{/events}}	
</ul>	

<style>
#eventlist.ui-content {	padding: 0; }

</style>
