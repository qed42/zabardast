<?php
// $Id: block.tpl.php,v 1.3 2007/08/07 08:39:36 goba Exp $
?>
	
	  <div class="block block-<?php print $block->module; ?>" id="block-<?php print $block->module; ?>-<?php print $block->delta; ?>">
	    <DIV class=rtextbox><SPAN class=rtop><SPAN class=r1></SPAN><SPAN class=r2></SPAN><SPAN class=r3></SPAN><SPAN class=r4></SPAN></SPAN><DIV class=rtextboxinside>
	    <h2 class="title"><?php print $block->subject; ?></h2>
	    <div class="content"><?php print $block->content; ?></div>
	    </DIV><SPAN class=rbottom><SPAN class=r4></SPAN><SPAN class=r3></SPAN><SPAN class=r2></SPAN><SPAN class=r1></SPAN></SPAN></DIV>
	 	</div>