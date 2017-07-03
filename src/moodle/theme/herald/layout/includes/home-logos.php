<?php

$haslogosectiontitle = (!empty($PAGE->theme->settings->logosectiontitle));

$haslogo1image = (!empty($PAGE->theme->settings->logo1image));
$haslogo2image = (!empty($PAGE->theme->settings->logo2image));
$haslogo3image = (!empty($PAGE->theme->settings->logo3image));
$haslogo4image = (!empty($PAGE->theme->settings->logo4image));
$haslogo5image = (!empty($PAGE->theme->settings->logo5image));
$haslogo6image = (!empty($PAGE->theme->settings->logo6image));
$haslogo7image = (!empty($PAGE->theme->settings->logo7image));
$haslogo8image = (!empty($PAGE->theme->settings->logo8image));

$haslogo1url = (!empty($PAGE->theme->settings->logo1url));
$haslogo2url = (!empty($PAGE->theme->settings->logo2url));
$haslogo3url = (!empty($PAGE->theme->settings->logo3url));
$haslogo4url = (!empty($PAGE->theme->settings->logo4url));
$haslogo5url = (!empty($PAGE->theme->settings->logo5url));
$haslogo6url = (!empty($PAGE->theme->settings->logo6url));
$haslogo7url = (!empty($PAGE->theme->settings->logo7url));
$haslogo8url = (!empty($PAGE->theme->settings->logo8url));

$haslogo1alttext = (!empty($PAGE->theme->settings->logo1alttext));
$haslogo2alttext = (!empty($PAGE->theme->settings->logo2alttext));
$haslogo3alttext = (!empty($PAGE->theme->settings->logo3alttext));
$haslogo4alttext = (!empty($PAGE->theme->settings->logo4alttext));
$haslogo5alttext = (!empty($PAGE->theme->settings->logo5alttext));
$haslogo6alttext = (!empty($PAGE->theme->settings->logo6alttext));
$haslogo7alttext = (!empty($PAGE->theme->settings->logo7alttext));
$haslogo8alttext = (!empty($PAGE->theme->settings->logo8alttext));

$logosectiontitle = $PAGE->theme->settings->logosectiontitle;

$logo1image = $PAGE->theme->setting_file_url('logo1image', 'logo1image');
$logo2image = $PAGE->theme->setting_file_url('logo2image', 'logo2image');
$logo3image = $PAGE->theme->setting_file_url('logo3image', 'logo3image');
$logo4image = $PAGE->theme->setting_file_url('logo4image', 'logo4image');
$logo5image = $PAGE->theme->setting_file_url('logo5image', 'logo5image');
$logo6image = $PAGE->theme->setting_file_url('logo6image', 'logo6image');
$logo7image = $PAGE->theme->setting_file_url('logo7image', 'logo7image');
$logo8image = $PAGE->theme->setting_file_url('logo8image', 'logo8image');

$logo1url = $PAGE->theme->settings->logo1url;
$logo2url = $PAGE->theme->settings->logo2url;
$logo3url = $PAGE->theme->settings->logo3url;
$logo4url = $PAGE->theme->settings->logo4url;
$logo5url = $PAGE->theme->settings->logo5url;
$logo6url = $PAGE->theme->settings->logo6url;
$logo7url = $PAGE->theme->settings->logo7url;
$logo8url = $PAGE->theme->settings->logo8url;

$logo1alttext = $PAGE->theme->settings->logo1alttext;
$logo2alttext = $PAGE->theme->settings->logo2alttext;
$logo3alttext = $PAGE->theme->settings->logo3alttext;
$logo4alttext = $PAGE->theme->settings->logo4alttext;
$logo5alttext = $PAGE->theme->settings->logo5alttext;
$logo6alttext = $PAGE->theme->settings->logo6alttext;
$logo7alttext = $PAGE->theme->settings->logo7alttext;
$logo8alttext = $PAGE->theme->settings->logo8alttext;

?>

<?php if($PAGE->theme->settings->uselogos ==1) { ?> 
<section class="logos section">
    <div class="container text-center">
       <?php //if ($haslogosectiontitle) { ?>
       <h2 class="title"><?php echo $logosectiontitle ?></h2>
       <?php //} ?>
        <ul class="logos-list list-inline row">
            <?php if ($haslogo1image) { ?>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <?php if($haslogo1url) {?><a href="<?php echo $logo1url ?>"><?php } ?>
                <img class="img-responsive" src="<?php echo $logo1image ?>"  alt="<?php echo $logo1alttext?>" />
                <?php if($haslogo1url) {?></a><?php } ?>
            </li>
            <?php } ?>
            <?php if ($haslogo2image) { ?>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <?php if($haslogo2url) {?><a href="<?php echo $logo2url ?>"><?php } ?>
                <img class="img-responsive" src="<?php echo $logo2image ?>"  alt="<?php echo $logo2alttext?>" />
                <?php if($haslogo2url) {?></a><?php } ?>
            </li>
            <?php } ?>
            <?php if ($haslogo3image) { ?>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <?php if($haslogo3url) {?><a href="<?php echo $logo3url ?>"><?php } ?>
                <img class="img-responsive" src="<?php echo $logo3image ?>"  alt="<?php echo $logo3alttext?>" />
                <?php if($haslogo3url) {?></a><?php } ?>
            </li>
            <?php } ?>
            <?php if ($haslogo4image) { ?>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <?php if($haslogo4url) {?><a href="<?php echo $logo4url ?>"><?php } ?>
                <img class="img-responsive" src="<?php echo $logo4image ?>"  alt="<?php echo $logo4alttext?>" />
                <?php if($haslogo4url) {?></a><?php } ?>
            </li>
            <?php } ?>
        </ul>
        <ul class="logos-list list-inline row last">
            <?php if ($haslogo5image) { ?>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <?php if($haslogo5url) {?><a href="<?php echo $logo5url ?>"><?php } ?>
                <img class="img-responsive" src="<?php echo $logo5image ?>"  alt="<?php echo $logo5alttext?>" />
                <?php if($haslogo5url) {?></a><?php } ?>
            </li>
            <?php } ?>
            <?php if ($haslogo6image) { ?>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <?php if($haslogo6url) {?><a href="<?php echo $logo6url ?>"><?php } ?>
                <img class="img-responsive" src="<?php echo $logo6image ?>"  alt="<?php echo $logo6alttext?>" />
                <?php if($haslogo6url) {?></a><?php } ?>
            </li>  
            <?php } ?>    
            <?php if ($haslogo7image) { ?>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <?php if($haslogo7url) {?><a href="<?php echo $logo7url ?>"><?php } ?>
                <img class="img-responsive" src="<?php echo $logo7image ?>"  alt="<?php echo $logo7alttext?>" />
                <?php if($haslogo7url) {?></a><?php } ?>
            </li>  
            <?php } ?> 
            <?php if ($haslogo8image) { ?>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <?php if($haslogo8url) {?><a href="<?php echo $logo8url ?>"><?php } ?>
                <img class="img-responsive" src="<?php echo $logo8image ?>"  alt="<?php echo $logo8alttext?>" />
                <?php if($haslogo8url) {?></a><?php } ?>
            </li>  
            <?php } ?>        
        </ul><!--//logos-->
    </div><!--//container-->
</section><!--//logos-->
<?php }?>