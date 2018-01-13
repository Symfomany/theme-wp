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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google Web Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Lato:300,400,700,900" rel="stylesheet">
  <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
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
                                <li class="active"><a href="#home" data-scroll>Home</a></li>
                                <li><a href="#services" data-scroll>Services</a></li>
                                <li><a href="#features" data-scroll>Fonctionnalites</a></li>
                                <li><a href="#contact" data-scroll>Contact</a></li>
                            </ul>
                        </div><!-- .navbar-collapse -->
					</div>
				</div>
			</div>
		</nav>
    </header><!-- Ends: header -->
    