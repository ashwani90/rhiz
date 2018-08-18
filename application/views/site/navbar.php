<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark" id="bottom">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" <?php if($pro=="home"){ echo "active"; } ?> >
                    <a class="nav-link" href="<?php echo base_url(); ?>Site/">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item" <?php if($pro=="projects"){ echo "active"; } ?>>
                    <a class="nav-link" href="<?php echo base_url(); ?>Site/get_projects">Projects</a>
                </li>
                <li class="nav-item" <?php if($pro=="research"){ echo "active"; } ?>>
                    <a class="nav-link" href="<?php echo base_url(); ?>Site/get_research_page">Research</a>
                </li>
                <li class="nav-item" <?php if($pro=="about"){ echo "active"; } ?>>
                    <a class="nav-link" href="<?php echo base_url(); ?>Site/get_about_page">About Rhizome</a>
                </li>
                <li class="nav-item" <?php if($pro=="contact"){ echo "active"; } ?>>
                    <a class="nav-link" href="<?php echo base_url(); ?>Site/get_contact_page">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container" id="bottomMenu" style="width:100%; display: none; position: fixed; top: 0; left: 0; z-index: 111; background: white; opacity: 0.7;">
        <div class="col-md-5 text-center">
            <img src="<?php echo base_url(); ?>assets2/img/logo.png" style="width: 50%;margin:2%">
        </div>
             <div class="row ml-auto">


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive1" aria-controls="navbarResponsive1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" <?php if($pro=="home"){ echo "active"; } ?> >
                    <a class="nav-link" href="<?php echo base_url(); ?>Site/">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item" <?php if($pro=="projects"){ echo "active"; } ?>>
                    <a class="nav-link" href="<?php echo base_url(); ?>Site/get_projects">Projects</a>
                </li>
                <li class="nav-item" <?php if($pro=="research"){ echo "active"; } ?>>
                    <a class="nav-link" href="<?php echo base_url(); ?>Site/get_research_page">Research</a>
                </li>
                <li class="nav-item" <?php if($pro=="about"){ echo "active"; } ?>>
                    <a class="nav-link" href="<?php echo base_url(); ?>Site/get_about_page">About Rhizome</a>
                </li>
                <li class="nav-item" <?php if($pro=="contact"){ echo "active"; } ?>>
                    <a class="nav-link" href="<?php echo base_url(); ?>Site/get_contact_page">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

