<?php

$hasfeaturedtitle = (!empty($PAGE->theme->settings->featuredtitle));

$hasfeaturedleadtext = (!empty($PAGE->theme->settings->featuredleadtext));
$hasfeaturedleadurl = (!empty($PAGE->theme->settings->featuredleadurl));

$hashomeblock1image = (!empty($PAGE->theme->settings->homeblock1image));
$hashomeblock2image = (!empty($PAGE->theme->settings->homeblock2image));
$hashomeblock3image = (!empty($PAGE->theme->settings->homeblock3image));
$hashomeblock4image = (!empty($PAGE->theme->settings->homeblock4image));
$hashomeblock5image = (!empty($PAGE->theme->settings->homeblock5image));
$hashomeblock6image = (!empty($PAGE->theme->settings->homeblock6image));
$hashomeblock7image = (!empty($PAGE->theme->settings->homeblock7image));
$hashomeblock8image = (!empty($PAGE->theme->settings->homeblock8image));

$hashomeblock1title = (!empty($PAGE->theme->settings->homeblock1));
$hashomeblock2title = (!empty($PAGE->theme->settings->homeblock2));
$hashomeblock3title = (!empty($PAGE->theme->settings->homeblock3));
$hashomeblock4title = (!empty($PAGE->theme->settings->homeblock4));
$hashomeblock5title = (!empty($PAGE->theme->settings->homeblock5));
$hashomeblock6title = (!empty($PAGE->theme->settings->homeblock6));
$hashomeblock7title = (!empty($PAGE->theme->settings->homeblock7));
$hashomeblock8title = (!empty($PAGE->theme->settings->homeblock8));

$hashomeblock1content = (!empty($PAGE->theme->settings->homeblock1content));
$hashomeblock2content = (!empty($PAGE->theme->settings->homeblock2content));
$hashomeblock3content = (!empty($PAGE->theme->settings->homeblock3content));
$hashomeblock4content = (!empty($PAGE->theme->settings->homeblock4content));
$hashomeblock5content = (!empty($PAGE->theme->settings->homeblock5content));
$hashomeblock6content = (!empty($PAGE->theme->settings->homeblock6content));
$hashomeblock7content = (!empty($PAGE->theme->settings->homeblock7content));
$hashomeblock8content = (!empty($PAGE->theme->settings->homeblock8content));

$hashomeblock1url = (!empty($PAGE->theme->settings->homeblock1url));
$hashomeblock2url = (!empty($PAGE->theme->settings->homeblock2url));
$hashomeblock3url = (!empty($PAGE->theme->settings->homeblock3url));
$hashomeblock4url = (!empty($PAGE->theme->settings->homeblock4url));
$hashomeblock5url = (!empty($PAGE->theme->settings->homeblock5url));
$hashomeblock6url = (!empty($PAGE->theme->settings->homeblock6url));
$hashomeblock7url = (!empty($PAGE->theme->settings->homeblock7url));
$hashomeblock8url = (!empty($PAGE->theme->settings->homeblock8url));


/* Block settings */

$featuredtitle = $PAGE->theme->settings->featuredtitle;
$featuredleadtext = $PAGE->theme->settings->featuredleadtext;
$featuredleadurl = $PAGE->theme->settings->featuredleadurl;

$homeblock1image = $PAGE->theme->setting_file_url('homeblock1image', 'homeblock1image');
$homeblock2image = $PAGE->theme->setting_file_url('homeblock2image', 'homeblock2image');
$homeblock3image = $PAGE->theme->setting_file_url('homeblock3image', 'homeblock3image');
$homeblock4image = $PAGE->theme->setting_file_url('homeblock4image', 'homeblock4image');
$homeblock5image = $PAGE->theme->setting_file_url('homeblock5image', 'homeblock5image');
$homeblock6image = $PAGE->theme->setting_file_url('homeblock6image', 'homeblock6image');
$homeblock7image = $PAGE->theme->setting_file_url('homeblock7image', 'homeblock7image');
$homeblock8image = $PAGE->theme->setting_file_url('homeblock8image', 'homeblock8image');

$homeblock1title = $PAGE->theme->settings->homeblock1;
$homeblock2title = $PAGE->theme->settings->homeblock2;
$homeblock3title = $PAGE->theme->settings->homeblock3;
$homeblock4title = $PAGE->theme->settings->homeblock4;
$homeblock5title = $PAGE->theme->settings->homeblock5;
$homeblock6title = $PAGE->theme->settings->homeblock6;
$homeblock7title = $PAGE->theme->settings->homeblock7;
$homeblock8title = $PAGE->theme->settings->homeblock8;

