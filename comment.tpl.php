<?php
// $Id: comment.tpl.php,v 1.7 2008/01/04 19:24:23 goba Exp $
?>
  <div class="comment<?php print ' '. $status; ?>" id="comments">
  <DIV class=rtextboxl><SPAN class=rtopl><SPAN class=r1l></SPAN><SPAN class=r2l></SPAN><SPAN class=r3l></SPAN><SPAN class=r4l></SPAN></SPAN><DIV class=rtextboxinsidel>
	    <?php if ($picture) {
	    print $picture;
	  } ?>
		<h3 class="title comment"><?php print $title; ?></h3><?php if ($new != '') { ?><span class="new"><?php print $new; ?></span><?php } ?>
    <div class="submitted"><?php print $submitted; ?></div>
    <div class="content post-content">
     <?php print $content; ?>
     <?php if ($signature): ?>
      <div class="clear-block">
       <div>—</div>
       <?php print $signature ?>
      </div>
     <?php endif; ?>
    </div>
    <div class="links blog-links"><?php print $links; ?></div>
    
    </DIV><SPAN class=rbottoml><SPAN class=r4l></SPAN><SPAN class=r3l></SPAN><SPAN class=r2l></SPAN><SPAN class=r1l></SPAN></SPAN></DIV>
  </div>
