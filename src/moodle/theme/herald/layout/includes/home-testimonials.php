<?php

$hastestimonialsectiontitle = (!empty($PAGE->theme->settings->testimonialsectiontitle));

$hastestimonial1image = (!empty($PAGE->theme->settings->testimonial1image));
$hastestimonial2image = (!empty($PAGE->theme->settings->testimonial2image));
$hastestimonial3image = (!empty($PAGE->theme->settings->testimonial3image));
$hastestimonial4image = (!empty($PAGE->theme->settings->testimonial4image));
$hastestimonial5image = (!empty($PAGE->theme->settings->testimonial5image));
$hastestimonial6image = (!empty($PAGE->theme->settings->testimonial6image));

$hastestimonial1name = (!empty($PAGE->theme->settings->testimonial1name));
$hastestimonial2name = (!empty($PAGE->theme->settings->testimonial2name));
$hastestimonial3name = (!empty($PAGE->theme->settings->testimonial3name));
$hastestimonial4name = (!empty($PAGE->theme->settings->testimonial4name));
$hastestimonial5name = (!empty($PAGE->theme->settings->testimonial5name));
$hastestimonial6name = (!empty($PAGE->theme->settings->testimonial6name));

$hastestimonial1title = (!empty($PAGE->theme->settings->testimonial1title));
$hastestimonial2title = (!empty($PAGE->theme->settings->testimonial2title));
$hastestimonial3title = (!empty($PAGE->theme->settings->testimonial3title));
$hastestimonial4title= (!empty($PAGE->theme->settings->testimonial4title));
$hastestimonial5title= (!empty($PAGE->theme->settings->testimonial5title));
$hastestimonial6title= (!empty($PAGE->theme->settings->testimonial6title));

$hastestimonial1content= (!empty($PAGE->theme->settings->testimonial1content));
$hastestimonial2content = (!empty($PAGE->theme->settings->testimonial2content));
$hastestimonial3content = (!empty($PAGE->theme->settings->testimonial3content));
$hastestimonial4content= (!empty($PAGE->theme->settings->testimonial4content));
$hastestimonial5content= (!empty($PAGE->theme->settings->testimonial5content));
$hastestimonial6content= (!empty($PAGE->theme->settings->testimonial6content));


$hassecondslide = ($hastestimonial4content||$hastestimonial5content||$hastestimonial6content);


$testimonialsectiontitle = $PAGE->theme->settings->testimonialsectiontitle;

$testimonial1image = $PAGE->theme->setting_file_url('testimonial1image', 'testimonial1image');
$testimonial2image = $PAGE->theme->setting_file_url('testimonial2image', 'testimonial2image');
$testimonial3image = $PAGE->theme->setting_file_url('testimonial3image', 'testimonial3image');
$testimonial4image = $PAGE->theme->setting_file_url('testimonial4image', 'testimonial4image');
$testimonial5image = $PAGE->theme->setting_file_url('testimonial5image', 'testimonial5image');
$testimonial6image = $PAGE->theme->setting_file_url('testimonial6image', 'testimonial6image');

$testimonial1name = $PAGE->theme->settings->testimonial1name;
$testimonial2name = $PAGE->theme->settings->testimonial2name;
$testimonial3name = $PAGE->theme->settings->testimonial3name;
$testimonial4name = $PAGE->theme->settings->testimonial4name;
$testimonial5name = $PAGE->theme->settings->testimonial5name;
$testimonial6name = $PAGE->theme->settings->testimonial6name;

$testimonial1title = $PAGE->theme->settings->testimonial1title;
$testimonial2title = $PAGE->theme->settings->testimonial2title;
$testimonial3title = $PAGE->theme->settings->testimonial3title;
$testimonial4title = $PAGE->theme->settings->testimonial4title;
$testimonial5title = $PAGE->theme->settings->testimonial5title;
$testimonial6title = $PAGE->theme->settings->testimonial6title;

