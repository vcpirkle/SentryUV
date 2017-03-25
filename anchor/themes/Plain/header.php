	<?php if(PLAIN_NO_HEADER == false AND PLAIN_NO_HEADER_TITLE == false): ?>
	<header id="header"<?php if(PLAIN_HEADER_IMAGE !== ""): echo ' style="background:url('.PLAIN_HEADER_IMAGE.') repeat-x !important;"'; endif; ?>>
		<div id="wrap"<?php if(PLAIN_NO_SIDEBAR == true): echo ' class="no-sidebar"'; endif; ?>>

			<h1><a href="<?php echo base_url(); ?>" title="<?php echo site_name(); ?>"><?php echo site_name(); ?></a></h1>

		</div>
	</header>

	<div class="clear">
	</div>
	
	<?php elseif(PLAIN_NO_HEADER == true AND PLAIN_NO_HEADER_TITLE == false): ?>
	<header id="header" class="no-header">
		<div id="wrap"<?php if(PLAIN_NO_SIDEBAR == true): echo ' class="no-sidebar"'; endif; ?>>

			<h1><a href="<?php echo base_url(); ?>" title="<?php echo site_name(); ?>"><?php echo site_name(); ?></a></h1>

		</div>
	</header>

	<div class="clear">
	</div>

	<?php elseif(PLAIN_NO_HEADER == false AND PLAIN_NO_HEADER_TITLE == true): ?>
	<header id="header"<?php if(PLAIN_HEADER_IMAGE !== ""): echo ' style="background:url('.PLAIN_HEADER_IMAGE.') repeat-x;"'; endif; ?>>
	</header>

	<div class="clear">
	</div>

	<?php endif; ?>
	<div id="wrap"<?php if(PLAIN_NO_SIDEBAR == true): echo ' class="no-sidebar"'; endif; ?>>

		<noscript>
		<p class="notice">
			It seems that you have traveled back in time to a very primitive internet where JavaScript did not exist! 
			However, this site does not function properly without it. You've been warned.
		</p>
		</noscript>