<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FuelPHP Framework</title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
	<?php echo Asset::css('bootstrap-responsive.css'); ?>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">FuelPHP +Bootstrap 2.0</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	<div class="container">
		<div class="hero-unit">
			<h1>Welcome!</h1>
			<p>You have successfully installed the FuelPHP Framework.</p>
			<p><a class="btn primary large" href="http://docs.fuelphp.com">Read the Docs</a></p>
		</div>
		<div class="row">
			<div class="span-one-third">
				<h2>Get Started</h2>
				<p>The controller generating this page is found at <code>APPPATH/classes/controller/welcome.php</code>.</p>
				<p>This view can be found at <code>APPPATH/views/welcome/index.php</code>.</p>
				<p>You can modify these files to get your application started quickly.</p>
			</div>
			<div class="span-one-third">
				<h2>Learn</h2>
				<p>The best way to learn FuelPHP is reading through the <a href="http://docs.fuelphp.com">Documentation</a>.</p>
				<p>Another good resource is the <a href="http://fuelphp.com/forums">Forums</a>.  They are fairly active, and you can usually get a response quickly.</p>
			</div>
			<div class="span-one-third">
				<h2>Contribute</h2>
				<p>FuelPHP wouldn't exist without awesome contributions from the community.  Use the links below to get contributing.</p>
				<ul>
					<li><a href="http://docs.fuelphp.com/general/coding_standards.html">Coding Standards</a></li>
					<li><a href="http://github.com/fuel/fuel">GitHub Respository</a></li>
					<li><a href="http://fuelphp.com/contribute/issue-tracker">Issue Tracker</a></li>
				</ul>
			</div>
		</div>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo e(Fuel::VERSION); ?></small>
			</p>
		</footer>
	</div>
</body>
</html>
