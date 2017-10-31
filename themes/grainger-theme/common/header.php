<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <?php if ( $description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1">
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

    <!-- Stylesheets -->

    <link href="<?php echo html_escape(WEB_ROOT)?>/themes/grainger-theme/css/main.css" rel="stylesheet" type="text/css"/>
     <?php
    queue_css_url('//fonts.googleapis.com/css?family=Source+Sans+Pro');
queue_css_url('//fonts.googleapis.com/css?family=PT+Sans');    
queue_css_file(array('iconfonts','style'));
    echo head_css();
    ?>
   
  <!-- JavaScripts -->
 

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <a href="#content" id="skipnav"><?php echo __('Skip to main content'); ?></a>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
    <div id="wrap">

        <header role="banner">
  
   <div class="container-fluid topper">
       <a href="http://unimelb.edu.au"> <img class="logo-uom" src="<?php echo html_escape(WEB_ROOT)?>/themes/grainger-theme/images/uomlogo.png"></a>
           <div class="sitename"><?php echo link_to_home_page(theme_logo()); ?></div>
<div id="search-container" role="search">
                <?php if (get_theme_option('use_advanced_search') === null || get_theme_option('use_advanced_search')): ?>
                <?php echo search_form(array('show_advanced' => true)); ?>
                <?php else: ?>
                <?Php echo search_form(); ?>
                <?php endif; ?>
            </div>
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?></div>
            <div class="navcontainer">
<nav class="navbar navbar-inverse header" id="top-nav" role="navigation" data-spy="affix" data-offset-top="140">
<div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
       
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <?php echo public_nav_main(); ?>
      
    </div>
  </div>
</nav>      </div>
       
      

        </header>
        
        <article id="content" role="main" tabindex="-1">
        
            <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
