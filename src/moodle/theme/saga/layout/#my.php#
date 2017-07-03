<?php
    $hassidepre = $PAGE->blocks->region_has_content('side-pre', $OUTPUT);
    $hassidepost = $PAGE->blocks->region_has_content('side-post', $OUTPUT);
    $showsidepre = $hassidepre && !$PAGE->blocks->region_completely_docked('side-pre', $OUTPUT);
    $showsidepost = $hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT);

    /* Sidebar */
    if($hassidepre)
        $sidebar = "LEFT";
    else if($hassidepost)
        $sidebar = "RIGHT";
    else
        $sidebar = "NONE";

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

    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>">
    
    <?php echo $OUTPUT->googleAnalytics() ?>
    <?php echo $OUTPUT->standard_head_html() ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
      <script>
    $(function() {
	$( "#accordion" ).accordion({
	  heightStyle: "content"
	      });
      });
  </script>
    
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?php echo $CFG->wwwroot;?>/theme/saga/css/nojs.css" />
    </noscript>
</head>
<body>
    <?php echo $OUTPUT->standard_top_of_body_html(); ?>
   <?php include 'header.php'; ?> 
    
  <!--  <?php echo $OUTPUT->slider(); ?> -->
    
    <div id="contentarea" class="row">
        <div class="sklt-container">
            <?php 
                echo $OUTPUT->breadcrumb($PAGE);
            ?>

            <?php if($sidebar == "LEFT") { ?>
                <div class="four columns leftsidebar">
                    <?php echo $OUTPUT->blocks_for_region('side-pre'); ?>
                </div>
            <?php } ?>
            
            <?php
                /* Verifying current page and special my homepage */
                $specialPages[] = str_replace("http://", "", str_replace("https://", "", $CFG->wwwroot.'/my/'));
                $specialPages[] = str_replace("http://", "", str_replace("https://", "", $CFG->wwwroot.'/my/index.php'));
                $specialPages[] = str_replace("http://", "", str_replace("https://", "", $CFG->wwwroot.'/my'));
                $currentPage = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

                $currentPage = str_replace("http://", "", str_replace("https://", "", $currentPage));
            ?>

            <!-- If is MOODLE/my/ -->
            <?php if (in_array($currentPage, $specialPages)) { ?>

 <!-- Admin login my page -->

 <?php if (isloggedin() && $USER->username == 'admin') { ?>


            <div class="<?php echo (($sidebar == "NONE")?"sixteen":"twelve"); ?> columns">

                <!-- Courses Header -->
                <div class="<?php echo (($sidebar != "NONE")?"twelve":"sixteen"); ?> alpha columns" id="myCourses">
               <!--     <?php echo get_string('mycourses','theme_saga'); ?>

                        <div id="allCourses">
                        <a href="<?php echo $CFG->wwwroot; ?>/course/"><div><?php echo get_string('allcourses','theme_saga'); ?></div></a>
                    </div>
                </div> -->
                
                
                <div class="<?php echo (($sidebar != "NONE")?"twelve":"sixteen"); ?> alpha columns sklt-container">
                    <!-- Courses List -->
                    <?php 
                      echo $OUTPUT->mycourses($CFG,$sidebar);
					    echo "<h2> Administration Links </h2>";
						echo "<h4> <p><a href=\moodle/course/management.php class=\"adminlink\">Manage a Course </a></p></h4>";
					    echo "<h4> <p><a href=\moodle/admin/tool/uploadcourse/index.php>Upload a Course </a></p></h4>";
						echo "<h4> <p><a href=\moodle/admin/settings.php?section=frontpagesettings>Front Page Settings </a></p></h4>";
						echo "<h4> <p><a href=\moodle/admin/user.php>Manage User</a></p></h4>";
						echo "<h4> <p><a href=\moodle/admin/user/user_bulk.php>Bulk User</a></p></h4>";
						echo "<h4> <p><a href=\moodle/admin/tool/uploaduser/picture.php>Add Profile Images</a></p></h4>";


						echo "<h4> <p><a href=\moodle/admin/roles/manage.php>Manage a role</a></p></h4>";
						echo "<h4> <p><a href=\moodle/grade/edit/scale/index.php>Customize grade scales</a></p></h4>";

						echo "<h4> <p><a href=\moodle/grade/edit/letter/index.php>Customize grade letters</a></p></h4>";
						
						echo "<h4> <p><a href=\moodle/mod/forum/view.php?id=23>Site News</a></p></h4>";
						echo "<h4> <p><a href=\moodle/cohort/index.php?contextid=92>Cohorts</a></p></h4>";


						echo "<h4> <p><a href=\moodle/report/log/index.php>Analytics</a></p></h4>";
						echo "<h4> <p><a href=\moodle/admin/tool/spamcleaner/index.php>Spam Cleaner</a></p></h4>";
						echo "<h4> <p><a href=\moodle/report/backups/index.php>Backups</a></p></h4>";
						



                   ?>
                </div>

            </div>
           <!-- If is not (other than admin user) -->

            <?php } else { ?>
			
			 <div class="<?php echo (($sidebar == "NONE")?"sixteen":"twelve"); ?> columns">

                <!-- Courses Header -->
                <div class="<?php echo (($sidebar != "NONE")?"twelve":"sixteen"); ?> alpha columns" id="myCourses">
                    <?php echo get_string('mycourses','theme_saga'); ?>

                    <div id="allCourses">
                        <a href="<?php echo $CFG->wwwroot; ?>/course/"><div><?php echo get_string('allcourses','theme_saga'); ?></div></a>
                    </div>
                </div>
                
                
                <div class="<?php echo (($sidebar != "NONE")?"twelve":"sixteen"); ?> alpha columns sklt-container">
                    <!-- Courses List -->
                    <?php 
                        echo $OUTPUT->mycourses($CFG,$sidebar);
                    ?>
                </div>

            </div>
           
			
			 <!-- If is not -->
			 <?php } } else { ?>
                <div class="<?php echo (($sidebar == "NONE")?"sixteen":"twelve"); ?> columns">
                    <div id="page-wrapper">
                        <div id="page">
                            <div id="page-content">
                                <div id="region-main-box">
                                    <div id="region-pre-box">
                                        <div id="region-main">
                                            <div class="region-content">
                                                <?php if(isset($coursecontentheader)) echo $coursecontentheader; ?>
                                                <?php echo $OUTPUT->main_content() ?>
                                                <?php if(isset($coursecontentfooter)) echo $coursecontentfooter; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            <?php }?>
            
            <?php if($sidebar == "RIGHT") { ?>
                <div class="four columns rightsidebar">
                    <?php echo $OUTPUT->blocks_for_region('side-post'); ?>
                </div>
            <?php } ?>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
</body>

<?php 
    echo "<div style='display: none;'>".$OUTPUT->main_content()."</div>"; 
    echo $OUTPUT->standard_end_of_body_html();
?>