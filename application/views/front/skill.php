<div id="skill" class="container text-center">
    <hr />

	<h1>The Salon</h1>
    <hr />
    <?php foreach ($salon_image->result() as $row):?>

  	<div class="row">
            <div class="col-sm-3" style="padding-right:20px;">  
                <div style="width:250px">
                <img src="<?php echo base_url(); ?>img/<?php print $row->image_name;  ?>" alt="Card image" style="width:100%">
                    <div >
                    <!--
                      <h3 >HTML</h3>
                      <p ></p>
                      <a href="#" class="btn btn-primary">See Profile</a>
                      -->
                    </div>
                </div>
            </div>
      <?php endforeach; ?>
    

  	</div>      
</div>
<hr />            