$homeblock1content = $PAGE->theme->settings->homeblock1content;
$homeblock2content = $PAGE->theme->settings->homeblock2content;
$homeblock3content = $PAGE->theme->settings->homeblock3content;
$homeblock4content = $PAGE->theme->settings->homeblock4content;
$homeblock5content = $PAGE->theme->settings->homeblock5content;
$homeblock6content = $PAGE->theme->settings->homeblock6content;
$homeblock7content = $PAGE->theme->settings->homeblock7content;
$homeblock8content = $PAGE->theme->settings->homeblock8content;


$homeblock1url = $PAGE->theme->settings->homeblock1url;
$homeblock2url = $PAGE->theme->settings->homeblock2url;
$homeblock3url = $PAGE->theme->settings->homeblock3url;
$homeblock4url = $PAGE->theme->settings->homeblock4url;
$homeblock5url = $PAGE->theme->settings->homeblock5url;
$homeblock6url = $PAGE->theme->settings->homeblock6url;
$homeblock7url = $PAGE->theme->settings->homeblock7url;
$homeblock8url = $PAGE->theme->settings->homeblock8url;

?>

<?php if($PAGE->theme->settings->usehomeblocks ==1) {?>

    <!-- ******Featured Section****** -->
    <section class="section featured">
        <div class="container text-center">
            
            <h2 class="title"><?php if ($hasfeaturedtitle) { ?><?php echo $featuredtitle ?><?php } ?> <?php if ($hasfeaturedleadtext) { ?><a class="lead" href=" <?php if ($hasfeaturedleadurl) { ?><?php echo $featuredleadurl ?><?php }?>"><?php echo $featuredleadtext ?> <i class="fa fa-long-arrow-right"></i> </a><?php } ?></h2>
            
            <div class="row">
                <div class="item col-md-3 col-sm-6 col-xs-12">
                    <?php if ($hashomeblock1image) { ?>
                    <figure class="figure">
                        <?php if($hashomeblock1url) {?><a href="<?php echo $homeblock1url ?>"><?php } ?>
                        <img class="img-responsive" src="<?php echo $homeblock1image ?>" alt="<?php if($hashomeblock1title) {?><?php  echo $homeblock1title ?><?php } ?>" />
                        <?php if($hashomeblock1url) {?></a><?php } ?>
                    </figure>
                    <?php } ?>
                    <div class="content">
                        <?php if ($hashomeblock1title) {?>
                        <h3 class="subtitle"><a href="<?php echo $homeblock1url ?>"><?php echo $homeblock1title ?></a></h3>
                        <?php } ?>
                        <?php if ($hashomeblock1content) {?>
                        <p><?php echo $homeblock1content ?></p>
                        <?php } ?>
                    </div>
                </div><!--//item-->
                <div class="item col-md-3 col-sm-6 col-xs-12">
                    <?php if ($hashomeblock2image) { ?>
                    <figure class="figure">
                        <?php if($hashomeblock2url) {?><a href="<?php echo $homeblock2url ?>"><?php } ?>
                        <img class="img-responsive" src="<?php echo $homeblock2image ?>" alt="<?php if($hashomeblock2title) {?><?php  echo $homeblock2title ?><?php } ?>" />
                        <?php if($hashomeblock2url) {?></a><?php } ?>
                    </figure>
                    <?php } ?>
                    <div class="content">
                        <?php if ($hashomeblock2title) {?>
                        <h3 class="subtitle"><a href="<?php echo $homeblock2url ?>"><?php echo $homeblock2title ?></a></h3>
                        <?php } ?>
                        <?php if ($hashomeblock2content) {?>
                        <p><?php echo $homeblock2content ?></p>
                        <?php } ?>
                    </div>
                </div><!--//item-->
                <div class="clearfix visible-sm-block"></div>
                <div class="item col-md-3 col-sm-6 col-xs-12">
                    <?php if ($hashomeblock3image) { ?>
                    <figure class="figure">
                        <?php if($hashomeblock3url) {?><a href="<?php echo $homeblock3url ?>"><?php } ?>
                        <img class="img-responsive" src="<?php echo $homeblock3image ?>" alt="<?php if($hashomeblock3title) {?><?php  echo $homeblock3title ?><?php } ?>" />
                        <?php if($hashomeblock3url) {?></a><?php } ?>
                    </figure>
                    <?php } ?>
                    <div class="content">
                        <?php if ($hashomeblock3title) {?>
                        <h3 class="subtitle"><a href="<?php echo $homeblock3url ?>"><?php echo $homeblock3title ?></a></h3>
                        <?php } ?>
                        <?php if ($hashomeblock3content) {?>
                        <p><?php echo $homeblock3content ?></p>
                        <?php } ?>
                    </div>
                </div><!--//item-->
                <div class="item col-md-3 col-sm-6 col-xs-12">
                    <?php if ($hashomeblock4image) { ?>
                    <figure class="figure">
                        <?php if($hashomeblock4url) {?><a href="<?php echo $homeblock4url ?>"><?php } ?>
                        <img class="img-responsive" src="<?php echo $homeblock4image ?>" alt="<?php if($hashomeblock4title) {?><?php  echo $homeblock4title ?><?php } ?>" />
                        <?php if($hashomeblock4url) {?></a><?php } ?>
                    </figure>
                    <?php } ?>
                    <div class="content">
                        <?php if ($hashomeblock4title) {?>
                        <h3 class="subtitle"><a href="<?php echo $homeblock4url ?>"><?php echo $homeblock4title ?></a></h3>
                        <?php } ?>
                        <?php if ($hashomeblock4content) {?>
                        <p><?php echo $homeblock4content ?></p>
                        <?php } ?>
                    </div>
                </div><!--//item-->
                <div class="clearfix visible-sm-block visible-md-block visible-lg-block"></div>
                <div class="item col-md-3 col-sm-6 col-xs-12">
                    <?php if ($hashomeblock5image) { ?>
                    <figure class="figure">
                        <?php if($hashomeblock5url) {?><a href="<?php echo $homeblock5url ?>"><?php } ?>
                        <img class="img-responsive" src="<?php echo $homeblock5image ?>" alt="<?php if($hashomeblock5title) {?><?php  echo $homeblock5title ?><?php } ?>" />
                        <?php if($hashomeblock5url) {?></a><?php } ?>
                    </figure>
                    <?php } ?>
                    <div class="content">
                        <?php if ($hashomeblock5title) {?>
                        <h3 class="subtitle"><a href="<?php echo $homeblock5url ?>"><?php echo $homeblock5title ?></a></h3>
                        <?php } ?>
                        <?php if ($hashomeblock5content) {?>
                        <p><?php echo $homeblock5content ?></p>
                        <?php } ?>
                    </div>
                </div><!--//item-->
                <div class="item col-md-3 col-sm-6 col-xs-12">
                    <?php if ($hashomeblock6image) { ?>
                    <figure class="figure">
                        <?php if($hashomeblock6url) {?><a href="<?php echo $homeblock6url ?>"><?php } ?>
                        <img class="img-responsive" src="<?php echo $homeblock6image ?>" alt="<?php if($hashomeblock6title) {?><?php  echo $homeblock6title ?><?php } ?>" />
                        <?php if($hashomeblock6url) {?></a><?php } ?>
                    </figure>
                    <?php } ?>
                    <div class="content">
                        <?php if ($hashomeblock6title) {?>
                        <h3 class="subtitle"><a href="<?php echo $homeblock6url ?>"><?php echo $homeblock6title ?></a></h3>
                        <?php } ?>
                        <?php if ($hashomeblock6content) {?>
                        <p><?php echo $homeblock6content ?></p>
                        <?php } ?>
                    </div>
                </div><!--//item-->
                <div class="clearfix visible-sm-block"></div>
                <div class="item col-md-3 col-sm-6 col-xs-12">
                    <?php if ($hashomeblock7image) { ?>
                    <figure class="figure">
                        <?php if($hashomeblock7url) {?><a href="<?php echo $homeblock7url ?>"><?php } ?>
                        <img class="img-responsive" src="<?php echo $homeblock7image ?>" alt="<?php if($hashomeblock7title) {?><?php  echo $homeblock7title ?><?php } ?>" />
                        <?php if($hashomeblock7url) {?></a><?php } ?>
                    </figure>
                    <?php } ?>
                    <div class="content">
                        <?php if ($hashomeblock7title) {?>
                        <h3 class="subtitle"><a href="<?php echo $homeblock7url ?>"><?php echo $homeblock7title ?></a></h3>
                        <?php } ?>
                        <?php if ($hashomeblock7content) {?>
                        <p><?php echo $homeblock7content ?></p>
                        <?php } ?>
                    </div>
                </div><!--//item-->
                <div class="item col-md-3 col-sm-6 col-xs-12">
                    <?php if ($hashomeblock8image) { ?>
                    <figure class="figure">
                        <?php if($hashomeblock8url) {?><a href="<?php echo $homeblock8url ?>"><?php } ?>
                        <img class="img-responsive" src="<?php echo $homeblock8image ?>" alt="<?php if($hashomeblock8title) {?><?php  echo $homeblock8title ?><?php } ?>" />
                        <?php if($hashomeblock8url) {?></a><?php } ?>
                    </figure>
                    <?php } ?>
                    <div class="content">
                        <?php if ($hashomeblock8title) {?>
                        <h3 class="subtitle"><a href="<?php echo $homeblock8url ?>"><?php echo $homeblock8title ?></a></h3>
                        <?php } ?>
                        <?php if ($hashomeblock8content) {?>
                        <p><?php echo $homeblock8content ?></p>
                        <?php } ?>
                    </div>
                </div><!--//item-->
            </div><!--//row-->           
        </div><!--//container-->
    </section><!--//featured--> 
<?php } ?>