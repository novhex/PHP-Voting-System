    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-thumbs-up"></i> Voting System </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-dashboard"></i> View <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url('admin/political-parties'); ?>"><i class="fa fa-users"></i> Political Parties</a></li>
                  <li><a href="<?php echo base_url('admin/presidential-candidates'); ?>"><i class="fa fa-user"></i> Presidential Candidates</a></li>
                  <li><a href="<?php echo base_url('admin/vp-presidential-candidates');?>"><i class="fa fa-user"></i> Vice Presidential Candidates</a></li>
                  <li><a href="<?php echo base_url('admin/senatorial-candidates');?>"><i class="fa fa-users"></i> Senatorial Candidates</a></li>
                </ul>
              </li>
            <li><a  href="<?php echo base_url('admin/logout');?>"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>