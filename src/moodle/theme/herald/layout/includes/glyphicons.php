<?php 
$fontsdir = $CFG->wwwroot.'/theme/'. $PAGE->theme->name.'/fonts/'; 
?>
<style type="text/css">
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('<?php echo $fontsdir ?>glyphicons-halflings-regular.eot');
  src: url('<?php echo $fontsdir ?>glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('<?php echo $fontsdir ?>glyphicons-halflings-regular.woff') format('woff'), url('<?php echo $fontsdir ?>glyphicons-halflings-regular.ttf') format('truetype'), url('<?php echo $fontsdir ?>glyphicons-halflings-regular.svg#glyphicons-halflingsregular') format('svg');
}

/* Flexslider icons */
/*
@font-face {
	font-family: 'flexslider-icon';
	src:url('<?php echo $fontsdir ?>flexslider-icon.eot');
	src:url('<?php echo $fontsdir ?>flexslider-icon.eot?#iefix') format('embedded-opentype'),
		url('<?php echo $fontsdir ?>flexslider-icon.woff') format('woff'),
		url('<?php echo $fontsdir ?>flexslider-icon.ttf') format('truetype'),
		url('<?php echo $fontsdir ?>flexslider-icon.svg#flexslider-icon') format('svg');
	font-weight: normal;
	font-style: normal;
}
*/
</style>