 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark">
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