<?php
// $Id: node.tpl.php,v 1.7 2007/08/07 08:39:36 goba Exp $
?>
  <div class="node-content node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
<div class="rtextboxl"><span class="rtopl"><span class="r1l"></span><span class="r2l"></span><span class="r3l"></span><span class="r4l"></span></span><div class="rtextboxinsidel">    
<?php if ($picture) {
      print $picture;
    }?>
    <?php if ($page == 0) { ?><h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2><?php }; ?>
    <span class="submitted"><?php print $submitted?></span>
    <div class="taxonomy"><?php print $terms?></div>
    <div class="content post-content"><?php print $content?></div>
    <?php if ($links) { ?><div class="links blog-links"><?php print $links?></div><?php }; ?>
</div><span class="rbottoml"><span class="r4l"></span><span class="r3l"></span><span class="r2l"></span><span class="r1l"></span></span></div>
</div>
