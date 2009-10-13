
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $body_classes; ?>">

	<a name="top" id="navigation-top"></a>
	
	<div id="header"><div id="header-inner" class="clear-block">
	  <div class="container">
	    <div id="logo-title">
	      <?php if ($primary_links): ?>
	        <div id="primary">
	          <?php print theme('links', $primary_links); ?>
	        </div> <!-- /#primary -->
	      <?php endif; ?>
	      <br />
	      <div class="margintop75">
	  			<div class="span-16">
				    <div class="span-7">
				      <?php if ($logo): ?>
				        <div id="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo-image" /></a></div>
				      <?php else: ?>
				      	<h1 id="site-name">
				      		<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
				         		<?php print $site_name; ?>
				          </a>
				      	</h1>
				      <?php endif; ?>
				    </div>  
				    <div class="span-6 append-3 last">  
				      <?php if ($site_slogan): ?>
				        <div id="site-slogan"><?php print $site_slogan; ?></div>
				      <?php endif; ?>
				    </div> 
			    </div> 
			   	<div class="span-8 last margintop10 floatright">	
			      <?php if ($search_box): ?>
			        <div id="search-box">
			          <?php print $search_box; ?>
			        </div> <!-- /#search-box -->
			      <?php endif; ?>
		      </div>
		    </div>      
	      <?php if ($header): ?>
			    <div id="header-blocks" class="region region-header">
			      <?php print $header; ?>
			    </div> <!-- /#header-blocks -->
			  <?php endif; ?>
	    </div> <!-- /#logo-title -->
	  </div>
	</div></div> <!-- /#header-inner, /#header -->
	
	
	<div id="page" class="container"><div id="page-inner">
	
    <div id="main" class="span-24 last"><div id="main-inner" class="clear-block<?php if ($search_box || $primary_links || $secondary_links || $navbar) { print ' with-navbar'; } ?>">
			
      <div id="content" class="span-15 append-1"><div id="content-inner" class="maincontent">
				
        <?php if ($mission): ?>
          <div id="mission">
          	<DIV class=rtextbox><SPAN class=rtop><SPAN class=r1></SPAN><SPAN class=r2></SPAN><SPAN class=r3></SPAN><SPAN class=r4></SPAN></SPAN><DIV class=rtextboxinside>
          		<?php print $mission; ?>
          	</DIV><SPAN class=rbottom><SPAN class=r4></SPAN><SPAN class=r3></SPAN><SPAN class=r2></SPAN><SPAN class=r1></SPAN></SPAN></DIV>
          </div>		
        <?php endif; ?>

        <?php if ($breadcrumb || $title || $tabs || $help || $messages): ?>
          <div id="content-header">
            <?php if(user_is_logged_in()): ?>	
        			<?php print $breadcrumb; ?>
        			<?php if ($tabs): ?>
	              <div class="tabs"><?php print $tabs; ?></div>
	            <?php endif; ?>
	            <?php print $help; ?>
            <?php endif; ?>
            	
            <h2><?php print $title; ?></h2>
            <?php print $messages; ?>
            
          </div> <!-- /#content-header -->
        <?php endif; ?>
				
				
				
        <div id="content-area">
          <?php print $content; ?>
        </div>

        <?php if ($feed_icons): ?>
          <div class="feed-icons"><?php print $feed_icons; ?></div>
        <?php endif; ?>

        <?php if ($content_bottom): ?>
          <div id="content-bottom" class="region region-content_bottom">
            <?php print $content_bottom; ?>
          </div> <!-- /#content-bottom -->
        <?php endif; ?>

      </div></div> <!-- /#content-inner, /#content -->
			
			<?php if ($right): ?>
        <div id="sidebar-right" class="span-8 last"><div id="sidebar-right-inner" class="region region-right">
          <?php print $right; ?>
        </div></div> <!-- /#sidebar-right-inner, /#sidebar-right -->
      <?php endif; ?>
			
    </div></div> <!-- /#main-inner, /#main -->

    <?php if ($footer || $footer_message): ?>
      <div id="footer" class="span-24 last"><div id="footer-inner" class="region region-footer">

        <?php if ($footer_message): ?>
          <div id="footer-message"><?php print $footer_message; ?></div>
        <?php endif; ?>

        <?php print $footer; ?>

      </div></div> <!-- /#footer-inner, /#footer -->
    <?php endif; ?>

  </div></div> <!-- /#page-inner, /#page -->

  <?php if ($closure_region): ?>
    <div id="closure-blocks" class="region region-closure"><?php print $closure_region; ?></div>
  <?php endif; ?>

  <?php print $closure; ?>

</body>
</html>