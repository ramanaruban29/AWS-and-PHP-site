
<div class="container">
	<?php include'sidebar.php';?>

		<div class="col-xs-12 col-sm-9">
			<!--<div class="jumbotron">-->
				<div class="">
					<div class="panel panel-default">
				
							<div class="panel-body">	
								<div class="col-xs-12 col-sm-12">

									<fieldset>
										
									
										<legend><h2 class="text-left"> <b> Company Mission </b> </h2></legend>
											<p>Provide our tenants a unique experience, through which they connect with our system, 
												and to offer top quality service to our entire stay at our boarding and provided comfort abundance to learn and continue their Academic activities without any laps in accommodation facilities.</p>
									</fieldset>	

									<fieldset>
										<legend><h2 class="text-left"> <b> Company Vision </b> </h2></legend>
											<p>UOJ-Accommodation Management System is to provide best quality of services applying top quality 
												boarding houses and accommodation facilities, in order to fulfill the best way in the relevant needs of every Undergraduates of University of Jaffna..</p>
									</fieldset>
									<fieldset>
										<legend><h2 class="text-left"> <b> About </b> </h2></legend>
										
									This website was launched in 2022 as a result of an innovative idea proposed by one of our fellow batchmate who is currently pursuing Honors degree in Computer Science at University of Jaffna. This site was actually developed as a group project for AWS course in the 3rd year. Since every undergraduate needs a peaceful and pleasant environment to study well and achieve their dreams, they actually need a better accommodation, so to provide them with a wider choice of Accommodation only this site was developed and this site is a profitless site and it will be further managed by University students Union of University of Jaffna.
									</fieldset>
									<br/>
									<fieldset>
										<legend><h2 class="text-left"> <b> Featured Rooms </h2></legend>
										<?php 

										$mydb->setQuery("SELECT *,typeName FROM room ro, roomtype rt WHERE ro.typeID = rt.typeID");
								  		$cur = $mydb->loadResultList();

											foreach($cur as $room){
												$image = WEB_ROOT . 'admin/mod_room/'.$room->roomImage;
												echo '<div style=" float:left;  margin:7px;">';		
												echo '<a href="'.$image.'" rel="prettyPhoto[mwaura]"><img src="'.$image.'" width="100px" height="120px" 
												style="-webkit-border-radius:5px; -moz-border-radius:5px;"  title="'.$room->roomName.'" alt="'.$room->roomName.'" >
												 <br>' .$room->typeName.'</a>';
												echo'</div>';
												
											}


										?>

									</fieldset>


								</div>
							</div>
						</div>	

				</div>
		<!--	</div>-->
		</div>
		<!--/span--> 
		<!--Sidebar-->

	</div>
