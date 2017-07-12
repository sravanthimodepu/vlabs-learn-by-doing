<?php

$hasslide1 = (!empty($PAGE->theme->settings->slide1));
$hasslide1image = (!empty($PAGE->theme->settings->slide1image));
$hasslide1subtitle = (!empty($PAGE->theme->settings->slide1subtitle));
$hasslide1caption = (!empty($PAGE->theme->settings->slide1caption));
$hasslide1cta = (!empty($PAGE->theme->settings->slide1cta));
$hasslide1url = (!empty($PAGE->theme->settings->slide1url));
$hasslide2 = (!empty($PAGE->theme->settings->slide2));
$hasslide2image = (!empty($PAGE->theme->settings->slide2image));
$hasslide2subtitle = (!empty($PAGE->theme->settings->slide2subtitle));
$hasslide2caption = (!empty($PAGE->theme->settings->slide2caption));
$hasslide2cta = (!empty($PAGE->theme->settings->slide2cta));
$hasslide2url = (!empty($PAGE->theme->settings->slide2url));
$hasslide3 = (!empty($PAGE->theme->settings->slide3));
$hasslide3image = (!empty($PAGE->theme->settings->slide3image));
$hasslide3subtitle = (!empty($PAGE->theme->settings->slide3subtitle));
$hasslide3caption = (!empty($PAGE->theme->settings->slide3caption));
$hasslide3cta = (!empty($PAGE->theme->settings->slide3cta));
$hasslide3url = (!empty($PAGE->theme->settings->slide3url));
$hasslide4 = (!empty($PAGE->theme->settings->slide4));
$hasslide4image = (!empty($PAGE->theme->settings->slide4image));
$hasslide4subtitle = (!empty($PAGE->theme->settings->slide4subtitle));
$hasslide4caption = (!empty($PAGE->theme->settings->slide4caption));
$hasslide4cta = (!empty($PAGE->theme->settings->slide4cta));
$hasslide4url = (!empty($PAGE->theme->settings->slide4url));
//$hasslideshow = ($hasslide1image||$hasslide2image||$hasslide3image||$hasslide4image);


/* Slide1 settings */

$slide1 = $PAGE->theme->settings->slide1;
$slide1image = $PAGE->theme->settings->slide1image;
$slide1subtitle = $PAGE->theme->settings->slide1subtitle;
$slide1caption = $PAGE->theme->settings->slide1caption;
$slide1cta = $PAGE->theme->settings->slide1cta;
$slide1url = $PAGE->theme->settings->slide1url;


/* slide2 settings */
$slide2 = $PAGE->theme->settings->slide2;
$slide2image = $PAGE->theme->settings->slide2image;
$slide2subtitle = $PAGE->theme->settings->slide2subtitle;
$slide2caption = $PAGE->theme->settings->slide2caption;
$slide2cta = $PAGE->theme->settings->slide2cta;
$slide2url = $PAGE->theme->settings->slide2url;


/* slide3 settings */
$slide3 = $PAGE->theme->settings->slide3;
$slide3image = $PAGE->theme->settings->slide3image;
$slide3subtitle = $PAGE->theme->settings->slide3subtitle;
$slide3caption = $PAGE->theme->settings->slide3caption;
$slide3cta = $PAGE->theme->settings->slide3cta;
$slide3url = $PAGE->theme->settings->slide3url;


/* slide4 settings */
$slide4 = $PAGE->theme->settings->slide4;
$slide4image = $PAGE->theme->settings->slide4image;
$slide4subtitle = $PAGE->theme->settings->slide4subtitle;
$slide4caption = $PAGE->theme->settings->slide4caption;
$slide4cta = $PAGE->theme->settings->slide4cta;
$slide4url = $PAGE->theme->settings->slide4url;

?>

