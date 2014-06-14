<!doctype html>
<html class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="keywords" content=""/>

  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;
  charset=<?php bloginfo('charset'); ?>" />
  <meta charset="<?php bloginfo('charset'); ?>">

  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/><!-- 50x50 -->
  <meta property="og:url" content=""/><!-- Site Url -->
  <title><?php if (function_exists('is_tag') && is_tag()) { single_tag_title("Tag Archive for &quot;"); echo'&quot; - '; } elseif (is_archive()) { wp_title(''); echo ' Archive - '; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } elseif (is_404()) { echo 'Not Found - '; } if (is_home()) { bloginfo('name'); echo ' - '; bloginfo('description'); } else { bloginfo('name'); } ?><?php if ($paged>1) { echo ' - page '. $paged; } ?></title>

  <!-- FAVICON AREA -->
  <link rel="shortcut icon" href="<?php bloginfo('template_url' );?>/images/favicon.ico" type="image/x-icon"/>
  <link rel="apple-touch-icon" href="http://placehold.it/57x57/">
  <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72x72/">
  <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114x114/">

  <!-- STYLESHEETS -->
  <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Montserrat:400,700'  type='text/css'>
  <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Oswald:400,700,300|Open+Sans+Condensed:300,700,300italic' type='text/css'/>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

  <!-- Remy Sharp Shim & Mediaqueries for IE 8--> 
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
<!--[if lte IE 8]>
<script type="text/javascript">
    window.location = "http://www.browsehappy.com";
</script>
<![endif]--> 

<header>
  <a id="Top"></a>
  <div class="row">
    <div id="logo" class="small-7 columns">
      <a href="<?php echo get_option('home'); ?>" title="Lenny Peters - Web Designer/Front-End Developer"><img src="<?php bloginfo('template_url' );?>/images/apple-touch-icon.png" width="48px" alt=""/></a><span class="name">Lenny Peters</span>
    </div><!-- /END #LOGO -->
    <a href="#menu" class="menu-link">Menu</a>
    <nav id="menu" role="navigation">
      <ul>
        <?php wp_list_pages('title_li='); ?>
      </ul>
    </nav><!--/END #MENU -->
  </div><!-- end ROW --> 
</header>