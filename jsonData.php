<?php
 
class Tdata {
 
	public $locations = array(
 
								array( 
									"label" => "New York City Zone 12, New York",
									"country" => "US",
									"description" => "This is a sample description",
								),
								array( 
									"label" => "East Boston, Massachssets",
									"country" => "US",
									"description" => "This is a sample description",
						 
								),
								array( 
									"label" => "Compton, Los Angeles",
									"country" => "US",
									"description" => "This is a sample description",
								),
								array( 
									"label" => "Lisbon, Portugal",
									"country" => "PT",
									"description" => "This is a sample description",
								),
							);
 
};
 
echo json_encode( new Tdata() );
 
?>