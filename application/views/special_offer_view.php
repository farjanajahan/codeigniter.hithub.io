<style>
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #f1f1f1;
    position: fixed;
    
    
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#">Home</a></li>
  <li><a href="booking">Booking</a></li>
  <li><a href="aboutus">About Us</a></li>
  <li><a href="services">Services</a></li>
  <li><a href="service_image">Services Image</a></li>
  <li><a href="gallery">Gallery</a></li>
  <li><a href="salon_image">Salon Image</a></li>
  <li><a href="special_offer">Special Offer</a></li>
  <li><a href="member">Members</a></li>  
  <li><a href="<?php echo base_url('user/user_logout');?>">Logout</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;">



<?php
$user_id=$this->session->userdata('user_id');

if(!$user_id){

  redirect('user/login_view');
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Profile Dashboard-CodeIgniter Login Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
	  <div align="right"><a href="<?php echo 'special_offer_add' ?>">Add Special Offer</a></div>	
      <table class="table table-bordered table-striped">


        <tr>
          <th colspan="6"><h4 class="text-center">Special offer Info</h3></th>

        </tr>
<tr>
	<th>Title</th><th>Special Offer</th><th>Action</th>
</tr>        
<?php



	foreach ($special_offer->result()as $row){
      echo "<tr>
	<th>$row->title</th><th>$row->description</th>";
	?>
	<th><a href="<?php echo 'special_offer_edit?id='.$row->id; ?>">Edit</a> | <a href="<?php echo 'special_offer_delete?id='.$row->id; ?>">Delete</a></th>
</tr> 
<?php

     

}




?>        

      </table>


    </div>
  </div>

</div>
</div>

</body>
</html>

