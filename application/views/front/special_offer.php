<div id="skill" class="container text-center">
    <hr />

	<h1>Special Offer</h1>
    <hr />
    <?php foreach ($special_offer->result() as $row):?>

  	<div class="row">
            <div class="col-sm-12" style="padding-right:20px;">  
                
                
                    <div >
                    <?php print $row->title;  ?>
                    </div>
                    <div>
					<?php print $row->description;  ?>
                    </div>
                
            </div>
      <?php endforeach; ?>
    

  	</div>      
</div>
<hr />            