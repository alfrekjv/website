<div id="header">
	<div class="header-container">
		<div class="fl header-left">
			<a href="<?= $baseUrl; ?>" title="PPI Framework">
				<img class="abs" src="<?= $baseUrl; ?>images/ppi-logo.png" height="40" alt="PPI Framework">
			</a>
		</div>
		<div class="fl rel header-middle">

			<div class="social">
				<div class="social-item facebooklike-container">
					<iframe src="http://www.facebook.com/plugins/like.php?app_id=272550266089007&amp;href=http%3A%2F%2Fwww.ppiframework.com&amp;send=false&amp;layout=button_count&amp;width=108&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=verdana&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:108px; height:21px;" allowTransparency="true"></iframe>
				</div>
				<div class="social-item gplusone-container"><div class="g-plusone" data-size="medium" data-annotation="inline" data-width="120" href="http://www.ppiframework.com"></div></div>
				<div class="social-item twitterlike-contaner">
					<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.ppiframework.com" data-text="PPI Framework" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
				</div>
			</div>
			<nav class='main-nav'>
				<a href="<?= $baseUrl; ?>downloads" title="Downloads" class="<?= $request['controller'] == 'downloads' ? 'active' : ''; ?>">Downloads</a>
				<a href="http://docs.ppi.io" title="Documentation">Documentation</a>
				<a href="<?= $baseUrl; ?>community" title="Community" class="<?= $request['controller'] == 'community' ? 'active' : ''; ?>">Community</a>
			</nav>
		</div>
		<div class="fl header-right"></div>
	</div>
</div>
<div class="clearfix"></div>
