<!-- About Us -->
<div id="about" class="container text-center">
<p>


<p><h1>Welcome to Farzan's Beauty Parlour</h1></p>
<?php foreach ($welcome->result() as $row):?>
<?php print $row->description;  ?>
<?php endforeach; ?>
</p>
<hr />
  <h1 id="service">Our Services</h1>
  	<div class="row">
    <?php foreach ($services_image->result() as $row):?>

            <div class="col-sm-4" style="padding-right:20px;">  
                <div style="width:250px">
                <img src="<?php echo base_url(); ?>img/<?php print $row->image_name;  ?>" alt="Card image" style="width:100%">
                    <div >
                    
                      <!--<h3 >Hair</h3>
                      <p ></p>
                      <a href="#" class="btn btn-primary">See Profile</a>
                      -->
                    </div>
                </div>
            </div>
     <?php endforeach; ?>
       
                    
	</div>              
  <p>
<?php foreach ($services->result() as $row):?>
<?php print $row->description;  ?>
<?php endforeach; ?>  
  </p>
  
  <hr />
  <br>
 </div> 