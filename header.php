<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri() . '/assets/images/favicon.ico' ?>" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
  <?php wp_head(); ?>


</head>

<body>

<!-- Preloader -->
<div class="preloader">
    	<div id="loader">
			<div id="box"></div>
			<div id="hill"></div>
		</div>
	</div>
	
	    <!-- Header -->
		<header id="home">
        <nav class="navbar navbar-default" id="main-nav">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
					    
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-morki">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Taiwa</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-morki">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#home" data-scroll><?php _e('Home'); ?></a></li>
                                <li><a href="#services" data-scroll><?php _e('Services'); ?></a></li>
                                <li><a href="#features" data-scroll><?php _e('[:fr]Fonctionnalités[:en]Features'); ?></a></li>
                                <li><a href="#contact" data-scroll><?php _e('Contact'); ?></a></li>
                            </ul>
                        </div><!-- .navbar-collapse -->
					</div>

                    <?php the_widget('qTranslateXWidget', ["hide-title" => true, "hide-title-colon" => true, 'type' => 'both']); ?> 



				</div>
			</div>
		</nav>
    </header><!-- Ends: header -->
    