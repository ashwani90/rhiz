<style>
ul#horizontal-list {
	min-width: 696px;
	list-style: none;
	padding-top: 20px;
	}
	ul#horizontal-list li {
		display: inline;
	}
</style>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div style="overflow: scroll ; width: 100%;">
        <div class="content">
            <div class="container-fluid">
            <?php if(isset($msg)){ ?>
							<span style="text-size:15px;color:#33cc33;"><?php echo $msg; ?></span>
                            <?php } ?>
                            <p><?php echo $building_name; ?> 
                            <a href="<?php echo base_url(); ?>Rhizome/change_image/<?php echo $building_id; ?>" class="btn btn-danger" style="margin-left:35px;"><i class="fas fa-plus"></i></a>
                            </p>
                            
                            <table class="table table-bordered">
                                    <thead>
                                        <th>Image</th>
                                    	<th>Delete</th>
                                    	<th>Change</th>
                                    
                                    </thead>
                                    <tfoot>
                                        <th>Image</th>
                                        <th>Delete</th>
                                        <th>Change</th>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach($result as $res){ 
                                       
                                        ?>
                                       <tr>
                                        <td><img src='<?php echo base_url(); ?>/uploads/<?php echo $res['building_image']; ?>' height="100px" width="100px"></td>
                                       
                                        <td><a href="<?php echo base_url(); ?>Rhizome/delete_image/<?php echo $res['building_image_id']; ?>/<?php echo $building_id; ?>" class="btn btn-danger"><i class="fas fa-minus"></i></a> </td>
                                        <td><a href="<?php echo base_url(); ?>Rhizome/change_image/<?php echo $res['building_image_id']; ?>/<?php echo $building_id; ?>" class="btn btn-danger"><i class="fas fa-exchange-alt"></i></a> </td>
                                        
                                       </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>


</div>
  
     </div>
     </div>   