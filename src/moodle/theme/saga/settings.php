<?php
    $ADMIN->add('root', new admin_externalpage('saga', 'Saga', $CFG->wwwroot."/theme/saga/settings/index.php"));
    
    /* Setting default settings */
    
    /* General */
    $moodleVersion = get_config('theme_saga','moodleVersion');
    if(!isset($moodleVersion) || trim($moodleVersion) == "") set_config('moodleVersion','25','theme_saga');
    
    $themecolor = get_config('theme_saga','themecolor');
    if(!isset($themecolor) || trim($themecolor) == "") set_config('themecolor','blue','theme_saga');

    $customColorScheme1 = get_config('theme_saga','customColorScheme1');
    if(!isset($customColorScheme1) || trim($customColorScheme1) == "") set_config('customColorScheme1','#FFFFFF','theme_saga');

    $customColorScheme2 = get_config('theme_saga','customColorScheme2');
    if(!isset($customColorScheme2) || trim($customColorScheme2) == "") set_config('customColorScheme2','#FFFFFF','theme_saga');

    $customColorScheme3 = get_config('theme_saga','customColorScheme3');
    if(!isset($customColorScheme3) || trim($customColorScheme3) == "") set_config('customColorScheme3','#FFFFFF','theme_saga');

    $customColorScheme4 = get_config('theme_saga','customColorScheme4');
    if(!isset($customColorScheme4) || trim($customColorScheme4) == "") set_config('customColorScheme4','#FFFFFF','theme_saga');
    
    $layoutstyle = get_config('theme_saga','layoutStyle');
    if(!isset($layoutstyle) || trim($layoutstyle) == "") set_config('layoutStyle','wide','theme_saga');

    $faviconurl = get_config('theme_saga','faviconurl');
    if(!isset($faviconurl) || trim($faviconurl) == "") set_config('faviconurl','','theme_saga');

    $font = get_config('theme_saga','font');
    if(!isset($font) || trim($font) == "") set_config('font','ubuntu','theme_saga');

    $guestLogin = get_config('theme_saga','guestLogin');
    if(!isset($guestLogin) || trim($guestLogin) == "") set_config('guestLogin','0','theme_saga');

    $generalsidebar = get_config('theme_saga','generalsidebar');
    if(!isset($generalsidebar) || trim($generalsidebar) == "") set_config('generalsidebar','side-pre','theme_saga');

    $breadcrumb = get_config('theme_saga','breadcrumb');
    if(!isset($breadcrumb) || trim($breadcrumb) == "") set_config('breadcrumb','1','theme_saga');

    $editPageButton = get_config('theme_saga','editPageButton');
    if(!isset($editPageButton) || trim($editPageButton) == "") set_config('editPageButton','1','theme_saga');

    $googleAnalytics = get_config('theme_saga','googleAnalytics');
    if(!isset($googleAnalytics) || trim($googleAnalytics) == "") set_config('googleAnalytics','','theme_saga');

    $customCSS = get_config('theme_saga','customCSS');
    if(!isset($customCSS) || trim($customCSS) == "") set_config('customCSS','','theme_saga');


    /* Header */
    $headersocialicon = get_config('theme_saga','headersocialicon');
    if(!isset($headersocialicon) || trim($headersocialicon) == "") set_config('headersocialicon','1','theme_saga');   
    
    $logourl = get_config('theme_saga','logourl');
    if(!isset($logourl) || trim($logourl) == "") set_config('logourl','','theme_saga');
    
    $fixedmenu = get_config('theme_saga','fixedmenu');
    if(!isset($fixedmenu) || trim($fixedmenu) == "") set_config('fixedmenu','1','theme_saga');

    $registerLink = get_config('theme_saga','registerLink');
    if(!isset($registerLink) || trim($registerLink) == "") set_config('registerLink','0','theme_saga');
    
    $loggedAs = get_config('theme_saga','loggedAs');
    if(!isset($loggedAs) || trim($loggedAs) == "") set_config('loggedAs','0','theme_saga');

    
    /* Frontpage */
    $featuredcourses = get_config('theme_saga','featuredcourses');
    if(!isset($featuredcourses) || trim($featuredcourses) == "") set_config('featuredcourses','','theme_saga');
    
    $showfeaturedcourses = get_config('theme_saga','showfeaturedcourses');
    if(!isset($showfeaturedcourses) || trim($showfeaturedcourses) == "") set_config('showfeaturedcourses','0','theme_saga');
        
    $showbanner = get_config('theme_saga','showbanner');
    if(!isset($showbanner) || trim($showbanner) == "") set_config('showbanner','0','theme_saga');
    
    $bannerurl = get_config('theme_saga','bannerurl');
    if(!isset($bannerurl) || trim($bannerurl) == "") set_config('bannerurl','','theme_saga');
    
    $showhtmlblocks = get_config('theme_saga','showhtmlblocks');
    if(!isset($showhtmlblocks) || trim($showhtmlblocks) == "") set_config('showhtmlblocks','0','theme_saga');
    
    $htmlblock1title = get_config('theme_saga','htmlblock1title');
    if(!isset($htmlblock1title) || trim($htmlblock1title) == "") set_config('htmlblock1title','','theme_saga');
    
    $htmlblock1 = get_config('theme_saga','htmlblock1');
    if(!isset($htmlblock1) || trim($htmlblock1) == "") set_config('htmlblock1','','theme_saga');
    
    $htmlblock2title = get_config('theme_saga','htmlblock2title');
    if(!isset($htmlblock2title) || trim($htmlblock2title) == "") set_config('htmlblock2title','','theme_saga');
    
    $htmlblock2 = get_config('theme_saga','htmlblock2');
    if(!isset($htmlblock2) || trim($htmlblock2) == "") set_config('htmlblock2','','theme_saga');    
    
    /* Footer */
    $footermodule1 = get_config('theme_saga','footermodule1');
    if(!isset($footermodule1) || trim($footermodule1) == "") set_config('footermodule1','aboutus','theme_saga');     
    
    $footermodule2 = get_config('theme_saga','footermodule2');
    if(!isset($footermodule2) || trim($footermodule2) == "") set_config('footermodule2','links','theme_saga');     
    
    $footermodule3 = get_config('theme_saga','footermodule3');
    if(!isset($footermodule3) || trim($footermodule3) == "") set_config('footermodule3','contactinfo','theme_saga');     
    
    $footermodule4 = get_config('theme_saga','footermodule4');
    if(!isset($footermodule4) || trim($footermodule4) == "") set_config('footermodule4','notice','theme_saga'); 
    
    /* Header */
    $searchbar = get_config('theme_saga','searchbar');
    if(!isset($searchbar) || trim($searchbar) == "") set_config('searchbar','1','theme_saga');
    
    $menudata = get_config('theme_saga','menudata');
    if(!isset($menudata) || trim($menudata) == "") set_config('menudata','[{"text":"My","link":"http:\/\/localhost\/moodle253\/my\/","deep":"1"},{"text":"My Homepage 2","link":"#","deep":"2"},{"text":"Courses","link":"http:\/\/localhost\/moodle253\/course","deep":"1"},{"text":"Course A","link":"http:\/\/www.google.com","deep":"2"},{"text":"Course B","link":"http:\/\/www.facebook.com","deep":"2"},{"text":"Course C","link":"http:\/\/www.pinterest.com","deep":"2"},{"text":"Typography","link":"#","deep":"1"},{"text":"Documentation","link":"#","deep":"1"},{"text":"Installation","link":"#","deep":"2"},{"text":"Features","link":"#","deep":"2"}]','theme_genesis');     
    
    /* Slider */
    
    $slider = get_config('theme_saga','slider');
    if(!isset($slider) || trim($slider) == "") set_config('slider','0','theme_saga');    
    
    $slideshowdata = get_config('theme_saga','slideshowdata');
    if(!isset($slideshowdata) || trim($slideshowdata) == "") set_config('slideshowdata','','theme_saga');    
    
    
    /* Footer modules */
    
    $footermod_aboutus_whitelogo = get_config('theme_saga','footermod_aboutus_whitelogo');
    if(!isset($footermod_aboutus_whitelogo) || trim($footermod_aboutus_whitelogo) == "") set_config('footermod_aboutus_whitelogo','','theme_saga');    
    
    $footermod_aboutus_text = get_config('theme_saga','footermod_aboutus_text');
    if(!isset($footermod_aboutus_text) || trim($footermod_aboutus_text) == "") set_config('footermod_aboutus_text','Donec vitae eros sit amet nibh fringilla hendrerit non at odio. Sed eu lacus hendrerit, venenatis elit ac, mollis massa. Sed nec enim ac justo feugiat tincidunt vitae sed felis. Pellentesque tincidunt viverra justo, eget posuere sem facilisis sit amet.','theme_saga');        

    $footermod_image_title = get_config('theme_saga','footermod_image_title');
    if(!isset($footermod_image_title) || trim($footermod_image_title) == "") set_config('footermod_image_title','Image Title','theme_saga');    

    $footermod_image_url = get_config('theme_saga','footermod_image_url');
    if(!isset($footermod_image_url) || trim($footermod_image_url) == "") set_config('footermod_image_url','','theme_saga');    

    $footermod_links = get_config('theme_saga','footermod_links');
    if(!isset($footermod_links) || trim($footermod_links) == "") set_config('footermod_links','[{"text":"Facebook - Share this!","link":"https:\/\/www.facebook.com\/"},{"text":"Google","link":"https:\/\/www.google.com.br\/"},{"text":"Twitter - Follow us!","link":"https:\/\/twitter.com\/"},{"text":"Ararazu","link":"http:\/\/themeforest.net\/user\/ararazu"}]','theme_saga');
  
    $footermod_contact_address = get_config('theme_saga','footermod_contact_address');
    if(!isset($footermod_contact_address) || trim($footermod_contact_address) == "") set_config('footermod_contact_address','Address 42','theme_saga');    

    $footermod_contact_city = get_config('theme_saga','footermod_contact_city');
    if(!isset($footermod_contact_city) || trim($footermod_contact_city) == "") set_config('footermod_contact_city','Rio - Brazil','theme_saga');    

    $footermod_contact_phone = get_config('theme_saga','footermod_contact_phone');
    if(!isset($footermod_contact_phone) || trim($footermod_contact_phone) == "") set_config('footermod_contact_phone','+99 (99) 9999-9999','theme_saga');    

    $footermod_contact_mail = get_config('theme_saga','footermod_contact_mail');
    if(!isset($footermod_contact_mail) || trim($footermod_contact_mail) == "") set_config('footermod_contact_mail','email@email.com','theme_saga');    
    
    $footermod_notice_title = get_config('theme_saga','footermod_notice_title');
    if(!isset($footermod_notice_title) || trim($footermod_notice_title) == "") set_config('footermod_notice_title','Notice','theme_saga');    
    
    $footermod_notice_text = get_config('theme_saga','footermod_notice_text');
    if(!isset($footermod_notice_text) || trim($footermod_notice_text) == "") set_config('footermod_notice_text','Donec vitae eros sit amet nibh fringilla hendrerit non at odio. Sed eu lacus hendrerit, venenatis elit ac, mollis massa. Sed nec enim ac justo feugiat tincidunt vitae sed felis. Pellentesque tincidunt viverra justo, eget posuere sem facilisis sit amet.','theme_saga');        
    
    /* Social Icons */
    
    $social_rss = get_config('theme_saga','social_rss');
    if(!isset($social_rss) || trim($social_rss) == "") set_config('social_rss','','theme_saga');    
    
    $social_twitter = get_config('theme_saga','social_twitter');
    if(!isset($social_twitter) || trim($social_twitter) == "") set_config('social_twitter','','theme_saga');    
    
    $social_dribbble = get_config('theme_saga','social_dribbble');
    if(!isset($social_dribbble) || trim($social_dribbble) == "") set_config('social_dribbble','','theme_saga');    
   
    $social_vimeo = get_config('theme_saga','social_vimeo');
    if(!isset($social_vimeo) || trim($social_vimeo) == "") set_config('social_vimeo','','theme_saga');  
    
    $social_facebook = get_config('theme_saga','social_facebook');
    if(!isset($social_facebook) || trim($social_facebook) == "") set_config('social_facebook','','theme_saga');
    
    $social_youtube = get_config('theme_saga','social_youtube');
    if(!isset($social_youtube) || trim($social_youtube) == "") set_config('social_youtube','','theme_saga');
    
    $social_flickr = get_config('theme_saga','social_flickr');
    if(!isset($social_flickr) || trim($social_flickr) == "") set_config('social_flickr','','theme_saga');
    
    $social_gplus = get_config('theme_saga','social_gplus');
    if(!isset($social_gplus) || trim($social_gplus) == "") set_config('social_gplus','','theme_saga');
    
    $social_linkedin = get_config('theme_saga','social_linkedin');
    if(!isset($social_linkedin) || trim($social_linkedin) == "") set_config('social_linkedin','','theme_saga');
    
    $social_tumblr = get_config('theme_saga','social_tumblr');
    if(!isset($social_tumblr) || trim($social_tumblr) == "") set_config('social_tumblr','','theme_saga');
    
    $social_behance = get_config('theme_saga','social_behance');
    if(!isset($social_behance) || trim($social_behance) == "") set_config('social_behance','','theme_saga');
    
    $social_wordpress = get_config('theme_saga','social_wordpress');
    if(!isset($social_wordpress) || trim($social_wordpress) == "") set_config('social_wordpress','','theme_saga');
    
    $social_pinterest = get_config('theme_saga','social_pinterest');
    if(!isset($social_pinterest) || trim($social_pinterest) == "") set_config('social_pinterest','','theme_saga');
    
    if(isset($_SERVER['QUERY_STRING']) && trim($_SERVER['QUERY_STRING']) == 'section=themesettingsaga')
        redirect ($CFG->wwwroot.'/theme/saga/settings/index.php');
?>