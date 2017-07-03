<?php
    if(isloggedin())
        redirect ($CFG->wwwroot);
    echo $OUTPUT->doctype();
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en" <?php echo $OUTPUT->htmlattributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en" <?php echo $OUTPUT->htmlattributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en" <?php echo $OUTPUT->htmlattributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en" <?php echo $OUTPUT->htmlattributes(); ?>> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $PAGE->title; ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700,400italic' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php echo $OUTPUT->loadGoogleFont(); ?>
    
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme'); ?>">
    
    <?php echo $OUTPUT->googleAnalytics() ?>
    <?php echo $OUTPUT->standard_head_html() ?>
    
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?php echo $CFG->wwwroot;?>/theme/saga/css/nojs.css" />
    </noscript>
</head>
<body>
    <?php echo $OUTPUT->standard_top_of_body_html(); ?>
    <?php include 'header.php'; ?>
    
    <div id="contentarea" class="row">
        <div class="sklt-container">
            <div class="sixteen columns">
                <br>
                <center>
                    <a href="<?php echo $CFG->wwwroot; ?>">
                        <?php echo $OUTPUT->logo('login'); ?>
                    </a>
                </center>
                <br>
            </div>
        </div>
        <div class="sklt-container">
            <div class="sixteen columns">
                <div class="loginbox">
                    <div class="alert">
                        <?php 
                            if(isset($_POST['username']) || isset($_POST['password'])){
                                echo get_string("invalidlogin");
                            }else{
                                echo get_string('login','theme_saga');
                            } 
                        ?>
                    </div>
                    
                    <form method="post"  action="<?php echo $CFG->wwwroot; ?>/login/index.php">
                        <div class="inputarea">
                            <div>
                                <input type="text" name="username" placeholder="<?php echo get_string('username','theme_saga'); ?>" autocomplete="off"/>
                            </div>
                            <div>
                                <input type="password" name="password" placeholder="<?php echo get_string('password','theme_saga'); ?>" autocomplete="off"/>
                            </div>
                            <input type="submit" value=">"/>
                        </div>
                        <div class="remember">
                            <input type="checkbox" name="rememberusername" value="1"/>
                            <label><?php echo get_string('remember','theme_saga'); ?></label>
                        </div>
                        <a href="forgot_password.php"><?php echo get_string('forgotuser','theme_saga'); ?></a>
                    </form>
                </div>
                <br>
                <?php echo $OUTPUT->otherLoginMethods($CFG); ?>
                <br><br>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
<?php 
    echo "<div style='display: none;'>".$OUTPUT->main_content()."</div>";
    echo $OUTPUT->standard_end_of_body_html();
    echo $OUTPUT->forcefooter();
?>