<?php if ($PAGE->theme->settings->useslideshow == 1) { ?>      
    <section class="promo section">
        <div class="bg-slider-wrapper">
            <div class="flexslider flexslider-promo">
                <ul class="slides">
                    <?php if ($hasslide1image) { ?>
                    <li class="slide slide-1">
                        <div class="flex-caption">
                            <div class="title-wrapper container">
                                <?php if ($hasslide1) { ?>
                                <h2 class="title"><?php echo $slide1 ?></h2>  
                                <?php } ?>
                            </div>
                            <div class="caption-box">
                                <div class="caption-box-inner container">
                                    <div class="row">
                                        <div class="content col-md-8 col-sm-6 col-xs-12">
                                            <h3 class="subtitle"><?php echo $slide1subtitle ?></h3>
                                            <p><?php echo $slide1caption ?></p>
                                        </div>    
                                        <div class="col-md-3 col-sm-5 col-xs-12 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">                              
                                            <a href="<?php echo $slide1url ?>" class="btn btn-cta btn-cta-primary"><?php echo $slide1cta ?></a>
                                        </div>
                                    </div><!--//row-->
                                </div><!--//caption-box-inner-->
                            </div><!--//caption-box-->
                        </div><!--//flex-caption-->
                    </li>
                    <?php } ?> 
                    <?php if ($hasslide2image) { ?>
                    <li class="slide slide-2">
                        <div class="flex-caption">
                            <div class="title-wrapper container">
                                <?php if ($hasslide2) { ?>
                                <h2 class="title"><?php echo $slide2 ?></h2>  
                                <?php } ?>  
                            </div>
                            <div class="caption-box">
                                <div class="caption-box-inner container">
                                    <div class="row">
                                        <div class="content col-md-8 col-sm-6 col-xs-12">
                                            <h3 class="subtitle"><?php echo $slide2subtitle ?></h3>
                                            <p><?php echo $slide2caption ?></p>
                                        </div>    
                                        <div class="col-md-3 col-sm-5 col-xs-12 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">                              
                                            <a href="<?php echo $slide2url ?>" class="btn btn-cta btn-cta-primary"><?php echo $slide2cta ?></a>
                                        </div>
                                    </div><!--//row-->
                                </div><!--//caption-box-inner-->
                            </div><!--//caption-box-->
                        </div><!--//flex-caption-->
                    </li>
                    <?php } ?> 
                    <?php if ($hasslide3image) { ?>
                    <li class="slide slide-3">
                        <div class="flex-caption">
                            <div class="title-wrapper container">
                                <?php if ($hasslide3) { ?>
                                <h2 class="title"><?php echo $slide3 ?></h2>  
                                <?php } ?> 
                            </div>                            
                            <div class="caption-box">
                                <div class="caption-box-inner container">
                                    <div class="row">
                                        <div class="content col-md-8 col-sm-6 col-xs-12">
                                            <h3 class="subtitle"><?php echo $slide3subtitle ?></h3>
                                            <p><?php echo $slide3caption ?></p>
                                        </div>    
                                        <div class="col-md-3 col-sm-5 col-xs-12 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">                              
                                            <a href="<?php echo $slide3url ?>" class="btn btn-cta btn-cta-primary"><?php echo $slide3cta ?></a>
                                        </div>
                                    </div><!--//row-->
                                </div><!--//caption-box-inner-->
                            </div><!--//caption-box-->
                        </div><!--//flex-caption-->
                    </li>
                    <?php } ?> 
                    <?php if ($hasslide4image) { ?>
                    <li class="slide slide-4">
                        <div class="flex-caption">
                            <div class="title-wrapper container">
                                <?php if ($hasslide4) { ?>
                                <h2 class="title"><?php echo $slide4 ?></h2>  
                                <?php } ?> 
                            </div>                            
                            <div class="caption-box">
                                <div class="caption-box-inner container">
                                    <div class="row">
                                        <div class="content col-md-8 col-sm-6 col-xs-12">
                                            <h3 class="subtitle"><?php echo $slide4subtitle ?></h3>
                                            <p><?php echo $slide4caption ?></p>
                                        </div>    
                                        <div class="col-md-3 col-sm-5 col-xs-12 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">                              
                                            <a href="<?php echo $slide4url ?>" class="btn btn-cta btn-cta-primary"><?php echo $slide4cta ?></a>
                                        </div>
                                    </div><!--//row-->
                                </div><!--//caption-box-inner-->
                            </div><!--//caption-box-->
                        </div><!--//flex-caption-->
                    </li>
                    <?php } ?> 
                </ul>
            </div>
        </div><!--//bg-slider-wrapper-->  
    </section><!--//promo-->    
<?php } ?>