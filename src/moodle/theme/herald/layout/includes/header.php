<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/* LOGO Image */
$haslogo = (!empty($PAGE->theme->settings->logo));

/* Logo settings */
if ($haslogo) {
$logourl = $PAGE->theme->setting_file_url('logo', 'logo');
} else {
$logourl = $OUTPUT->pix_url('logo', 'theme');
}

/* Header widget settings */
$hasheaderwidget = (!empty($PAGE->theme->settings->headerwidget));
$headerwidget = $PAGE->theme->settings->headerwidget;

?>
<header id="page-header" class="header">
    <div id="topbar" class="topbar container-fluid">  
        <nav role="navigation" class="main-nav">
            <div class="navbar-header">
                <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target="#nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><!--//nav-toggle-->
            </div><!--//navbar-header-->
            <div id="nav-collapse" class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>              
            </div>
        </nav>                        
    </div><!--//topbar-->    
    
    <div class=" branding container-fluid">     
        <div class="row" >
            <h1 class="logo col-md-5 col-sm-12 col-xs-12">
                <a href="<?php echo $CFG->wwwroot ?>"><img id="logo" src="<?php echo $logourl ?>" alt="<?php echo $SITE->shortname; ?>" /></a>
            </h1><!--//logo-->
            
            <div class="info-container col-md-7 col-sm-12 col-xs-12">
                
                <div class="logininfo-container">
                    <?php echo $PAGE->headingmenu ?>
                    <?php if (!isloggedin()) { ?>
                    <a class="btn btn-cta btn-cta-secondary" href="<?php echo $CFG->wwwroot ?>/login/" ><?php echo get_string('login') ?></a>
                    <?php } ?>                    
                    
                    <?php if (isloggedin()) { ?>
                        <?php echo $OUTPUT->login_info() ?>                    
                        <?php echo $OUTPUT->user_picture($USER); ?>
                    <?php } ?>
                </div><!--//logininfo-container-->
                <?php if($hasheaderwidget) {?>
                <div class="header-widget">
                    <?php echo $headerwidget ?>
                </div><!--//header-widget-->
                <?php }?>
            </div>
        </div><!--//row-->             
    </div><!--//branding-->
</header>
