		<div class="wrap">
	            <footer id="bottom">
	                <small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</small>

	                <ul role="navigation">
	                    <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
	                    <?php if(!twitter_account()): ?>
	                    <li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
	                    <?php endif; ?>
						<?php /*
	                    <li><a href="<?php echo base_url('admin'); ?>" title="Administer your site!">Admin area</a></li> */ ?>

	                    <li><a href="mailto:maq@maqmaq.pl" title="mail">Contact</a></li>
	                </ul>
	            </footer>

	        </div>
        </div>
    </body>
</html>