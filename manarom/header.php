<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
	<meta name="author" content="">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>

  <div class="blog-masthead">
    <div class="container">
      <nav class="blog-nav">
        <!--<img src="<?php echo get_bloginfo( 'template_directory' );?>/images/logo.png" style="width:43%; float:left; display:block; vertical-align:bottom;">-->
        <a href="<?php echo get_bloginfo( 'wpurl' );?>" title="<?php echo get_bloginfo( 'name' ); ?>"><img src="<?php echo get_bloginfo( 'template_directory' );?>/images/logo.png" style="width:43%;"></a>
        <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/menu.png" style="width:20%;">
        <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/line.png" style="width:2%; height: 65px;">
        <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/multi-lang.png" style="width:14%;">
        <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/line.png" style="width:2%; height: 65px;">
        <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/search.png" style="width:14%;">

        <!-- <?php wp_list_pages( '&title_li=' ); ?> -->
      </nav>
    </div>
  </div>

	<div class="container">
    <!--
    <div class="blog-header">
	    <h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
	    <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
    </div>
    -->