$testimonial1content = $PAGE->theme->settings->testimonial1content;
$testimonial2content = $PAGE->theme->settings->testimonial2content;
$testimonial3content = $PAGE->theme->settings->testimonial3content;
$testimonial4content = $PAGE->theme->settings->testimonial4content;
$testimonial5content = $PAGE->theme->settings->testimonial5content;
$testimonial6content = $PAGE->theme->settings->testimonial6content;

?>

<?php if($PAGE->theme->settings->usetestimonials ==1) { ?> 

    <!-- ******Testimonials Section****** -->
    <section class="section testimonials">
        <div class="container">
            <?php if ($hastestimonialsectiontitle) {?>
            <h2 class="title text-center"><?php echo $testimonialsectiontitle ?></h2>
            <?php } ?> 
            <div class="flexslider flexslider-testimonials">
                <div class="slides">
                    <div class="slide">
                        <div class="row">
                            <?php if ($hastestimonial1content) {?>
                            <div class="item col-md-4 col-sm-4 col-xs-12">
                                <div class="quote-box">
                                    <blockquote class="quote">
                                    <?php echo $testimonial1content ?>
                                    </blockquote><!--//quote-->
                                    <p class="details">
                                        <span class="name"><?php echo $testimonial1name ?></span>
                                        <span class="title"><?php echo $testimonial1title ?></span>
                                    </p> 
                                    <i class="fa fa-quote-right"></i>                                
                                </div><!--//quote-box-->
                                <div class="people text-center">
                                    <?php if ($hastestimonial1image) {?>
                                    <img class="img-rounded user-pic" src="<?php echo $testimonial1image ?>" alt="<?php echo $testimonial1name ?>"> 
                                    <?php } else {?>
                                    <img class="img-rounded user-pic" src="<?php echo $OUTPUT->pix_url('images/default-profile', 'theme'); ?>"  alt="<?php echo $testimonial1name ?>" />
                                    <?php } ?>                      
                                </div><!--//people-->
                            </div><!--//item-->
                            <?php } ?>
                            <?php if ($hastestimonial2content) {?>
                            <div class="item col-md-4 col-sm-4 col-xs-12">
                                <div class="quote-box">
                                    <blockquote class="quote">
                                    <?php echo $testimonial2content ?>
                                    </blockquote><!--//quote-->
                                    <p class="details">
                                        <span class="name"><?php echo $testimonial2name ?></span>
                                        <span class="title"><?php echo $testimonial2title ?></span>
                                    </p> 
                                    <i class="fa fa-quote-right"></i>                                
                                </div><!--//quote-box-->
                                <div class="people text-center">
                                    <?php if ($hastestimonial2image) {?>
                                    <img class="img-rounded user-pic" src="<?php echo $testimonial2image ?>" alt="<?php echo $testimonial2name ?>"> 
                                    <?php } else {?>
                                    <img class="img-rounded user-pic" src="<?php echo $OUTPUT->pix_url('images/default-profile', 'theme'); ?>"  alt="<?php echo $testimonial2name ?>" />
                                    <?php } ?>                      
                                </div><!--//people-->
                            </div><!--//item-->
                            <?php } ?>
                            <?php if ($hastestimonial3content) {?>
                            <div class="item col-md-4 col-sm-4 col-xs-12">
                                <div class="quote-box">
                                    <blockquote class="quote">
                                    <?php echo $testimonial3content ?>
                                    </blockquote><!--//quote-->
                                    <p class="details">
                                        <span class="name"><?php echo $testimonial3name ?></span>
                                        <span class="title"><?php echo $testimonial3title ?></span>
                                    </p> 
                                    <i class="fa fa-quote-right"></i>                                
                                </div><!--//quote-box-->
                                <div class="people text-center">
                                    <?php if ($hastestimonial3image) {?>
                                    <img class="img-rounded user-pic" src="<?php echo $testimonial3image ?>" alt="<?php echo $testimonial3name ?>"> 
                                    <?php } else {?>
                                    <img class="img-rounded user-pic" src="<?php echo $OUTPUT->pix_url('images/default-profile', 'theme'); ?>"  alt="<?php echo $testimonial3name ?>" />
                                    <?php } ?>                      
                                </div><!--//people-->
                            </div><!--//item-->
                            <?php } ?>
                        </div><!--//row-->
                    </div><!--//slide-->
                    <?php if ($hassecondslide) {?>
                    <div class="slide">
                        <div class="row">
                            <?php if ($hastestimonial4content) {?>
                            <div class="item col-md-4 col-sm-4 col-xs-12">
                                <div class="quote-box">
                                    <blockquote class="quote">
                                    <?php echo $testimonial4content ?>
                                    </blockquote><!--//quote-->
                                    <p class="details">
                                        <span class="name"><?php echo $testimonial4name ?></span>
                                        <span class="title"><?php echo $testimonial4title ?></span>
                                    </p> 
                                    <i class="fa fa-quote-right"></i>                                
                                </div><!--//quote-box-->
                                <div class="people text-center">
                                    <?php if ($hastestimonial4image) {?>
                                    <img class="img-rounded user-pic" src="<?php echo $testimonial4image ?>" alt="<?php echo $testimonial4name ?>"> 
                                    <?php } else {?>
                                    <img class="img-rounded user-pic" src="<?php echo $OUTPUT->pix_url('images/default-profile', 'theme'); ?>"  alt="<?php echo $testimonial4name ?>" />
                                    <?php } ?>                      
                                </div><!--//people-->
                            </div><!--//item-->
                            <?php } ?>
                            <?php if ($hastestimonial5content) {?>
                            <div class="item col-md-4 col-sm-4 col-xs-12">
                                <div class="quote-box">
                                    <blockquote class="quote">
                                    <?php echo $testimonial5content ?>
                                    </blockquote><!--//quote-->
                                    <p class="details">
                                        <span class="name"><?php echo $testimonial5name ?></span>
                                        <span class="title"><?php echo $testimonial5title ?></span>
                                    </p> 
                                    <i class="fa fa-quote-right"></i>                                
                                </div><!--//quote-box-->
                                <div class="people text-center">
                                    <?php if ($hastestimonial5image) {?>
                                    <img class="img-rounded user-pic" src="<?php echo $testimonial5image ?>" alt="<?php echo $testimonial5name ?>"> 
                                    <?php } else {?>
                                    <img class="img-rounded user-pic" src="<?php echo $OUTPUT->pix_url('images/default-profile', 'theme'); ?>"  alt="<?php echo $testimonial5name ?>" />
                                    <?php } ?>                      
                                </div><!--//people-->
                            </div><!--//item-->
                            <?php } ?>
                            <?php if ($hastestimonial6content) {?>
                            <div class="item col-md-4 col-sm-4 col-xs-12">
                                <div class="quote-box">
                                    <blockquote class="quote">
                                    <?php echo $testimonial6content ?>
                                    </blockquote><!--//quote-->
                                    <p class="details">
                                        <span class="name"><?php echo $testimonial6name ?></span>
                                        <span class="title"><?php echo $testimonial6title ?></span>
                                    </p> 
                                    <i class="fa fa-quote-right"></i>                                
                                </div><!--//quote-box-->
                                <div class="people text-center">
                                    <?php if ($hastestimonial6image) {?>
                                    <img class="img-rounded user-pic" src="<?php echo $testimonial6image ?>" alt="<?php echo $testimonial6name ?>"> 
                                    <?php } else {?>
                                    <img class="img-rounded user-pic" src="<?php echo $OUTPUT->pix_url('images/default-profile', 'theme'); ?>"  alt="<?php echo $testimonial6name ?>" />
                                    <?php } ?>                      
                                </div><!--//people-->
                            </div><!--//item-->
                            <?php } ?>
                        </div><!--//row-->
                    </div><!--//slide-->
                    <?php } ?>
                </div>
            </div><!--//flexslider-->
        </div><!--//container-->
    </section><!--//testimonials-->     

<?php }?>