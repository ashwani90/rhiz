
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


        <div class="content">
            <div class="container-fluid">
            <?php if(isset($msg)){ ?>
							<span style="text-size:15px;color:#33cc33;"><?php echo $msg; ?></span>
                            <?php } ?>
                <form method="post" action="<?php echo base_url(); ?>Rhizome/save_project" enctype="multipart/form-data">
            <div class="row"  style='margin:20px;'>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Project Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Project Name" name="building_name" required>
                                            </div>

                                        </div>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Select Project Type</label>
                                                <select class="form-control" name="building_type">
                                                <?php foreach($result as $res){ ?>
                                                <option value='<?php echo $res['type_id']; ?>'><?php echo $res['type_desc']; ?></option>
                                                <?php } ?>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <input type="text" name='status' class="form-control" placeholder="Enter Status" required>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="year">Building Year</label>
                                                <input type="text" name="year" class="form-control" placeholder="Enter Building Year" required>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="location">Location</label>
                                                <input type="text" name="location" class="form-control" placeholder="Enter Location" required>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="size">Building Size</label>
                                                <input type="text" name="size" class="form-control" placeholder="Enter Building Size" required>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="size">Building Images</label>
                                                <input type="file" name="building_images[]" class="form-control" multiple="multiple" required>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="size">Building Description</label>
                                                <textarea name="desc" class="form-control" rows="12" ></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-10 text-center">
                                            <div class="form-group">
                                                
                                                <input type="submit" name="submit" class="btn btn-primary">
                                            </div>
                                        </div>
                                        </div>
                                        
                                        
</form>




  
        