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

      <table class="table table-bordered table-striped">


        <tr>
          <th colspan="2"><h4 class="text-center">User Info</h3></th>

        </tr>
          <tr>
            <td>User Name</td>
            <td><?php echo $this->session->userdata('user_name'); ?></td>
          </tr>
          <tr>
            <td>User Email</td>
            <td><?php echo $this->session->userdata('user_email');  ?></td>
          </tr>
          <tr>
            <td>User Age</td>
            <td><?php echo $this->session->userdata('user_age');  ?></td>
          </tr>
          <tr>
            <td>User Mobile</td>
            <td><?php echo $this->session->userdata('user_mobile');  ?></td>
          </tr>
      </table>


    </div>
  </div>

</div>
</div>

</body>
</html>

