<div class="clearfix"></div>
<div class="container">
	<footer class="footer">
	    <p>&copy; 2015 Company, Inc.</p>
	</footer>
</div>
</body>
	<script src="<?php echo base_url('assets/jquery/dist/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('bower_components/bootstrap-submenu/dist/js/bootstrap-submenu.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/sliderPlugin/js/modernizr.js'); ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/dist/js/jquery.bootstrap.newsbox.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/sliderPlugin/js/jquery.flexslider-min.js'); ?>"></script>
	<!-- Syntax Highlighter -->
	<script src="<?php echo base_url('assets/sliderPlugin/js/shCore.js'); ?>"></script>
	<script src="<?php echo base_url('assets/sliderPlugin/js/shBrushXml.js'); ?>"></script>
	<script src="<?php echo base_url('assets/sliderPlugin/js/shBrushJScript.js'); ?>"></script>

	<script type="text/javascript">
		$('[data-submenu]').submenupicker();

	$(function(){
	    SyntaxHighlighter.all();

	    $(".demo").bootstrapNews({
			newsPerPage: 6,
			navigation: true,
			autoplay: true,
			direction:'up', // up or down
			animationSpeed: 'normal',
			newsTickerInterval: 5000, //4 secs
			pauseOnHover: true,
			onStop: null,
			onPause: null,
			onReset: null,
			onPrev: null,
			onNext: null,
			onToDo: null
		});
	});

	$(window).load(function(){
	    $('.flexslider').flexslider({
	        animation: "slide"
	    });

	    $('.flexsliderc').flexslider({
	        animation: "slide",
	        animationLoop: false,
	        itemWidth: 210,
	        itemMargin: 5,
	        minItems: 2,
	        maxItems: 4,
	    });
	});
	</script>
</html>