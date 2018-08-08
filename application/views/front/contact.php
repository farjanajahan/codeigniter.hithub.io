<style>
h1 {
    color: red ;
    text-align: center;
	font:bold;
}

p {
    font-family: verdana;
    font-size: 20px;
}
</style>

<form role="form" method="post" action="<?php echo base_url('Front/footer'); ?>">

<?php if (validation_errors()): ?>
<h3 style="color:red";><b>whoops! There was an error:</b></h3>
<p style="color:red"><?php  echo validation_errors(); ?> </p>

<?php endif; ?>
<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center"><h3>Booking</h3></h3>
  <p class="text-center"><em></em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Contact</p>
      <p><span class=""></span>Phone: +00 1515151515</p>
      <p><span class=""></span>Email: farjanaparlour@gmail.com</p>
    </div>
  
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" >
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="text" >
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="contact" name="contact" placeholder="Contact" type="text" >
        </div>        
        <div class="col-sm-6 form-group">
          <input class="form-control" id="service" name="service" placeholder="Service Name" type="text" >
        </div> 
        <div class="col-sm-6 form-group">
          <input class="form-control" id="cdate" name="cdate" placeholder="Booking Date" type="text" >
        </div>               
      </div>
      <textarea class="form-control" id="comment" name="comment" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>