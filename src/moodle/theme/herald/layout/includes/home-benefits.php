<?php
$hasbenefitsectiontitle = (!empty($PAGE->theme->settings->benefitsectiontitle));
$hasbenefit1icon = (!empty($PAGE->theme->settings->benefit1icon));
$hasbenefit1title = (!empty($PAGE->theme->settings->benefit1title));
$hasbenefit1content = (!empty($PAGE->theme->settings->benefit1content));
$hasbenefit2icon = (!empty($PAGE->theme->settings->benefit2icon));
$hasbenefit2title = (!empty($PAGE->theme->settings->benefit2title));
$hasbenefit2content = (!empty($PAGE->theme->settings->benefit2content));
$hasbenefit3icon = (!empty($PAGE->theme->settings->benefit3icon));
$hasbenefit3title = (!empty($PAGE->theme->settings->benefit3title));
$hasbenefit3content = (!empty($PAGE->theme->settings->benefit3content));
$hasbenefit4icon = (!empty($PAGE->theme->settings->benefit4icon));
$hasbenefit4title = (!empty($PAGE->theme->settings->benefit4title));
$hasbenefit4content = (!empty($PAGE->theme->settings->benefit4content));
$hasbenefit5icon = (!empty($PAGE->theme->settings->benefit5icon));
$hasbenefit5title = (!empty($PAGE->theme->settings->benefit5title));
$hasbenefit5content = (!empty($PAGE->theme->settings->benefit5content));
$hasbenefit6icon = (!empty($PAGE->theme->settings->benefit5icon));
$hasbenefit6title = (!empty($PAGE->theme->settings->benefit5title));
$hasbenefit6content = (!empty($PAGE->theme->settings->benefit5content));


if ($hasbenefitsectiontitle) {
    $benefitsectiontitle = $PAGE->theme->settings->benefitsectiontitle;
}

/* Benefit1 settings */
if ($hasbenefit1icon) {
    $benefit1icon = $PAGE->theme->settings->benefit1icon;
}

if ($hasbenefit1title) {
    $benefit1title = $PAGE->theme->settings->benefit1title;
}
if ($hasbenefit1content) {
    $benefit1content = $PAGE->theme->settings->benefit1content;
}

/* Benefit2 settings */
if ($hasbenefit2icon) {
    $benefit2icon = $PAGE->theme->settings->benefit2icon;
}

if ($hasbenefit2title) {
    $benefit2title = $PAGE->theme->settings->benefit2title;
}
if ($hasbenefit2content) {
    $benefit2content = $PAGE->theme->settings->benefit2content;
}

/* Benefit3 settings */
if ($hasbenefit3icon) {
    $benefit3icon = $PAGE->theme->settings->benefit3icon;
}

if ($hasbenefit3title) {
    $benefit3title = $PAGE->theme->settings->benefit3title;
}
if ($hasbenefit3content) {
    $benefit3content = $PAGE->theme->settings->benefit3content;
}
/* Benefit4 settings */
if ($hasbenefit4icon) {
    $benefit4icon = $PAGE->theme->settings->benefit4icon;
}

if ($hasbenefit4title) {
    $benefit4title = $PAGE->theme->settings->benefit4title;
}
if ($hasbenefit4content) {
    $benefit4content = $PAGE->theme->settings->benefit4content;
}

/* Benefit5 settings */
if ($hasbenefit5icon) {
    $benefit5icon = $PAGE->theme->settings->benefit5icon;
}

if ($hasbenefit5title) {
    $benefit5title = $PAGE->theme->settings->benefit5title;
}
if ($hasbenefit5content) {
    $benefit5content = $PAGE->theme->settings->benefit5content;
}

/* Benefit6 settings */
if ($hasbenefit6icon) {
    $benefit6icon = $PAGE->theme->settings->benefit6icon;
}

if ($hasbenefit6title) {
    $benefit6title = $PAGE->theme->settings->benefit6title;
}
if ($hasbenefit6content) {
    $benefit6content = $PAGE->theme->settings->benefit6content;
}

?>


<?php if($PAGE->theme->settings->usebenefits ==1) { ?> 
    <!-- ******Benefits Section****** -->
    <section class="section benefits has-texture">
        <div class="container text-center">
            <?php if ($hasbenefitsectiontitle) { ?>
            <h2 class="title"><?php echo $benefitsectiontitle ?></h2>
            <?php } ?>
            <div class="row">
                <div class="item col-md-4 col-sm-4 col-xs-12">
                    <?php if ($hasbenefit1icon) { ?>
                    <div class="icon"><i class="fa <?php echo $benefit1icon ?>"></i></div>
                    <?php } ?>
                    <div class="content">
                        <h3 class="subtitle"><?php echo $benefit1title ?></h3>
                        <p><?php echo $benefit1content ?></p>
                    </div><!--//content-->
                </div><!--//item-->
                
                <div class="item col-md-4 col-sm-4 col-xs-12">
                    <?php if ($hasbenefit2icon) { ?>
                    <div class="icon"><i class="fa <?php echo $benefit2icon ?>"></i></div>
                    <?php } ?>
                    <div class="content">
                        <h3 class="subtitle"><?php echo $benefit2title ?></h3>
                        <p><?php echo $benefit2content ?></p>
                    </div><!--//content-->
                </div><!--//item-->
                
                <div class="item col-md-4 col-sm-4 col-xs-12">
                    <?php if ($hasbenefit3icon) { ?>
                    <div class="icon"><i class="fa <?php echo $benefit3icon ?>"></i></div>
                    <?php } ?>
                    <div class="content">
                        <h3 class="subtitle"><?php echo $benefit3title ?></h3>
                        <p><?php echo $benefit3content ?></p>
                    </div><!--//content-->
                </div><!--//item-->
            </div><!--//row-->
            <div class="row" >   
                <div class="item col-md-4 col-sm-4 col-xs-12">
                    <?php if ($hasbenefit4icon) { ?>
                    <div class="icon"><i class="fa <?php echo $benefit4icon ?>"></i></div>
                    <?php } ?>
                    <div class="content">
                        <h3 class="subtitle"><?php echo $benefit4title ?></h3>
                        <p><?php echo $benefit4content ?></p>
                    </div><!--//content-->
                </div><!--//item-->
                
                <div class="item col-md-4 col-sm-4 col-xs-12">
                    <?php if ($hasbenefit5icon) { ?>
                    <div class="icon"><i class="fa <?php echo $benefit5icon ?>"></i></div>
                    <?php } ?>
                    <div class="content">
                        <h3 class="subtitle"><?php echo $benefit5title ?></h3>
                        <p><?php echo $benefit5content ?></p>
                    </div><!--//content-->
                </div><!--//item-->              
                
                <div class="item col-md-4 col-sm-4 col-xs-12">
                    <?php if ($hasbenefit6icon) { ?>
                    <div class="icon"><i class="fa <?php echo $benefit6icon ?>"></i></div>
                    <?php } ?>
                    <div class="content">
                        <h3 class="subtitle"><?php echo $benefit6title ?></h3>
                        <p><?php echo $benefit6content ?></p>
                    </div><!--//content-->
                </div><!--//item-->
            </div><!--//row-->            
        </div>
    </section><!--//benefits-->
<?php }?>