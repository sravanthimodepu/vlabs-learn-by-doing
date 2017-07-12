<?php

$hasvideosectiontitle = (!empty($PAGE->theme->settings->videosectiontitle));
$hasvideocontent = (!empty($PAGE->theme->settings->videocontent ));
$hasvideoid = (!empty($PAGE->theme->settings->videoid ));

$videosectiontitle = $PAGE->theme->settings->videosectiontitle;
$videocontent = $PAGE->theme->settings->videocontent;
$videoid = $PAGE->theme->settings->videoid;

?>

<?php if($PAGE->theme->settings->usevideosection ==1) { ?>        

    <!-- ******Video Section****** -->
    <section class="section video has-texture">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <?php if ($hasvideosectiontitle) { ?>
                    <h2 class="title"><?php echo $videosectiontitle ?></h2>
                    <?php } ?>
                    <?php if ($hasvideocontent) { ?>
                    <p class="intro"><?php echo $videocontent ?></p>
                    <?php } ?>
                    <?php if ($hasvideoid) { ?>
                    <div class="video-container">
                        <iframe width="560" height="315" src="//www.youtube.com/embed/<?php echo $videoid  ?>" frameborder="0" allowfullscreen></iframe>
                        
                    </div><!--//video-container-->
                    <?php } ?>
                </div>
            </div><!--//row-->       
        </div><!--//container-->
    </section><!--//press-->  
    
<?php }?>