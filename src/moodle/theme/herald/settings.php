<?php
$settings = null;

defined('MOODLE_INTERNAL') || die;
    
	$ADMIN->add('themes', new admin_category('theme_herald', 'Herald'));

	// "genericsettings" settingpage
	$temp = new admin_settingpage('theme_herald_generic',  get_string('geneticsettings', 'theme_herald'));
	
    // Logo file setting.   
    $name = 'theme_herald/logo';
    $title = get_string('logo','theme_herald');
    $description = get_string('logodesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);  

    // Layout - sidebar position.
    $name = 'theme_herald/layout';
    $title = get_string('layout', 'theme_herald');
    $description = get_string('layoutdesc', 'theme_herald');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Include Awesome Font from Bootstrapcdn
    $name = 'theme_herald/bootstrapcdn';
    $title = get_string('bootstrapcdn', 'theme_herald');
    $description = get_string('bootstrapcdndesc', 'theme_herald');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    // Navbar Seperator.
    $name = 'theme_herald/navbarsep';
    $title = get_string('navbarsep' , 'theme_herald');
    $description = get_string('navbarsepdesc', 'theme_herald');
    $nav_thinbracket = get_string('nav_thinbracket', 'theme_herald');
    $nav_doublebracket = get_string('nav_doublebracket', 'theme_herald');
    $nav_thickbracket = get_string('nav_thickbracket', 'theme_herald');
    $nav_slash = get_string('nav_slash', 'theme_herald');
    $nav_pipe = get_string('nav_pipe', 'theme_herald');
    $dontdisplay = get_string('dontdisplay', 'theme_herald');
    $default = '/';
    $choices = array('\f105'=>$nav_thinbracket, '/'=>$nav_slash, '\f101'=>$nav_doublebracket, '\f054'=>$nav_thickbracket, '|'=>$nav_pipe);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Copyright setting.
    $name = 'theme_herald/copyright';
    $title = get_string('copyright', 'theme_herald');
    $description = get_string('copyrightdesc', 'theme_herald');
    $default = '3rd Wave Media';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Footerwidget setting.
    $name = 'theme_herald/footerwidget';
    $title = get_string('footerwidget', 'theme_herald');
    $description = get_string('footerwidgetdesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Custom CSS file.
    $name = 'theme_herald/customcss';
    $title = get_string('customcss', 'theme_herald');
    $description = get_string('customcssdesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $ADMIN->add('theme_herald', $temp);
    
    /* Header Settings */
    $temp = new admin_settingpage('theme_herald_header', get_string('headerheading', 'theme_herald'));
	$temp->add(new admin_setting_heading('theme_herald_header', get_string('headerheadingsub', 'theme_herald'),
            format_text(get_string('headerdesc' , 'theme_herald'), FORMAT_MARKDOWN)));
    
    // Header widget setting
    $name = 'theme_herald/headerwidget';
    $title = get_string('headerwidget','theme_herald');
    $description = get_string('headerwidgetdesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
        
    $ADMIN->add('theme_herald', $temp);
    
    /* Custom Menu Settings */
    $temp = new admin_settingpage('theme_herald_custommenu', get_string('custommenuheading', 'theme_herald'));
	            
    // Description for mydashboard
    $name = 'theme_herald/mydashboardinfo';
    $heading = get_string('mydashboardinfo', 'theme_herald');
    $information = get_string('mydashboardinfodesc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Enable dashboard display in custommenu.
    $name = 'theme_herald/displaymydashboard';
    $title = get_string('displaymydashboard', 'theme_herald');
    $description = get_string('displaymydashboarddesc', 'theme_herald');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //Description for mycourse
    $name = 'theme_herald/mycoursesinfo';
    $heading = get_string('mycoursesinfo', 'theme_herald');
    $information = get_string('mycoursesinfodesc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Toggle courses display in custommenu.
    $name = 'theme_herald/displaymycourses';
    $title = get_string('displaymycourses', 'theme_herald');
    $description = get_string('displaymycoursesdesc', 'theme_herald');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Set wording for dropdown course list
	$name = 'theme_herald/mycoursetitle';
	$title = get_string('mycoursetitle','theme_herald');
	$description = get_string('mycoursetitledesc', 'theme_herald');
	$default = 'course';
	$choices = array(
		'course' => get_string('mycourses', 'theme_herald'),
		'lesson' => get_string('mylessons', 'theme_herald'),
		'class' => get_string('myclasses', 'theme_herald'),
		'module' => get_string('mymodules', 'theme_herald'),
		'Unit' => get_string('myunits', 'theme_herald'),
	);
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);
    
    $ADMIN->add('theme_herald', $temp);
    
    
    /* Footer Blocks Settings */
	$temp = new admin_settingpage('theme_herald_footerblocks', get_string('footerblocksheading', 'theme_herald'));
	$temp->add(new admin_setting_heading('theme_herald_footerblocks', get_string('footerblocksheadingsub', 'theme_herald'),
            format_text(get_string('footerblocksdesc' , 'theme_herald'), FORMAT_MARKDOWN)));           
	
	//Enable Footer Blocks.
    $name = 'theme_herald/enablefooterblocks';
    $title = get_string('enablefooterblocks', 'theme_herald');
    $description = get_string('enablefooterblocksdesc', 'theme_herald');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	//Footer Block One.
	$name = 'theme_herald/footerblock1';
    $title = get_string('footerblock1', 'theme_herald');
    $description = get_string('footerblock1desc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //Footer Block Two.
	$name = 'theme_herald/footerblock2';
    $title = get_string('footerblock2', 'theme_herald');
    $description = get_string('footerblock2desc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //Footer Block Three.
	$name = 'theme_herald/footerblock3';
    $title = get_string('footerblock3', 'theme_herald');
    $description = get_string('footerblock3desc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
        
    $ADMIN->add('theme_herald', $temp);
    
    
    /* Frontpage Alerts */
    $temp = new admin_settingpage('theme_herald_alerts', get_string('alertsheading', 'theme_herald'));
	$temp->add(new admin_setting_heading('theme_herald_alerts', get_string('alertsheadingsub', 'theme_herald'),
            format_text(get_string('alertsdesc' , 'theme_herald'), FORMAT_MARKDOWN)));
    
    /* Alert 1 */
    
    // Description for Alert One
    $name = 'theme_herald/alert1info';
    $heading = get_string('alert1', 'theme_herald');
    $information = get_string('alert1desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Enable Alert One
    $name = 'theme_herald/enable1alert';
    $title = get_string('enablealert', 'theme_herald');
    $description = get_string('enablealertdesc', 'theme_herald');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert One Type.
    $name = 'theme_herald/alert1type';
    $title = get_string('alerttype' , 'theme_herald');
    $description = get_string('alerttypedesc', 'theme_herald');
    $alert_info = get_string('alert_info', 'theme_herald');
    $alert_warning = get_string('alert_warning', 'theme_herald');
    $alert_general = get_string('alert_general', 'theme_herald');
    $default = 'info';
    $choices = array('info'=>$alert_info, 'error'=>$alert_warning, 'success'=>$alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert One Title.
    $name = 'theme_herald/alert1title';
    $title = get_string('alerttitle', 'theme_herald');
    $description = get_string('alerttitledesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert One Text.
    $name = 'theme_herald/alert1text';
    $title = get_string('alerttext', 'theme_herald');
    $description = get_string('alerttextdesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Alert 2 */
    
    // Description for Alert Two
    $name = 'theme_herald/alert2info';
    $heading = get_string('alert2', 'theme_herald');
    $information = get_string('alert2desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Enable Alert Two
    $name = 'theme_herald/enable2alert';
    $title = get_string('enablealert', 'theme_herald');
    $description = get_string('enablealertdesc', 'theme_herald');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Two Type.
    $name = 'theme_herald/alert2type';
    $title = get_string('alerttype' , 'theme_herald');
    $description = get_string('alerttypedesc', 'theme_herald');
    $alert_info = get_string('alert_info', 'theme_herald');
    $alert_warning = get_string('alert_warning', 'theme_herald');
    $alert_general = get_string('alert_general', 'theme_herald');
    $default = 'info';
    $choices = array('info'=>$alert_info, 'error'=>$alert_warning, 'success'=>$alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Two Title.
    $name = 'theme_herald/alert2title';
    $title = get_string('alerttitle', 'theme_herald');
    $description = get_string('alerttitledesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Two Text.
    $name = 'theme_herald/alert2text';
    $title = get_string('alerttext', 'theme_herald');
    $description = get_string('alerttextdesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Alert 3 */
    
    // Description for Alert Three.
    $name = 'theme_herald/alert3info';
    $heading = get_string('alert3', 'theme_herald');
    $information = get_string('alert3desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Enable Alert Three.
    $name = 'theme_herald/enable3alert';
    $title = get_string('enablealert', 'theme_herald');
    $description = get_string('enablealertdesc', 'theme_herald');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Three Type.
    $name = 'theme_herald/alert3type';
    $title = get_string('alerttype' , 'theme_herald');
    $description = get_string('alerttypedesc', 'theme_herald');
    $alert_info = get_string('alert_info', 'theme_herald');
    $alert_warning = get_string('alert_warning', 'theme_herald');
    $alert_general = get_string('alert_general', 'theme_herald');
    $default = 'info';
    $choices = array('info'=>$alert_info, 'error'=>$alert_warning, 'success'=>$alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Three Title.
    $name = 'theme_herald/alert3title';
    $title = get_string('alerttitle', 'theme_herald');
    $description = get_string('alerttitledesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Three Text.
    $name = 'theme_herald/alert3text';
    $title = get_string('alerttext', 'theme_herald');
    $description = get_string('alerttextdesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
            
    
    $ADMIN->add('theme_herald', $temp);
 
 
    /* Slideshow Widget Settings */
    $temp = new admin_settingpage('theme_herald_slideshow', get_string('slideshowheading', 'theme_herald'));
    $temp->add(new admin_setting_heading('theme_herald_slideshow', get_string('slideshowheadingsub', 'theme_herald'),
            format_text(get_string('slideshowdesc' , 'theme_herald'), FORMAT_MARKDOWN)));
    
    // Enable Slideshow.    
    $name = 'theme_herald/useslideshow';
    $title = get_string('useslideshow', 'theme_herald');
    $description = get_string('useslideshowdesc', 'theme_herald');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    

    /* Slide 1 */
     
    // Description for Slide One
    $name = 'theme_herald/slide1info';
    $heading = get_string('slide1', 'theme_herald');
    $information = get_string('slideinfodesc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Title.
    $name = 'theme_herald/slide1';
    $title = get_string('slidetitle', 'theme_herald');
    $description = get_string('slidetitledesc', 'theme_herald');
    $default = 'Slide One Headline';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // ImageURL.
    $name = 'theme_herald/slide1image';
    $title = get_string('slideimage', 'theme_herald');
    $description = get_string('slideimagedesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $temp->add($setting);
    
    // SubTitle.
    $name = 'theme_herald/slide1subtitle';
    $title = get_string('slidesubtitle', 'theme_herald');
    $description = get_string('slidesubtitledesc', 'theme_herald');
    $default = 'Slide One Caption Title';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_herald/slide1caption';
    $title = get_string('slidecaption', 'theme_herald');
    $description = get_string('slidecaptiondesc', 'theme_herald');
    $default = 'Slide 1 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada, erat bibendum gravida varius, lectus massa vehicula nibh, et dapibus nisl dui ac neque.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA
    $name = 'theme_herald/slide1cta';
    $title = get_string('slidecta', 'theme_herald');
    $description = get_string('slidectadesc', 'theme_herald');
    $default = 'Button 1 Text';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA URL.
    $name = 'theme_herald/slide1url';
    $title = get_string('slideurl', 'theme_herald');
    $description = get_string('slideurldesc', 'theme_herald');
    $default = '#link1';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /* Slide 2 */
     
    // Description for Slide One
    $name = 'theme_herald/slide2info';
    $heading = get_string('slide2', 'theme_herald');
    $information = get_string('slideinfodesc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Title.
    $name = 'theme_herald/slide2';
    $title = get_string('slidetitle', 'theme_herald');
    $description = get_string('slidetitledesc', 'theme_herald');
    $default = 'Slide Two Headline';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // ImageURL.
    $name = 'theme_herald/slide2image';
    $title = get_string('slideimage', 'theme_herald');
    $description = get_string('slideimagedesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $temp->add($setting);
    
    // SubTitle.
    $name = 'theme_herald/slide2subtitle';
    $title = get_string('slidesubtitle', 'theme_herald');
    $description = get_string('slidesubtitledesc', 'theme_herald');
    $default = 'Slide 2 Caption Title';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_herald/slide2caption';
    $title = get_string('slidecaption', 'theme_herald');
    $description = get_string('slidecaptiondesc', 'theme_herald');
    $default = 'Slide 2 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada, erat bibendum gravida varius, lectus massa vehicula nibh, et dapibus nisl dui ac neque.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA
    $name = 'theme_herald/slide2cta';
    $title = get_string('slidecta', 'theme_herald');
    $description = get_string('slidectadesc', 'theme_herald');
    $default = 'Button 2 Text';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA URL.
    $name = 'theme_herald/slide2url';
    $title = get_string('slideurl', 'theme_herald');
    $description = get_string('slideurldesc', 'theme_herald');
    $default = '#link2';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Slide 3 */
     
    // Description for Slide One
    $name = 'theme_herald/slide3info';
    $heading = get_string('slide3', 'theme_herald');
    $information = get_string('slideinfodesc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Title.
    $name = 'theme_herald/slide3';
    $title = get_string('slidetitle', 'theme_herald');
    $description = get_string('slidetitledesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // ImageURL.
    $name = 'theme_herald/slide3image';
    $title = get_string('slideimage', 'theme_herald');
    $description = get_string('slideimagedesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $temp->add($setting);
    
    // SubTitle.
    $name = 'theme_herald/slide3subtitle';
    $title = get_string('slidesubtitle', 'theme_herald');
    $description = get_string('slidesubtitledesc', 'theme_herald');
    $default = 'Slide 3 Caption Title';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_herald/slide3caption';
    $title = get_string('slidecaption', 'theme_herald');
    $description = get_string('slidecaptiondesc', 'theme_herald');
    $default = 'Slide 3 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada, erat bibendum gravida varius, lectus massa vehicula nibh, et dapibus nisl dui ac neque.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA
    $name = 'theme_herald/slide3cta';
    $title = get_string('slidecta', 'theme_herald');
    $description = get_string('slidectadesc', 'theme_herald');
    $default = 'Button 3 Text';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA URL.
    $name = 'theme_herald/slide3url';
    $title = get_string('slideurl', 'theme_herald');
    $description = get_string('slideurldesc', 'theme_herald');
    $default = '#link3';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Slide 4 */
     
    // Description for Slide One
    $name = 'theme_herald/slide4info';
    $heading = get_string('slide4', 'theme_herald');
    $information = get_string('slideinfodesc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Title.
    $name = 'theme_herald/slide4';
    $title = get_string('slidetitle', 'theme_herald');
    $description = get_string('slidetitledesc', 'theme_herald');
    $default = 'Slide Four Headline';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // ImageURL.
    $name = 'theme_herald/slide4image';
    $title = get_string('slideimage', 'theme_herald');
    $description = get_string('slideimagedesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $temp->add($setting);
    
    // SubTitle.
    $name = 'theme_herald/slide4subtitle';
    $title = get_string('slidesubtitle', 'theme_herald');
    $description = get_string('slidesubtitledesc', 'theme_herald');
    $default = 'Slide 4 Caption Title';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_herald/slide4caption';
    $title = get_string('slidecaption', 'theme_herald');
    $description = get_string('slidecaptiondesc', 'theme_herald');
    $default = 'Slide 4 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada, erat bibendum gravida varius, lectus massa vehicula nibh, et dapibus nisl dui ac neque.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // 
    $name = 'theme_herald/slide4cta';
    $title = get_string('slidecta', 'theme_herald');
    $description = get_string('slidectadesc', 'theme_herald');
    $default = 'Button 4 Text';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA URL.
    $name = 'theme_herald/slide4url';
    $title = get_string('slideurl', 'theme_herald');
    $description = get_string('slideurldesc', 'theme_herald');
    $default = '#link4';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_herald', $temp);
    
    
    /* Frontpage featured blocks */	
	$temp = new admin_settingpage('theme_herald_homeblocks', get_string('homeblocksheading', 'theme_herald'));
	$temp->add(new admin_setting_heading('theme_herald_homeblocks', get_string('homeblocksheadingsub', 'theme_herald'),
            format_text(get_string('homeblocksdesc' , 'theme_herald'), FORMAT_MARKDOWN)));
            
	
	//Enable Home Blocks.
    $name = 'theme_herald/usehomeblocks';
    $title = get_string('usehomeblocks', 'theme_herald');
    $description = get_string('usehomeblocksdesc', 'theme_herald');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Featured Section Title
    $name = 'theme_herald/featuredtitle';
    $title = get_string('featuredtitle', 'theme_herald');
    $description = get_string('featuredtitledesc', 'theme_herald');
    $default = 'Featured Courses';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Section Lead Text
    $name = 'theme_herald/featuredleadtext';
    $title = get_string('featuredleadtext', 'theme_herald');
    $description = get_string('featuredleadtextdesc', 'theme_herald');
    $default = 'View all courses';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Section Lead URL
    $name = 'theme_herald/featuredleadurl';
    $title = get_string('featuredleadurl', 'theme_herald');
    $description = get_string('featuredleadurldesc', 'theme_herald');
    $default = 'course';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
	
	/* Home Block 1 */	
	
    $name = 'theme_herald/homeblock1info';
    $heading = get_string('homeblock1info', 'theme_herald');
    $information = get_string('homeblock1desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
	
	$name = 'theme_herald/homeblock1';
    $title = get_string('homeblocktitle', 'theme_herald');
    $description = get_string('homeblocktitledesc', 'theme_herald');
    $default = 'Course One Title';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock1image';
    $title = get_string('homeblockimage', 'theme_herald');
    $description = get_string('homeblockimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock1content';
    $title = get_string('homeblockcontent', 'theme_herald');
    $description = get_string('homeblockcontentdesc', 'theme_herald');
    $default = 'Course 1 content goes here Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    
    $name = 'theme_herald/homeblock1url';
    $title = get_string('homeblockurl', 'theme_herald');
    $description = get_string('homeblockbuttonurldesc', 'theme_herald');
    $default = '#link1';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Home Block 2 */    
    $name = 'theme_herald/homeblock2info';
    $heading = get_string('homeblock2info', 'theme_herald');
    $information = get_string('homeblock2desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);   
    
	$name = 'theme_herald/homeblock2';
    $title = get_string('homeblocktitle', 'theme_herald');
    $description = get_string('homeblocktitledesc', 'theme_herald');
    $default = 'Course Two Title';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock2image';
    $title = get_string('homeblockimage', 'theme_herald');
    $description = get_string('homeblockimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock2content';
    $title = get_string('homeblockcontent', 'theme_herald');
    $description = get_string('homeblockcontentdesc', 'theme_herald');
    $default = 'Course 2 content goes here Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock2url';
    $title = get_string('homeblockurl', 'theme_herald');
    $description = get_string('homeblockbuttonurldesc', 'theme_herald');
    $default = '#link2';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Home Block 3 */        
    $name = 'theme_herald/homeblock3info';
    $heading = get_string('homeblock3info', 'theme_herald');
    $information = get_string('homeblock3desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
	$name = 'theme_herald/homeblock3';
    $title = get_string('homeblocktitle', 'theme_herald');
    $description = get_string('homeblocktitledesc', 'theme_herald');
    $default = 'Course Three Title';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock3image';
    $title = get_string('homeblockimage', 'theme_herald');
    $description = get_string('homeblockimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock3content';
    $title = get_string('homeblockcontent', 'theme_herald');
    $description = get_string('homeblockcontentdesc', 'theme_herald');
    $default = 'Course 3 content goes here Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock3url';
    $title = get_string('homeblockurl', 'theme_herald');
    $description = get_string('homeblockbuttonurldesc', 'theme_herald');
    $default = '#link3';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Home Block 4 */    
    $name = 'theme_herald/homeblock4info';
    $heading = get_string('homeblock4info', 'theme_herald');
    $information = get_string('homeblock4desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
	$name = 'theme_herald/homeblock4';
    $title = get_string('homeblocktitle', 'theme_herald');
    $description = get_string('homeblocktitledesc', 'theme_herald');
    $default = 'Course Four Title';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock4image';
    $title = get_string('homeblockimage', 'theme_herald');
    $description = get_string('homeblockimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock4content';
    $title = get_string('homeblockcontent', 'theme_herald');
    $description = get_string('homeblockcontentdesc', 'theme_herald');
    $default = 'Course 4 content goes here Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock4url';
    $title = get_string('homeblockurl', 'theme_herald');
    $description = get_string('homeblockbuttonurldesc', 'theme_herald');
    $default = '#link4';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    /* Home Block 5 */    
    $name = 'theme_herald/homeblock5info';
    $heading = get_string('homeblock5info', 'theme_herald');
    $information = get_string('homeblock5desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
	$name = 'theme_herald/homeblock5';
    $title = get_string('homeblocktitle', 'theme_herald');
    $description = get_string('homeblocktitledesc', 'theme_herald');
    $default = 'Course Five Title';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock5image';
    $title = get_string('homeblockimage', 'theme_herald');
    $description = get_string('homeblockimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock5image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock5content';
    $title = get_string('homeblockcontent', 'theme_herald');
    $description = get_string('homeblockcontentdesc', 'theme_herald');
    $default = 'Course 5 content goes here Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock5url';
    $title = get_string('homeblockurl', 'theme_herald');
    $description = get_string('homeblockbuttonurldesc', 'theme_herald');
    $default = '#link5';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);    
    
    /* Home Block 6 */   
    $name = 'theme_herald/homeblock6info';
    $heading = get_string('homeblock6info', 'theme_herald');
    $information = get_string('homeblock6desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
     
	$name = 'theme_herald/homeblock6';
    $title = get_string('homeblocktitle', 'theme_herald');
    $description = get_string('homeblocktitledesc', 'theme_herald');
    $default = 'Course Six Title';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock6image';
    $title = get_string('homeblockimage', 'theme_herald');
    $description = get_string('homeblockimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock6image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock6content';
    $title = get_string('homeblockcontent', 'theme_herald');
    $description = get_string('homeblockcontentdesc', 'theme_herald');
    $default = 'Course 6 content goes here Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock6url';
    $title = get_string('homeblockurl', 'theme_herald');
    $description = get_string('homeblockbuttonurldesc', 'theme_herald');
    $default = '#link6';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);    
    
    /* Home Block 7 */   
    $name = 'theme_herald/homeblock7info';
    $heading = get_string('homeblock7info', 'theme_herald');
    $information = get_string('homeblock7desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
     
	$name = 'theme_herald/homeblock7';
    $title = get_string('homeblocktitle', 'theme_herald');
    $description = get_string('homeblocktitledesc', 'theme_herald');
    $default = 'Course Seven Title';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock7image';
    $title = get_string('homeblockimage', 'theme_herald');
    $description = get_string('homeblockimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock7image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock7content';
    $title = get_string('homeblockcontent', 'theme_herald');
    $description = get_string('homeblockcontentdesc', 'theme_herald');
    $default = 'Course 7 content goes here Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock7url';
    $title = get_string('homeblockurl', 'theme_herald');
    $description = get_string('homeblockbuttonurldesc', 'theme_herald');
    $default = '#link7';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);    
    
    /* Home Block 8 */ 
    $name = 'theme_herald/homeblock8info';
    $heading = get_string('homeblock8info', 'theme_herald');
    $information = get_string('homeblock8desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
       
	$name = 'theme_herald/homeblock8';
    $title = get_string('homeblocktitle', 'theme_herald');
    $description = get_string('homeblocktitledesc', 'theme_herald');
    $default = 'Course Eight Title';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock8image';
    $title = get_string('homeblockimage', 'theme_herald');
    $description = get_string('homeblockimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock8image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock8content';
    $title = get_string('homeblockcontent', 'theme_herald');
    $description = get_string('homeblockcontentdesc', 'theme_herald');
    $default = 'Course 8 content goes here Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_herald/homeblock8url';
    $title = get_string('homeblockurl', 'theme_herald');
    $description = get_string('homeblockbuttonurldesc', 'theme_herald');
    $default = '#link8';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);    
    
    $ADMIN->add('theme_herald', $temp);
    
    /* Frontpage Benefits */
    $temp = new admin_settingpage('theme_herald_benefits', get_string('benefitsheading', 'theme_herald'));
	$temp->add(new admin_setting_heading('theme_herald_benefits', get_string('benefitssub', 'theme_herald'),
            format_text(get_string('benefitsdesc' , 'theme_herald'), FORMAT_MARKDOWN)));
    
    // Enable Benefits Section
    $name = 'theme_herald/usebenefits';
    $title = get_string('usebenefits', 'theme_herald');
    $description = get_string('usebenefitsdesc', 'theme_herald');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Benefits Section Title
    $name = 'theme_herald/benefitsectiontitle';
    $title = get_string('benefitsectiontitle', 'theme_herald');
    $description = get_string('benefitsectiontitledesc', 'theme_herald');
    $default = 'Why Join Us';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    // Benefit 1
    
    // Description
    $name = 'theme_herald/benefit1info';
    $heading = get_string('benefit1info', 'theme_herald');
    $information = get_string('benefit1desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Icon
    $name = 'theme_herald/benefit1icon';
    $title = get_string('benefit1icon', 'theme_herald');
    $description = get_string('benefit1icondesc', 'theme_herald');    
    $default = 'fa-laptop';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Title
    $name = 'theme_herald/benefit1title';
    $title = get_string('benefit1title', 'theme_herald');
    $description = get_string('benefit1titledesc', 'theme_herald');
    $default = 'Benefit One';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Content
    $name = 'theme_herald/benefit1content';
    $title = get_string('benefit1copy', 'theme_herald');
    $description = get_string('benefit1contentdesc', 'theme_herald');
    $default = 'Benefit 1 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat libero placerat magna venenatis, eu iaculis neque molestie.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Benefit 2
    
    // Description
    $name = 'theme_herald/benefit2info';
    $heading = get_string('benefit2info', 'theme_herald');
    $information = get_string('benefit2desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Icon
    $name = 'theme_herald/benefit2icon';
    $title = get_string('benefit2icon', 'theme_herald');
    $description = get_string('benefit2icondesc', 'theme_herald');
    $default = 'fa-lightbulb-o';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Title
    $name = 'theme_herald/benefit2title';
    $title = get_string('benefit2title', 'theme_herald');
    $description = get_string('benefit2titledesc', 'theme_herald');
    $default = 'Benefit Two';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Content
    $name = 'theme_herald/benefit2content';
    $title = get_string('benefit2copy', 'theme_herald');
    $description = get_string('benefit2contentdesc', 'theme_herald');
    $default = 'Benefit 2 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat libero placerat magna venenatis, eu iaculis neque molestie.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Benefit 3
    
    // Description
    $name = 'theme_herald/benefit3info';
    $heading = get_string('benefit3info', 'theme_herald');
    $information = get_string('benefit3desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Icon
    $name = 'theme_herald/benefit3icon';
    $title = get_string('benefit3icon', 'theme_herald');
    $description = get_string('benefit3icondesc', 'theme_herald');
    $default = 'fa-unlock';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Title
    $name = 'theme_herald/benefit3title';
    $title = get_string('benefit3title', 'theme_herald');
    $description = get_string('benefit3titledesc', 'theme_herald');
    $default = 'Benefit Three';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Content
    $name = 'theme_herald/benefit3content';
    $title = get_string('benefit3copy', 'theme_herald');
    $description = get_string('benefit3contentdesc', 'theme_herald');
    $default = 'Benefit 3 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat libero placerat magna venenatis, eu iaculis neque molestie.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Benefit 4
    
    // Description
    $name = 'theme_herald/benefit4info';
    $heading = get_string('benefit4info', 'theme_herald');
    $information = get_string('benefit4desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Icon
    $name = 'theme_herald/benefit4icon';
    $title = get_string('benefit4icon', 'theme_herald');
    $description = get_string('benefit4icondesc', 'theme_herald');
    $default = 'fa-support';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Title
    $name = 'theme_herald/benefit4title';
    $title = get_string('benefit4title', 'theme_herald');
    $description = get_string('benefit4titledesc', 'theme_herald');
    $default = 'Benefit Four';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Content
    $name = 'theme_herald/benefit4content';
    $title = get_string('benefit4copy', 'theme_herald');
    $description = get_string('benefit4contentdesc', 'theme_herald');
    $default = 'Benefit 4 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat libero placerat magna venenatis, eu iaculis neque molestie.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Benefit 5
    
    // Description
    $name = 'theme_herald/benefit5info';
    $heading = get_string('benefit5info', 'theme_herald');
    $information = get_string('benefit5desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Icon
    $name = 'theme_herald/benefit5icon';
    $title = get_string('benefit5icon', 'theme_herald');
    $description = get_string('benefit5icondesc', 'theme_herald');
    $default = 'fa-group';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Title
    $name = 'theme_herald/benefit5title';
    $title = get_string('benefit5title', 'theme_herald');
    $description = get_string('benefit5titledesc', 'theme_herald');
    $default = 'Benefit Five';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Content
    $name = 'theme_herald/benefit5content';
    $title = get_string('benefit5copy', 'theme_herald');
    $description = get_string('benefit5contentdesc', 'theme_herald');
    $default = 'Benefit 5 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat libero placerat magna venenatis, eu iaculis neque molestie.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Benefit 6
    
    // Description
    $name = 'theme_herald/benefit6info';
    $heading = get_string('benefit6info', 'theme_herald');
    $information = get_string('benefit6desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Icon
    $name = 'theme_herald/benefit6icon';
    $title = get_string('benefit6icon', 'theme_herald');
    $description = get_string('benefit6icondesc', 'theme_herald');
    $default = 'fa-mobile';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Title
    $name = 'theme_herald/benefit6title';
    $title = get_string('benefit6title', 'theme_herald');
    $description = get_string('benefit6titledesc', 'theme_herald');
    $default = 'Benefit Six';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Content
    $name = 'theme_herald/benefit6content';
    $title = get_string('benefit6copy', 'theme_herald');
    $description = get_string('benefit6contentdesc', 'theme_herald');
    $default = 'Benefit 6 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat libero placerat magna venenatis, eu iaculis neque molestie.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);   
    
    $ADMIN->add('theme_herald', $temp);
    
    /* Frontpage Testimonials */
    
    $temp = new admin_settingpage('theme_herald_testimonials', get_string('testimonialsheading', 'theme_herald'));
	$temp->add(new admin_setting_heading('theme_herald_testimonials', get_string('testimonialssub', 'theme_herald'),
            format_text(get_string('testimonialsdesc' , 'theme_herald'), FORMAT_MARKDOWN)));
    
    // Enable Testimonails section
    $name = 'theme_herald/usetestimonials';
    $title = get_string('usetestimonials', 'theme_herald');
    $description = get_string('usetestimonialsdesc', 'theme_herald');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Section Title
    $name = 'theme_herald/testimonialsectiontitle';
    $title = get_string('testimonialsectiontitle', 'theme_herald');
    $description = get_string('testimonialsectiontitledesc', 'theme_herald');
    $default = 'What are people saying';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    /* Testimonial 1 */
    
    // Description for Testimonial One
    $name = 'theme_herald/testimonial1info';
    $heading = get_string('testimonial1', 'theme_herald');
    $information = get_string('testimonial1desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Testimonial Image 
    $name = 'theme_herald/testimonial1image';
    $title = get_string('testimonialimage', 'theme_herald');
    $description = get_string('testimonialimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_herald/testimonial1name';
    $title = get_string('testimonialname', 'theme_herald');
    $description = get_string('testimonialnamedesc', 'theme_herald');
    $default = 'User One Name';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Title
    $name = 'theme_herald/testimonial1title';
    $title = get_string('testimonialtitle', 'theme_herald');
    $description = get_string('testimonialtitledesc', 'theme_herald');
    $default = 'User One Title';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Content 
    $name = 'theme_herald/testimonial1content';
    $title = get_string('testimonialcontent', 'theme_herald');
    $description = get_string('testimonialcontentdesc', 'theme_herald');
    $default = 'User 1 testimonial goes here. Pellentesque porttitor magna quis elementum lobortis. Nunc vitae massa vitae elementum lobortis.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Testimonial 2 */
    
    // Description for Testimonial Two
    $name = 'theme_herald/testimonial2info';
    $heading = get_string('testimonial2', 'theme_herald');
    $information = get_string('testimonial2desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Testimonial Image 
    $name = 'theme_herald/testimonial2image';
    $title = get_string('testimonialimage', 'theme_herald');
    $description = get_string('testimonialimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_herald/testimonial2name';
    $title = get_string('testimonialname', 'theme_herald');
    $description = get_string('testimonialnamedesc', 'theme_herald');
    $default = 'User Two Name';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Title
    $name = 'theme_herald/testimonial2title';
    $title = get_string('testimonialtitle', 'theme_herald');
    $description = get_string('testimonialtitledesc', 'theme_herald');
    $default = 'User Two Title';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Content 
    $name = 'theme_herald/testimonial2content';
    $title = get_string('testimonialcontent', 'theme_herald');
    $description = get_string('testimonialcontentdesc', 'theme_herald');
    $default = 'User 2 testimonial goes here. Pellentesque porttitor magna quis elementum lobortis. Nunc vitae massa vitae elementum lobortis.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Testimonial 3 */
    
    // Description for Testimonial Three
    $name = 'theme_herald/testimonial3info';
    $heading = get_string('testimonial3', 'theme_herald');
    $information = get_string('testimonial3desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Testimonial Image 
    $name = 'theme_herald/testimonial3image';
    $title = get_string('testimonialimage', 'theme_herald');
    $description = get_string('testimonialimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_herald/testimonial3name';
    $title = get_string('testimonialname', 'theme_herald');
    $description = get_string('testimonialnamedesc', 'theme_herald');
    $default = 'User Three Name';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Title
    $name = 'theme_herald/testimonial3title';
    $title = get_string('testimonialtitle', 'theme_herald');
    $description = get_string('testimonialtitledesc', 'theme_herald');
    $default = 'User Three Title';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Content 
    $name = 'theme_herald/testimonial3content';
    $title = get_string('testimonialcontent', 'theme_herald');
    $description = get_string('testimonialcontentdesc', 'theme_herald');
    $default = 'User 3 testimonial goes here. Pellentesque porttitor magna quis elementum lobortis. Nunc vitae massa vitae elementum lobortis.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Testimonial 4 */
    
    // Description for Testimonial Four
    $name = 'theme_herald/testimonial4info';
    $heading = get_string('testimonial4', 'theme_herald');
    $information = get_string('testimonial4desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Testimonial Image 
    $name = 'theme_herald/testimonial4image';
    $title = get_string('testimonialimage', 'theme_herald');
    $description = get_string('testimonialimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_herald/testimonial4name';
    $title = get_string('testimonialname', 'theme_herald');
    $description = get_string('testimonialnamedesc', 'theme_herald');
    $default = 'User Four Name';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Title
    $name = 'theme_herald/testimonial4title';
    $title = get_string('testimonialtitle', 'theme_herald');
    $description = get_string('testimonialtitledesc', 'theme_herald');
    $default = 'User Four Title';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Content 
    $name = 'theme_herald/testimonial4content';
    $title = get_string('testimonialcontent', 'theme_herald');
    $description = get_string('testimonialcontentdesc', 'theme_herald');
    $default = 'User 4 testimonial goes here. Pellentesque porttitor magna quis elementum lobortis. Nunc vitae massa vitae elementum lobortis.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    /* Testimonial 5 */
    
    // Description for Testimonial Four
    $name = 'theme_herald/testimonial5info';
    $heading = get_string('testimonial5', 'theme_herald');
    $information = get_string('testimonial5desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Testimonial Image 
    $name = 'theme_herald/testimonial5image';
    $title = get_string('testimonialimage', 'theme_herald');
    $description = get_string('testimonialimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial5image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_herald/testimonial5name';
    $title = get_string('testimonialname', 'theme_herald');
    $description = get_string('testimonialnamedesc', 'theme_herald');
    $default = 'User Five Name';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Title
    $name = 'theme_herald/testimonial5title';
    $title = get_string('testimonialtitle', 'theme_herald');
    $description = get_string('testimonialtitledesc', 'theme_herald');
    $default = 'User Five Title';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Content 
    $name = 'theme_herald/testimonial5content';
    $title = get_string('testimonialcontent', 'theme_herald');
    $description = get_string('testimonialcontentdesc', 'theme_herald');
    $default = 'User 5 testimonial goes here. Pellentesque porttitor magna quis elementum lobortis. Nunc vitae massa vitae elementum lobortis.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Testimonial 6 */
    
    // Description for Testimonial Four
    $name = 'theme_herald/testimonial6info';
    $heading = get_string('testimonial6', 'theme_herald');
    $information = get_string('testimonial6desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Testimonial Image 
    $name = 'theme_herald/testimonial6image';
    $title = get_string('testimonialimage', 'theme_herald');
    $description = get_string('testimonialimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial6image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_herald/testimonial6name';
    $title = get_string('testimonialname', 'theme_herald');
    $description = get_string('testimonialnamedesc', 'theme_herald');
    $default = 'User Six Name';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Title
    $name = 'theme_herald/testimonial6title';
    $title = get_string('testimonialtitle', 'theme_herald');
    $description = get_string('testimonialtitledesc', 'theme_herald');
    $default = 'User Six Title';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Content 
    $name = 'theme_herald/testimonial6content';
    $title = get_string('testimonialcontent', 'theme_herald');
    $description = get_string('testimonialcontentdesc', 'theme_herald');
    $default = 'User 6 testimonial goes here. Pellentesque porttitor magna quis elementum lobortis. Nunc vitae massa vitae elementum lobortis.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $ADMIN->add('theme_herald', $temp);
    
    
    /* Frontpage Video Section */
    
    $temp = new admin_settingpage('theme_herald_video', get_string('videoheading', 'theme_herald'));
	$temp->add(new admin_setting_heading('theme_herald_video', get_string('videosub', 'theme_herald'),
            format_text(get_string('videodesc' , 'theme_herald'), FORMAT_MARKDOWN)));
    
    // Enable video Section
    $name = 'theme_herald/usevideosection';
    $title = get_string('usevideosection', 'theme_herald');
    $description = get_string('usevideosectiondesc', 'theme_herald');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Frontpage Video Section Title
    $name = 'theme_herald/videosectiontitle';
    $title = get_string('videosectiontitle', 'theme_herald');
    $description = get_string('videosectiontitledesc', 'theme_herald');
    $default = 'Our Story';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Frontpage Video content
    $name = 'theme_herald/videocontent';
    $title = get_string('videocontent', 'theme_herald');
    $description = get_string('videocontentdesc', 'theme_herald');
    $default = 'Section description goes here. Vestibulum lectus lectus, interdum faucibus ultricies non, hendrerit in nunc. Vestibulum ultricies sem vitae aliquam aliquam. Mauris congue mattis diam, ac iaculis ante efficitur eget. Suspendisse vehicula enim id lorem convallis, ac facilisis diam tincidunt. Morbi eget tincidunt purus. Praesent ornare arcu diam, nec imperdiet justo blandit non. Cras mi odio, rutrum non ultrices viverra, tincidunt nec augue.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    // Frontpage Youtube Video ID
    $name = 'theme_herald/videoid';
    $title = get_string('videoid', 'theme_herald');
    $description = get_string('videoiddesc', 'theme_herald');
    $default = 'KnZfe1qpaKM';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
        
    $ADMIN->add('theme_herald', $temp);
    
    
    /* Frontpage logos */
    $temp = new admin_settingpage('theme_herald_logos', get_string('logosheading', 'theme_herald'));
	$temp->add(new admin_setting_heading('theme_herald_logos', get_string('logossub', 'theme_herald'),
            format_text(get_string('logosdesc' , 'theme_herald'), FORMAT_MARKDOWN)));
    
    // Enable logos Section
    $name = 'theme_herald/uselogos';
    $title = get_string('uselogos', 'theme_herald');
    $description = get_string('uselogosdesc', 'theme_herald');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //logo Section Title
    $name = 'theme_herald/logosectiontitle';
    $title = get_string('logosectiontitle', 'theme_herald');
    $description = get_string('logosectiontitledesc', 'theme_herald');
    $default = 'Our Partners';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Logo 1 */
    
    // Description for logo One
    $name = 'theme_herald/logo1info';
    $heading = get_string('logo1', 'theme_herald');
    $information = get_string('logo1desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    
    // Logo Image 
    $name = 'theme_herald/logo1image';
    $title = get_string('logoimage', 'theme_herald');
    $description = get_string('logoimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_herald/logo1alttext';
    $title = get_string('logoalttext', 'theme_herald');
    $description = get_string('logoalttextdesc', 'theme_herald');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    

    // Logo URL
    $name = 'theme_herald/logo1url';
    $title = get_string('logourl', 'theme_herald');
    $description = get_string('logourldesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    
    /* Logo 2 */
    
    // Description for logo Two
    $name = 'theme_herald/logo2info';
    $heading = get_string('logo2', 'theme_herald');
    $information = get_string('logo2desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Logo Image 
    $name = 'theme_herald/logo2image';
    $title = get_string('logoimage', 'theme_herald');
    $description = get_string('logoimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_herald/logo2alttext';
    $title = get_string('logoalttext', 'theme_herald');
    $description = get_string('logoalttextdesc', 'theme_herald');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Logo URL
    $name = 'theme_herald/logo2url';
    $title = get_string('logourl', 'theme_herald');
    $description = get_string('logourldesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    /* Logo 3 */
    
    // Description for logo Three
    $name = 'theme_herald/logo3info';
    $heading = get_string('logo3', 'theme_herald');
    $information = get_string('logo3desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Logo Image 
    $name = 'theme_herald/logo3image';
    $title = get_string('logoimage', 'theme_herald');
    $description = get_string('logoimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_herald/logo3alttext';
    $title = get_string('logoalttext', 'theme_herald');
    $description = get_string('logoalttextdesc', 'theme_herald');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Logo URL
    $name = 'theme_herald/logo3url';
    $title = get_string('logourl', 'theme_herald');
    $description = get_string('logourldesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Logo 4 */
    
    // Description for logo Four
    $name = 'theme_herald/logo4info';
    $heading = get_string('logo4', 'theme_herald');
    $information = get_string('logo4desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Logo Image 
    $name = 'theme_herald/logo4image';
    $title = get_string('logoimage', 'theme_herald');
    $description = get_string('logoimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_herald/logo4alttext';
    $title = get_string('logoalttext', 'theme_herald');
    $description = get_string('logoalttextdesc', 'theme_herald');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Logo URL
    $name = 'theme_herald/logo4url';
    $title = get_string('logourl', 'theme_herald');
    $description = get_string('logourldesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Logo 5 */
    
    // Description for logo Five
    $name = 'theme_herald/logo5info';
    $heading = get_string('logo5', 'theme_herald');
    $information = get_string('logo5desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Logo Image 
    $name = 'theme_herald/logo5image';
    $title = get_string('logoimage', 'theme_herald');
    $description = get_string('logoimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo5image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_herald/logo5alttext';
    $title = get_string('logoalttext', 'theme_herald');
    $description = get_string('logoalttextdesc', 'theme_herald');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Logo URL
    $name = 'theme_herald/logo5url';
    $title = get_string('logourl', 'theme_herald');
    $description = get_string('logourldesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Logo 6 */
    
    // Description for logo Six
    $name = 'theme_herald/logo6info';
    $heading = get_string('logo6', 'theme_herald');
    $information = get_string('logo6desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Logo Image 
    $name = 'theme_herald/logo6image';
    $title = get_string('logoimage', 'theme_herald');
    $description = get_string('logoimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo6image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_herald/logo6alttext';
    $title = get_string('logoalttext', 'theme_herald');
    $description = get_string('logoalttextdesc', 'theme_herald');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Logo URL
    $name = 'theme_herald/logo6url';
    $title = get_string('logourl', 'theme_herald');
    $description = get_string('logourldesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Logo 7 */
    
    // Description for logo Six
    $name = 'theme_herald/logo7info';
    $heading = get_string('logo7', 'theme_herald');
    $information = get_string('logo7desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Logo Image 
    $name = 'theme_herald/logo7image';
    $title = get_string('logoimage', 'theme_herald');
    $description = get_string('logoimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo7image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_herald/logo7alttext';
    $title = get_string('logoalttext', 'theme_herald');
    $description = get_string('logoalttextdesc', 'theme_herald');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Logo URL
    $name = 'theme_herald/logo7url';
    $title = get_string('logourl', 'theme_herald');
    $description = get_string('logourldesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Logo 8 */
    
    // Description for logo Six
    $name = 'theme_herald/logo8info';
    $heading = get_string('logo8', 'theme_herald');
    $information = get_string('logo8desc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Logo Image 
    $name = 'theme_herald/logo8image';
    $title = get_string('logoimage', 'theme_herald');
    $description = get_string('logoimagedesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo8image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_herald/logo8alttext';
    $title = get_string('logoalttext', 'theme_herald');
    $description = get_string('logoalttextdesc', 'theme_herald');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Logo URL
    $name = 'theme_herald/logo8url';
    $title = get_string('logourl', 'theme_herald');
    $description = get_string('logourldesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
       
    $ADMIN->add('theme_herald', $temp);

	/* Social Media Settings */
	$temp = new admin_settingpage('theme_herald_social', get_string('socialheading', 'theme_herald'));
	$temp->add(new admin_setting_heading('theme_herald_social', get_string('socialheadingsub', 'theme_herald'),
            format_text(get_string('socialdesc' , 'theme_herald'), FORMAT_MARKDOWN)));
            
    // Enable social media 
    $name = 'theme_herald/enablesocial';
    $title = get_string('enablesocial', 'theme_herald');
    $description = get_string('enablesocialdesc', 'theme_herald');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Social Media Section Title
    $name = 'theme_herald/socialsectiontitle';
    $title = get_string('socialsectiontitle', 'theme_herald');
    $description = get_string('socialsectiontitledesc', 'theme_herald');
    $default = 'Get Connected';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
            
    // Twitter url setting.
    $name = 'theme_herald/twitter';
    $title = get_string('twitter', 'theme_herald');
    $description = get_string('twitterdesc', 'theme_herald');
    $default = '#twitter-link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Facebook url setting.
    $name = 'theme_herald/facebook';
    $title = get_string('facebook', 'theme_herald');
    $description = get_string('facebookdesc', 'theme_herald');
    $default = '#facebook-link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // YouTube url setting.
    $name = 'theme_herald/youtube';
    $title = get_string('youtube', 'theme_herald');
    $description = get_string('youtubedesc', 'theme_herald');
    $default = '#youtube-link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // LinkedIn url setting.
    $name = 'theme_herald/linkedin';
    $title = get_string('linkedin', 'theme_herald');
    $description = get_string('linkedindesc', 'theme_herald');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Flickr url setting.
    $name = 'theme_herald/flickr';
    $title = get_string('flickr', 'theme_herald');
    $description = get_string('flickrdesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Google+ url setting.
    $name = 'theme_herald/googleplus';
    $title = get_string('googleplus', 'theme_herald');
    $description = get_string('googleplusdesc', 'theme_herald');
    $default = '#google-link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Pinterest url setting.
    $name = 'theme_herald/pinterest';
    $title = get_string('pinterest', 'theme_herald');
    $description = get_string('pinterestdesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Instagram url setting.
    $name = 'theme_herald/instagram';
    $title = get_string('instagram', 'theme_herald');
    $description = get_string('instagramdesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Skype account setting.
    $name = 'theme_herald/skype';
    $title = get_string('skype', 'theme_herald');
    $description = get_string('skypedesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // RSS url setting.
    $name = 'theme_herald/rss';
    $title = get_string('rss', 'theme_herald');
    $description = get_string('rssdesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    //Description for iOS Icons
    $name = 'theme_herald/iosiconinfo';
    $heading = get_string('iosicon', 'theme_herald');
    $information = get_string('iosicondesc', 'theme_herald');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // iPhone Icon.
    $name = 'theme_herald/iphoneicon';
    $title = get_string('iphoneicon', 'theme_herald');
    $description = get_string('iphoneicondesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'iphoneicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // iPhone Retina Icon.
    $name = 'theme_herald/iphoneretinaicon';
    $title = get_string('iphoneretinaicon', 'theme_herald');
    $description = get_string('iphoneretinaicondesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'iphoneretinaicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // iPad Icon.
    $name = 'theme_herald/ipadicon';
    $title = get_string('ipadicon', 'theme_herald');
    $description = get_string('ipadicondesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'ipadicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // iPad Retina Icon.
    $name = 'theme_herald/ipadretinaicon';
    $title = get_string('ipadretinaicon', 'theme_herald');
    $description = get_string('ipadretinaicondesc', 'theme_herald');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'ipadretinaicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $ADMIN->add('theme_herald', $temp);
       
    
    /* Analytics Settings */
    $temp = new admin_settingpage('theme_herald_analytics', get_string('analyticsheading', 'theme_herald'));
	$temp->add(new admin_setting_heading('theme_herald_analytics', get_string('analyticsheadingsub', 'theme_herald'),
            format_text(get_string('analyticsdesc' , 'theme_herald'), FORMAT_MARKDOWN)));
    
    // Enable Analytics
    $name = 'theme_herald/useanalytics';
    $title = get_string('useanalytics', 'theme_herald');
    $description = get_string('useanalyticsdesc', 'theme_herald');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Google Analytics ID
    $name = 'theme_herald/analyticsid';
    $title = get_string('analyticsid', 'theme_herald');
    $description = get_string('analyticsiddesc', 'theme_herald');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
        
    $ADMIN->add('theme_herald', $temp);
