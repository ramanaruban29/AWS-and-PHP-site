<?php
if(isset($_POST['login'])){
	$email = $_POST['log_email'];
	$pass  = $_POST['log_pword'];
	
	 if ($email == '' OR $pass == '') {

         	message("Invalid Username and Password!", "error");
			redirect("index.php");
         
    } else {
	$guest = new Guest();
	$res = $guest->guest_login($email, $pass);
		if($res == true){
			redirect("index.php");
		}else{

			message("Username or Password Not Registered! Contact Your administrator.","error");
			redirect("index.php");
		}
	}

}
?>

<!--Side bar-->
			<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
			<div class="sidebar-nav">
		   <div class="panel panel-success">
		   
			 <div class="panel-heading"><b> Rooms Reservation </b></div>
			  <div class="panel-body">	
						   <form  method="POST" action="#.php">
								<div class="col-xs-12 col-sm-12">

					            	<div class="form-group">
					            		<div class="row">
					            			<div class="col-xs-12 col-sm-12">
					            				<label class="control-label" for="from">Check In</label>
						     
							                    <input class="form-control from" size="11" value="<?php echo (isset($_SESSION['from'])) ? $_SESSION['from'] : ''; ?>" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd" type="text" value=""  name="from" id="from">
							                   
						              		</div>
						            	</div>
						            </div>
						            <div class="form-group">
						            	<div class="row">
					            			<div class="col-xs-12 col-sm-12">
					            				<label class="control-label" for="to"> <b> Check Out </b> </label>
						              			
								                    <input class="form-control to" size="11" type="text" value="<?php echo (isset($_SESSION['to'])) ? $_SESSION['to'] : ''; ?>"  name="to" id="to" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
								                   
						              		</div>
						            	</div>
						            </div>

						            <div class="form-group">
						            	<div class="row">
					            			<div class="col-xs-12 col-sm-12">
						           				 <button type="submit" class="btn btn-success" align="right"name="avail"> <b> Check Availability </b></button>
						           			 </div>
						            	</div>
						            </div>
						        </div>
					        </form>
						</div>
			
		</div>
			
				
				 <form name="clock">
			                  
					  <input  class="form-control" id="trans" type="label"  name="face" value="">
				</form>
						

		    <hr>
			

	

		
	</div>
			<!--/.well --> 
		</div>
		<!--/span-->
		<!--End of Side bar-->
