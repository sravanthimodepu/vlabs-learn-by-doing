<?php
/* Social Media Settings */
$hassocialsectiontitle = (!empty($PAGE->theme->settings->socialsectiontitle));
$hastwitter     = (!empty($PAGE->theme->settings->twitter));
$hasfacebook    = (!empty($PAGE->theme->settings->facebook));
$hasgoogleplus  = (!empty($PAGE->theme->settings->googleplus));
$haslinkedin    = (!empty($PAGE->theme->settings->linkedin));
$hasyoutube     = (!empty($PAGE->theme->settings->youtube));
$hasflickr      = (!empty($PAGE->theme->settings->flickr));
$haspinterest   = (!empty($PAGE->theme->settings->pinterest));
$hasinstagram   = (!empty($PAGE->theme->settings->instagram));
$hasskype       = (!empty($PAGE->theme->settings->skype));
$hasrss         = (!empty($PAGE->theme->settings->rss));

$socialsectiontitle = $PAGE->theme->settings->socialsectiontitle;
$twitter = $PAGE->theme->settings->twitter;
$facebook = $PAGE->theme->settings->facebook;
$googleplus = $PAGE->theme->settings->googleplus;
$linkedin = $PAGE->theme->settings->linkedin;
$youtube = $PAGE->theme->settings->youtube;
$flickr = $PAGE->theme->settings->flickr;
$pinterest = $PAGE->theme->settings->pinterest;
$instagram = $PAGE->theme->settings->instagram;
$skype = $PAGE->theme->settings->skype;
$rss = $PAGE->theme->settings->rss;

?>
 
    <?php if ($PAGE->theme->settings->enablesocial ==1 ) { ?>
    <!-- ******Social Media Section****** -->
    <section class="section social-section has-texture">
        <div class="container text-center">
            <?php if ($hassocialsectiontitle) { ?>
            <h2 class="title"><?php echo $socialsectiontitle ?></h2>
            <?php } ?>
            <ul class="social list-inline">
                <?php if ($hastwitter) { ?>
                <li><a href="<?php echo $twitter ?>"><i class="fa fa-twitter"></i></a></li>
                <?php } ?>
                <?php if ($hasfacebook) { ?>
                <li><a href="<?php echo $facebook ?>"><i class="fa fa-facebook"></i></a></li>
                <?php } ?>
                <?php if ($hasgoogleplus) { ?>
                <li><a href="<?php echo $googleplus ?>"><i class="fa fa-google-plus"></i></a></li> 
                <?php } ?>
                <?php if ($haslinkedin) { ?>
                <li><a href="<?php echo $linkedin ?>"><i class="fa fa-linkedin"></i></a></li>
                <?php } ?>
                <?php if ($hasskype) { ?>
                <li><a href="<?php echo 'skype:'.$skype.'?call' ?>"><i class="fa fa-skype"></i></a></li>
                <?php } ?>
                <?php if ($hasyoutube) { ?>
                <li><a href="<?php echo $youtube ?>"><i class="fa fa-youtube"></i></a></li>
                <?php } ?>
                <?php if ($hasflickr) { ?>
                <li><a href="<?php echo $flickr ?>"><i class="fa fa-flickr"></i></a></li>
                <?php } ?>
                <?php if ($hasinstagram) { ?>
                <li><a href="<?php echo $instagram ?>"><i class="fa fa-instagram"></i></a></li>
                <?php } ?>
                <?php if ($haspinterest) { ?>
                <li><a href="<?php echo $pinterest ?>"><i class="fa fa-pinterest"></i></a></li>
                <?php } ?>
                
                <?php if ($hasrss) { ?>   
                <li class="row-end"><a href="<?php echo $rss ?>"><i class="fa fa-rss"></i></a></li>   
                <?php } ?> 
            </ul><!--//social-->                     
        </div><!--//container-->
    </section><!--//social-section-->
    <?php } ?>
	

