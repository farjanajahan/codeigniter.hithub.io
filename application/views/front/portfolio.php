<div id="portfolio" class="container-fluid text-center">
  <h1>Our Gallery</h1><br>
  <h4></h4>
  <hr />
  <div class="row text-center">
  <?php foreach ($gallery_image->result() as $row):?>

    <div class="col-sm-4">
      <div class="thumbnail">
       <img src="<?php echo base_url();?>img/<?php print $row->image_name;?>" alt="Dhaka" width="600" height="300">
       
      </div>
    </div>
  <?php endforeach; ?>

  </div>
<hr />