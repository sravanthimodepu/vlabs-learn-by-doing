<?php
$hascopyright = (empty($PAGE->theme->settings->copyright)) ? false : $PAGE->theme->settings->copyright;
$hasfooterwidget = (empty($PAGE->theme->settings->footerwidget)) ? false : $PAGE->theme->settings->footerwidget;

/* Footer blocks settings */
$hasfooterblocks = (empty($PAGE->theme->settings->enablefooterblocks)) ? false : $PAGE->theme->settings->enablefooterblocks;
$hasfooterblock1 = (empty($PAGE->theme->settings->footerblock1)) ? false : $PAGE->theme->settings->footerblock1;
$hasfooterblock2 = (empty($PAGE->theme->settings->footerblock2)) ? false : $PAGE->theme->settings->footerblock2;
$hasfooterblock3 = (empty($PAGE->theme->settings->footerblock3)) ? false : $PAGE->theme->settings->footerblock3;

$footerblock1 = $PAGE->theme->settings->footerblock1;
$footerblock2 = $PAGE->theme->settings->footerblock2;
$footerblock3 = $PAGE->theme->settings->footerblock3;

$footerwidget = $PAGE->theme->settings->footerwidget;

?>
    
    
        <div class="footer-content">
            <div class="container">
                
                <?php if ($hasfooterblocks) {?>
                <div class="row"> 
                    <?php if ($hasfooterblock1) {?>                   
                    <div class="footer-col links col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-col-inner">
                         <?php echo $footerblock1 ?>     
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->  
                    <?php }?>     
                    <?php if ($hasfooterblock2) {?>            
                    <div class="footer-col links col-md-3 col-sm-6 col-xs-12 sm-break">
                        <div class="footer-col-inner">
                            <?php echo $footerblock2 ?> 
                        </div><!--//footer-col-inner-->            
                    </div><!--//foooter-col-->  
                    <?php }?>  
                    <?php if ($hasfooterblock3) {?> 
                    <div class="footer-col contact col-md-6 col-sm-12 col-xs-12">
                        <div class="footer-col-inner">
                            <?php echo $footerblock3 ?> 
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->
                    <?php }?>
                </div><!--//row-->
                <?php }?> 
                
               <!-- <p class="helplink"><?php echo page_doc_link(get_string('moodledocslink')); ?></p>
                <?php if ($hasfooterwidget) {?>
                <div class="footerwidget"><?php echo $footerwidget ?></div>
                <?php }?> -->
            
            </div><!--//container-->
        </div><!--//footer-content-->
        <div class="bottom-bar">
            <div class="container text-center">
                <?php if ($hascopyright) {
                echo '<small class="copyright">&copy; '.date("Y").' '.$hascopyright.'</small>';
                } ?>            </div><!--//container-->
        </div><!--//bottom-bar-->    
	

