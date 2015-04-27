<HTML>
	<HEAD>
		<HEAD/>
			<TITLE>A php test webpage</TITLE>
				<BODY>
					<?php  
					$short_array = array('one' =>array('name'=>"World of Warcraft",'type'=>"Role play game"),
															'two' =>array('name'=>"Starcraft",'type'=>"Real Time Strategy"),
															'three' =>array('name'=>"Heroes of Strom",'type'=>"Multiplayer Online battle arena"),
															'four' =>array('name'=>"HearthStone",'type'=>"Trade card game"),
															'five' =>array('name'=>"DiabloIII",'type'=>"Role play game"));
						foreach($short_array as $key=>$value){
							echo $key . "  : " . $value['name'] . "  " . $value['type'];
							echo "</br>";
					}
					reset($short_array);
						foreach($short_array as $key=>$value){
							echo $key . " : ";
							foreach($value as $key2=>$value2){
								echo "</t>";
								echo $key2 . " : " . $value2;
								echo "</br>";
							}
						}
					reset($short_array);
					
					while(list($key,$value) = each($short_array)){
						while(list($key2,$value2) = each($value)){
						echo $key2 . " : " . $value2;
						echo "</br>";
						}
					}	
					?>
					<BODY/>
<HTML/>