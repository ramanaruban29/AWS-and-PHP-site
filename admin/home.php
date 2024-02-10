<div class="container">
<h3>Administrator Panel: Welcome <b> <?php echo $_SESSION['admin_ACCOUNT_NAME'];?> </b></h3>

<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Our Rooms
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
      Our Accommodation Management System has got various types of rooms that are categorized based on the no of tenants can be admitted to each rooms. . 
      Each room/house is owned by a particular House Owner and have a maximum number of tenants  and available bed counts that can be accommodated. Click<a href="mod_room/index.php"> HERE.</a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Room Types
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        This consists of the categories of rooms that are available in our system. Each Category of rooms Has got unique features different form the other. To view all of the categories of all types of rooms Click <a href="mod_roomtype/index.php">HERE.</a>  </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Reservation
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
       In this area, you can view all the reservation transaction of all tenants. And this area allows  Admin to confirm the request of guest or either to cancel the reservation. Click <a href="mod_reservation/index.php">HERE.</a>
       </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
          Available Facilities
        </a>
      </h4>
    </div>
    <div id="collapsefour" class="panel-collapse collapse">
      <div class="panel-body">
      This includes the list of of all facilities within available in the each room/house. They include the the luxury features and avilable beds and furnitures. <a href="mod_amenities/index.php">HERE. </a>     </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapsefive">
          Comments
        </a>
      </h4>
    </div>
    <div id="collapsefive" class="panel-collapse collapse">
      <div class="panel-body">
      This is the display of all the comments by visitors of the website after they have the viewed all the rooms as well as there rates and also the available facilities of each room/house. Click <a href="mod_comments/index.php">HERE</a> to view all comments.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapsesix">
          Users
        </a>
      </h4>
    </div>
    <div id="collapsesix" class="panel-collapse collapse">
      <div class="panel-body">
		The system displays the list of all people that have been registered in to the system.If a particular user is logged in the system the, such as users record is does not appear in the list of records. To view all the registered other than the logged in user Click <a href="mod_users/index.php">HERE.</a>
      </div>
    </div>
  </div>

</div>
</div>