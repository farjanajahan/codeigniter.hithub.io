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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
<?php echo form_open('user/member_update') ; ?>
      <table class="table table-bordered table-striped">


        <tr>
          <th colspan="6"><h4 class="text-center">Member Info Update</h3></th>

        </tr>
    




      <tr>
	<th><input type='hidden' id='id' name='id' 
	value="<?php echo $member['user_id']; ?>"></th>
    </tr> 		
     <tr>
          <th>User Name</th>
          <th><input type='text' id='name' name='name' value="<?php echo $member['user_name']; ?>"></th>
    </tr> 
     <tr>
          <th>Password</th>
          <th><input type='password' id='password' name='password' value="<?php echo $member['user_password']; ?>"></th>
    </tr>    
     <tr>
          <th>Email</th>
          <th><input type='email' id='email' name='email' value="<?php echo $member['user_email']; ?>"></th>
    </tr>     
     <tr>
          <th>Age</th>
          <th><input type='text' id='age' name='age' value="<?php echo $member['user_age']; ?>"></th>
    </tr> 
     <tr>
          <th>Mobile</th>
          <th><input type='text' id='mobile' name='mobile' value="<?php echo $member['user_mobile']; ?>"></th>
    </tr>           
		<tr><td> <?php
 	echo form_submit('submit','Submit');
 	echo form_close();
 ?></td></tr>
      </table>


    </div>
  </div>

</div>
</div>

</body>
</html>

