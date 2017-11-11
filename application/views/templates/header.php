<html>
	<head>
		<title>Superman-Blog</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/icon.png">
    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script id="dsq-count-scr" src="//andiwawank-com.disqus.com/count.js" async></script>
	</head>
	<body>

		<!-- ============NAVBAR========================= -->

      <div class="container">
          <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav">
								<li><a href="<?php echo base_url(); ?>">Home</a></li>
			          <li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
			           <li><a href="<?php echo base_url(); ?>">Project</a></li>
			           <li><a href="<?php echo base_url(); ?>">About</a></li>
								 <?php if($this->session->userdata('logged_in')) : ?>
									 <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
								 <?php endif; ?>
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav><hr class="hr">
        </div>


    <!-- ============NAVBAR========================= -->

    <div class="container-fluid">
      <!-- Flash messages -->
