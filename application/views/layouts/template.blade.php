<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en-US"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->

<head>
  
  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="Sauraabh Mehta, Jayant Sethi">
  <meta name="description" content="Builing a better India! Educating India">
  
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0;">

  <!-- Humans.txt -->
  <link type="text/plain" rel="author" href="/humans.txt" />
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="/img/favicaon.ico" />
  
    
  <!-- Title -->
  <title>@yield('title')</title>
  
@section('style_and_js')
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" type="text/css" media="all" href="http://blog.thinkcerca.com/wp-content/themes/thinkcerca/css/foundation.min.css" />
    
  <!-- Included CSS Files (Uncompressed) -->
  <link rel="stylesheet" type="text/css" media="all" href="http://blog.thinkcerca.com/wp-content/themes/thinkcerca/style.css?1363961090" />
  
  
  <!-- Required header hook -->
  <meta name='robots' content='noindex,nofollow' />
<link rel='stylesheet' id='contact-form-7-css'  href='http://blog.thinkcerca.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=3.4' type='text/css' media='all' />
<script type='text/javascript' src='http://blog.thinkcerca.com/wp-includes/js/comment-reply.min.js?ver=3.5.1'></script>
<script type='text/javascript' src='http://blog.thinkcerca.com/wp-includes/js/jquery/jquery.js?ver=1.8.3'></script>
<script type='text/javascript' src='http://blog.thinkcerca.com/wp-content/themes/thinkcerca/js/foundation/modernizr.foundation.js?ver=1'></script>
<script type='text/javascript' src='http://blog.thinkcerca.com/wp-content/themes/thinkcerca/js/html5.js?ver=1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://blog.thinkcerca.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://blog.thinkcerca.com/wp-includes/wlwmanifest.xml" /> 
<link rel='canonical' href='http://blog.thinkcerca.com/' />

		<style media="print" type="text/css">
			div.faq_answer {display: block!important;}
			p.faq_nav {display: none;}
		</style>
@yield_section
	  
</head>

@yield('body_tag')

  <header>
    <!-- Fixed topbar -->     
    <nav class="top-bar fixed">
      <div class="row">
      	<div class="four columns">
      	</div>
        <div class="four columns">
              <ul>
                <li><a class="brand" href="<?php echo URL::to_action('main@home') ?>"><img src="/img/logo.png" /></a></li>
                <li class="toggle-topbar"><a href="#"></a></li>
              </ul>                                      
        </div>
        <div class="four columns">
        	<section class="nav">
                <ul class="right">
                  <div class="menu-main-menu-container">
                  	<ul id="menu-main-menu" class="menu">                  		
						<li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-88 current_page_item menu-item-98"><a href="<?php echo URL::to_action('main@about') ?>">About Us</a></li>
					</ul>
				  </div> 
                </ul>
              </section>
      	</div>
      </div>
    </nav>
    <!-- End topbar -->
  </header>

@section('content')
@yield_section

@section('footer')
<footer>
    <div class="row">
      <div class="four columns"></div>
      
      <div class="four columns">
        <img src="/img/footer_logo.png" />
        <p>&copy; 2013. EducateINDIA. All Rights Reserved.</p>
      </div>
      <div class="four columns"></div>
    </div>
</footer>
@yield_section

@section('scripts')
<!-- Included JS Files (Compressed) -->
  <script src="http://blog.thinkcerca.com/wp-content/themes/thinkcerca/js/foundation/foundation.min.js" type="text/javascript"></script>
    
  <!-- Initialize JS Plugins -->
  <script src="http://blog.thinkcerca.com/wp-content/themes/thinkcerca/js/foundation/app.js" type="text/javascript"></script>
  
  <!-- Feedback form -->
<script id="_webengage_script_tag" type="text/javascript">
  window.webengageWidgetInit = window.webengageWidgetInit || function(){
    webengage.init({
      licenseCode:"~c2ab379a"
    }).onReady(function(){
      webengage.render();
    });
  };

  (function(d){
    var _we = d.createElement('script');
    _we.type = 'text/javascript';
    _we.async = true;
    _we.src = (d.location.protocol == 'https:' ? "//ssl.widgets.webengage.com" : "//cdn.widgets.webengage.com") + "/js/widget/webengage-min-v-3.0.js";
    var _sNode = d.getElementById('_webengage_script_tag');
    _sNode.parentNode.insertBefore(_we, _sNode);
  })(document);
</script>
@yield_section
</body>
</html>