<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="css/boilerplate.css">
  <?php wp_head();?>    
</head>
  
<body>

  <div id="blog-name">
	<a href="<?php echo get_option('home'); ?>">
	<?php bloginfo('name'); ?></a>
  </div>
  <div id="blog-description">
	<?php bloginfo('description'); ?>
  </div>
  <div id="blog-masthead">
  </div>
