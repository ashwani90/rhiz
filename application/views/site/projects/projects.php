<div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-md-12 text-right">

                <i class="fa fa-th-large" id="gridview11" style="font-size:24px;margin-right: 5px;color: #f00;"></i>
                <i class="fa fa-list" id="gridview22" style="font-size:24px;margin-right: 5px;"></i>
                <select style="border-radius:5px;border: 1px solid #ccc;margin-top: -5px;">
                    <option>ORDER</option>
                    <option>Alphabetical</option>
                    <option>Chronological</option>
                    <option>Typological</option>
                </select>
            </div>
        </div>
      </div>
      <div class="container" id="gridview1">
        <div class="row">
          <div align="center" style="margin-top: 15px;">
              <?php foreach($building_types as $but_ty){ ?>
              <button class="btn btn-default filter-button" data-filter="hdpe" id="tab<?php echo $but_ty['type_id'].$but_ty['type_id']; ?>"><?php echo $but_ty['type_desc']; ?></button>
              <?php } ?>
              <button class="btn btn-default filter-button" data-filter="all" id="tab_all">All</button>
              
          </div>
          <br/>
          <div id="tab"><div class="col-md-12">
            <div class="row">
            <?php foreach($buildings as $build){ ?>
              <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter hdpe">
                  <div class="thumbnail">
                    <div class="caption">
                       <h4 class=""><?php echo $build['building_name']; ?></h4>
                       <p class="">
                          <a href="#" class="label label-default">Project</a>
                       </p>
                    </div>
                    <img src="<?php echo base_url(); ?>uploads/<?php echo $build['building_image']; ?>" alt="..." class="">
                  </div>
              </div>
            <?php } ?>

            </div></div>
          </div>
          <?php foreach($building_types as $but_ty){ ?>
          <div id="tab<?php echo $but_ty['type_id']; ?>" style="display: none;"><div class="col-md-12">
            <div class="row">
            <?php foreach($buildings as $build){
                if($build['type_id']==$but_ty['type_id']){
                ?>
              <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter spray">
                  <div class="thumbnail">
                    <div class="caption">
                       <h4 class=""><?php echo $build['building_name']; ?></h4>
                       <p class="">
                          <a href="#" class="label label-default">Project</a>
                       </p>
                    </div>
                    <img src="<?php echo base_url(); ?>uploads/<?php echo $build['building_image']; ?>" alt="..." class="">
                  </div>
              </div>
            <?php }} ?>
            </div></div>
          </div>
                <?php } ?>
          

        </div>
      </div>

      <div class="container" id="gridview2" style="display: none;">
        <div class="row">

          <div align="center">
              
              <?php foreach($building_types as $but_ty){ ?>
              <button class="btn btn-default filter-button" data-filter="hdpe" id="tabs<?php echo $but_ty['type_id'].$but_ty['type_id']; ?>"><?php echo $but_ty['type_desc']; ?></button>
              <?php } ?>
              <button class="btn btn-default filter-button" data-filter="all" id="tabs_all">All</button>
              </div>
          <br/>
        </div>
        <div class="row">
          <section id="tabs" style="width:100%;">
          <?php foreach($buildings as $build){ ?>
            <div class="col-md-12">
              <div class="row">

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <p><?php echo $build['building_name']; ?></p>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                    <p><?php echo $build['building_status']; ?></p>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <p><?php echo $build['building_size']; ?></p>
                </div>
              </div>
              </div>
          <?php } ?>
             
            </div>
          </section>

          <?php foreach($building_types as $but_ty){ ?>
          <section id="tabs<?php echo $but_ty['type_id']; ?>" style="display: none;width: 100%;">
            <div class="col-md-12">
              <div class="row">
              <?php foreach($buildings as $build){
                  if($build['type_id']==$but_ty['type_id']){ ?>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <p><?php echo $build['building_name']; ?></p>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                    <p><?php echo $build['building_status']; ?></p>
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <p><?php echo $build['building_size']; ?></p>
                </div>

              
              <?php }}?>
              </div>
              </div>
          </section>
              <?php } ?>

        </div>
      </div>


      <script src="<?php echo base_url(); ?>assets2/vendor/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function() {
         $("[rel='tooltip']").tooltip();    
         
         $('.thumbnail').hover(
          function(){
              $(this).find('.caption').slideDown(250); //.fadeIn(250)
          },
          function(){
              $(this).find('.caption').slideUp(250); //.fadeOut(205)
          }
         ); 
         });
      </script>
      <script type="text/javascript">
        $(document).ready(function(){
            $("#gridview11").click(function(){
                $("#gridview22").css("color","#000");
            $("#gridview11").css("color","#f00");
                $("#gridview1").fadeIn(1000).css("display","block");
                 $("#gridview2").css("display","none");
            $("#tab_all").click(function(){
               // alert('All selection was clicked');
                $("#tab").fadeIn(1000).css("display","block");
                <?php foreach($building_types as $but_ty){ ?>
                $("#tab<?php echo $but_ty['type_id']; ?>").css("display","none");
            <?php } ?>
                });
                <?php foreach($building_types as $but_ty1){ ?>
            $("#tab<?php echo $but_ty1['type_id'].$but_ty1['type_id']; ?>").click(function(){
                
                $("#tab").css("display","none");
                <?php foreach($building_types as $but_ty){ ?>
                <?php if($but_ty['type_id']==$but_ty1['type_id']){ ?>
                $("#tab<?php echo $but_ty['type_id']; ?>").fadeIn(1000).css("display","block");
            <?php } else { ?>
                $("#tab<?php echo $but_ty['type_id']; ?>").css("display","none");
            <?php }} ?>
                
            });
        <?php } ?>
            });
        $("#gridview22").click(function(){
            
            $("#gridview22").css("color","#f00");
            $("#gridview11").css("color","#000");
            $("#gridview2").fadeIn(1000).css("display","block");
            $("#gridview1").css("display","none");
        $("#tabs_all").click(function(){
               // alert('All selection was clicked');
                $("#tabs").fadeIn(1000).css("display","block");
                <?php foreach($building_types as $but_ty){ ?>
                $("#tabs<?php echo $but_ty['type_id']; ?>").css("display","none");
            <?php } ?>
                });
                <?php foreach($building_types as $but_ty1){ ?>
            $("#tabs<?php echo $but_ty1['type_id'].$but_ty1['type_id']; ?>").click(function(){
                
                $("#tabs").css("display","none");
                <?php foreach($building_types as $but_ty){ ?>
                <?php if($but_ty['type_id']==$but_ty1['type_id']){ ?>
                $("#tabs<?php echo $but_ty['type_id']; ?>").fadeIn(1000).css("display","block");
            <?php } else { ?>
                $("#tabs<?php echo $but_ty['type_id']; ?>").css("display","none");
            <?php }} ?>
                
            });
        <?php } ?>
        });
            $("#gridview11").click();
    });
      </script>
      