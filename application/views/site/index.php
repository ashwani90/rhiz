<header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <?php for($i=1;$i<count($banners);$i++){  ?>
          <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>"></li>
         
          <?php } ?>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          
          <div class="carousel-item active" style="background-image: url('<?php echo base_url(); ?>uploads/slider/<?php echo $banners[0]['image_name']; ?>')">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <?php
          
          for($i=1;$i<count($banners);$i++){  ?>
          <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>uploads/slider/<?php echo $banners[$i]['image_name']; ?>')">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <?php } ?>
          <!-- Slide Three - Set the background image for this slide in the line below -->
         
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <section class="py-5">
      <div class="container text-center">
        <h1>Key Projects</h1>
      </div>
      
    </section>

<div class="container-fluid listings" style="margin-bottom: 50px;">
    <div class="row">
    <?php foreach($projects as $pro){ ?>
        <div class="col-md-3">
        <div class="thumbnail m-2">
            <div class="caption">
                <h4><?php echo $pro['building_name']; ?></h4>
                <p>Projects</p>
            </div>
            <img src="<?php echo base_url(); ?>uploads/<?php echo $pro['building_image']; ?>" alt="...">
        </div>
        </div>
     <?php } ?>

        
    </div>
</div><!-- /.container -->