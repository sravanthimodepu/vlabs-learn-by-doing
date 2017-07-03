<?php
include('SettingsRenderer.php');


class SagaSettings extends SettingsRenderer{
	public function __construct(){
        $this->save();
		$this->renderSettings();
	}

    public function renderSettings(){
        $courses = Array();

        $get_courses = get_courses();
        foreach ($get_courses as $key => $value) {
            if(strtolower($value->shortname) != "moodle")
                $courses[$value->id] = $value->shortname;
        }
        if(is_array($courses) && count($courses)>0) asort($courses);

        $patterns = array(
            'patterns/thumb1.png'  => 'bg1.png',
            'patterns/thumb2.png'  => 'bg2.png',
            'patterns/thumb3.png'  => 'bg3.png',
            'patterns/thumb4.png'  => 'bg4.png',
            'patterns/thumb5.jpg'  => 'bg5.jpg',
            'patterns/thumb6.png'  => 'bg6.png',
            'patterns/thumb7.png'  => 'bg7.png',
            'patterns/thumb8.png'  => 'bg8.png',
            'patterns/thumb9.png'  => 'bg9.png',
            'patterns/thumb10.png' => 'bg10.png',
            'patterns/thumb11.png' => 'bg11.png',
            'patterns/thumb12.png' => 'bg12.png',
            'patterns/thumb13.png' => 'bg13.png',
            'patterns/thumb14.png' => 'bg14.png',
            'patterns/thumb15.png' => 'bg15.png',
            'patterns/thumb16.png' => 'bg16.png'
        );
        for($x=1; $x<=500; $x++){
            $heights[$x] = $x.'px';
        }

        $this->header('#');

        $this->newTab('general','general','general.png');

        $this->newOption('radio', 'moodleVersion', 'Moodle Version', 'Select the version of your Moodle.', '25', array('25' => '2.5', '26' => '2.6', '27' => '2.7'));
        $this->newOption('thumbList', 'themeColor', 'Color Scheme', 'Select the color scheme', 'green', array('colorSchemes/blue.jpg' => 'blue', 'colorSchemes/purple.jpg' => 'purple', 'colorSchemes/black.jpg' => 'black', 'colorSchemes/custom.jpg' => 'custom'));
        $this->newOption('colorpicker', 'customColorScheme1', 'Custom Color Scheme', 'Create a custom color scheme.','#CCCCCC', null, array('floatLeft'));
        $this->newOption('colorpicker', 'customColorScheme2', '', '','#CCCCCC', null, array('floatLeft','left10px'));
        $this->newOption('colorpicker', 'customColorScheme3', '', '','#CCCCCC', null, array('floatLeft','left10px'));
        $this->newOption('colorpicker', 'customColorScheme4', '', '','#CCCCCC', null, array('left138px'));
        $this->newOption('select', 'layoutStyle', 'Layout Style', 'Select the layout style','wide', array('wide' => 'Wide', 'bgcolor' => 'Boxed with Background Color', 'bgpattern' => 'Boxed with Background Pattern', 'bgimage' => 'Boxed with Background Image'));        
        $this->newOption('colorpicker', 'bgcolor', 'Background Color', 'Select the background color to be used if layout style is Boxed with Background Color.','#CCCCCC');        
        $this->newOption('thumbList', 'bgpattern', 'Background Pattern', 'Select the background pattern to be used if layout style is Boxed with Background Pattern.', 'bg1.png', $patterns);
        $this->newOption('imageURL', 'bgpatternCustom', '', 'Or use a external pattern.');
        $this->newOption('imageURL', 'bgimage', 'Background Image', 'Select the background pattern to be used if layout style is Boxed with Background Pattern.');
        $this->newOption('imageURL', 'faviconURL', 'Favicon URL', 'Use a external link for include your favicon image.');
        $this->newOption('select', 'font', 'Font', 'Select the font style','oxygen', array('arial' => 'Arial','calibri' => 'Calibri','helvetica' => 'Helvetica','lato' => 'Lato', 'oxygen' => 'Oxygen', 'roboto' => 'Roboto', 'ubuntu' => 'Ubuntu', 'verdana' => 'Verdana'));        
        $this->newOption('radio', 'guestLogin', 'Guest Login', 'Activate the login as guest.', '0', array('0' => 'No', '1' => 'Yes'));
        $this->newOption('radio', 'generalSidebar', 'Sidebar', 'Choose the default side of your sidebar in general.', 'side-pre', array('side-pre' => 'Left', 'side-post' => 'Right'));
        $this->newOption('radio', 'breadcrumb', 'Breadcrumb', 'Select "ON" to enable Breadcrumb or "OFF" to disable.', '0', array('1' => 'On', '0' => 'Off'));
        $this->newOption('radio', 'editPageButton', 'Edit Page Button', 'Select "ON" to enable "Edit Page Button" or "OFF" to disable.', '0', array('1' => 'On', '0' => 'Off'));
        $this->newOption('longtext', 'googleAnalytics', 'Google Analytics', 'Put your Google Analytics code');
        $this->newOption('longtext', 'customCSS', 'Custom CSS', 'Add custom CSS to theme');

        $this->newTab('header','header','header.png');

        $this->newOption('radio', 'headerSocialIcons', 'Header Social Icons', 'Select "ON" to enable Social Icons on HEADER section or "OFF" to disable.', '1', array('1' => 'On', '0' => 'Off'));
        $this->newOption('imageURL', 'logoURL', 'Logo URL', 'Use a external link for include your logo image. Recommended size: 200x70.');
        $this->newOption('radio', 'fixedmenu', 'Fixed Header', 'Select "ON" to enable Fixed Header', '0', array('1' => 'On', '0' => 'Off'));
        $this->newOption('radio', 'registerLink', 'Register Link', 'Select "ON" to enable Register Link on HEADER section or "OFF" to disable.<br>(Need activate Self-Registration in Site administration -> Plugins -> Authentication -> Manage authentication -> Self registration)', '0', array('1' => 'On', '0' => 'Off'));
        $this->newOption('radio', 'loggedAs', 'You are logged in as USERNAME', 'Select "ON" to enable "You are logged in as USERNAME" on HEADER section or "OFF" to disable.', '0', array('1' => 'On', '0' => 'Off'));

        $this->newOption('list', 'mainMenu', 'Main Menu', 'Type your main menu texts and complete with they links below.', '', array('text' => 'Menu', 'link' => 'Link (URL)', 'deep' => 'Deep'));
        $this->newTab('footer','footer','footer.png');

        $this->newOption('title', '', 'Select Modules', 'Choose until 3 options of modules to be showing on FOOTER section.');
        $this->newOption('title', '', '', '<b>Module 1</b>');
        $this->newOption('select', 'module1', '', '','none', array('' => 'None', 'aboutus' => 'About Us', 'links' => 'Links', 'contactinfo' => 'Contact Info', 'image' => 'Image', 'notice' => 'Notice'));
        $this->newOption('title', '', '', '<b>Module 2</b>');
        $this->newOption('select', 'module2', '', '','none', array('' => 'None', 'aboutus' => 'About Us', 'links' => 'Links', 'contactinfo' => 'Contact Info', 'image' => 'Image', 'notice' => 'Notice'));
        $this->newOption('title', '', '', '<b>Module 3</b>');
        $this->newOption('select', 'module3', '', '','none', array('' => 'None', 'aboutus' => 'About Us', 'links' => 'Links', 'contactinfo' => 'Contact Info', 'image' => 'Image', 'notice' => 'Notice'));
        $this->newOption('title', '', '', '<b>Module 4</b>');
        $this->newOption('select', 'module4', '', '','none', array('' => 'None', 'aboutus' => 'About Us', 'links' => 'Links', 'contactinfo' => 'Contact Info', 'image' => 'Image', 'notice' => 'Notice'));

        $this->newTab('footerModule','footer Module','footerModules.png');

        $this->newOption('title', '', 'About Us', 'Talk about you. The text and image (200x70) bellow will be on module "About Us" on footer.');
        $this->newOption('title', '', '', '<b>Use an Image (URL)</b>');
        $this->newOption('imageURL', 'footermod_aboutus_whitelogo', '', '');
        $this->newOption('title', '', '', '<b>Description</b>');
        $this->newOption('longtext', 'footermod_aboutus_text', '', '');

        $this->newOption('separator');
        $this->newOption('list', 'footermod_links', 'Links', 'Insert useful links on your footer section.', '', array('text' => 'Link Title', 'link' => 'Link URL'));

        $this->newOption('separator');
        $this->newOption('title', '', 'Contact Info', 'Type your contact informations.');
        $this->newOption('title', '', '', '<b>Address</b>');
        $this->newOption('text', 'footermod_contact_address', '', '');
        $this->newOption('title', '', '', '<b>City</b>');
        $this->newOption('text', 'footermod_contact_city', '', '');
        $this->newOption('title', '', '', '<b>Phone Number</b>');
        $this->newOption('text', 'footermod_contact_phone', '', '');
        $this->newOption('title', '', '', '<b>E-mail</b>');
        $this->newOption('text', 'footermod_contact_mail', '', '');

        $this->newOption('separator');
        $this->newOption('title', '', 'Image', 'You can use an image on footer as some feature of your business.');
        $this->newOption('title', '', '', '<b>Image Title</b>');
        $this->newOption('text', 'footermod_image_title', '', '');
        $this->newOption('title', '', '', '<b>Image URL</b>');
        $this->newOption('imageURL', 'footermod_image_url', '', '');

        $this->newOption('separator');
        $this->newOption('title', '', 'Notice', 'Add a notice on footer.');
        $this->newOption('title', '', '', '<b>Notice Title</b>');
        $this->newOption('text', 'footermod_notice_title', '', '');
        $this->newOption('title', '', '', '<b>Notice Text</b>');
        $this->newOption('longtext', 'footermod_notice_text', '', '');

        $this->newTab('frontpage','frontpage','frontpage.png');
        $this->newOption('radio', 'slider', 'Slideshow', 'Select "ON" to enable Slideshow on your frontpage or "OFF" to disable.', 'banner', array('1' => 'On', '0' => 'Off'));
        $this->newOption('slideshow', 'slideshowdata', 'Slider Content', 'Type all informations about your content to each slider.', '');
        $this->newOption('radio', 'showfeaturedcourses', 'Featured Courses', 'Select "ON" to enable Featured Courses on Frontpage site or "OFF" to disable.', '0', array('1' => 'On', '0' => 'Off'));
        $this->newOption('singlelist', 'featuredcourses', 'Select your features courses', 'Select your featured courses bellow to show on Frontpage.', 'Name of Course', $courses);
        $this->newOption('radio', 'showbanner', 'Banner', 'Select "ON" to enable Banner on your frontpage or "OFF" to disable.', '0', array('1' => 'On', '0' => 'Off'));
        $this->newOption('imageURL', 'bannerurl', 'Banner URL', 'Use a external link for include your banner image.');

        $this->newOption('radio', 'showhtmlblocks', 'Show HTML Blocks', 'Select "ON" to enabled HTML Blocks on your frontpage of "OFF" to disabled.', '1', array('1' => 'On', '0' => 'Off'));
        $this->newOption('text', 'htmlblock1title', 'Block 1 Title', 'Title of block 1.');
        $this->newOption('longtext', 'htmlblock1', 'Block 1 Embed HTML', 'Embed HTML of Block 1');
        $this->newOption('text', 'htmlblock2title', 'Block 2 Title', 'Title of block 2.');
        $this->newOption('longtext', 'htmlblock2', 'Block 2 Embed HTML', 'Embed HTML of Block 2');

        $this->newTab('socials','socials','socials.png');
        $this->newOption('text', 'social_rss', 'RSS', '','');
        $this->newOption('text', 'social_twitter', 'Twitter', '','');
        $this->newOption('text', 'social_dribbble', 'Dribbble', '','');
        $this->newOption('text', 'social_vimeo', 'Vimeo', '','');
        $this->newOption('text', 'social_facebook', 'Facebook', '','');
        $this->newOption('text', 'social_youtube', 'Youtube', '','');
        $this->newOption('text', 'social_flickr', 'Flickr', '','');
        $this->newOption('text', 'social_gplus', 'Google+', '','');
        $this->newOption('text', 'social_linkedin', 'Linkedin', '','');
        $this->newOption('text', 'social_tumblr', 'Tumblr', '','');
        $this->newOption('text', 'social_behance', 'Behance', '','');
        $this->newOption('text', 'social_wordpress', 'Wordpress', '','');
        $this->newOption('text', 'social_pinterest', 'Pinterest', '','');

        $this->footer();
    }
}

?>
