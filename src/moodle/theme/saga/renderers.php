<?php
class theme_saga_core_renderer extends core_renderer {
    protected function googleAnalytics(){
        return get_config('theme_saga', 'googleAnalytics');
    }
    
    private function footermod_aboutus(){
        $logourl = get_config('theme_saga', 'footermod_aboutus_whitelogo');
        $text = get_config('theme_saga', 'footermod_aboutus_text');
        
        $content = '<div class="footermod footermod_aboutus">';
        
        if(!$logourl || trim($logourl)=="")
            $content .= '<div id="defaultlogowhite"></div>';
        else{
            $content .= '<div id="logowhite"></div>';
        }
        
        $content .= "<p>".$text."</p>";
        
        $content .= "</div>";
        
        return $content;
    }

    private function footermod_links(){
        $links = json_decode(get_config('theme_saga', 'footermod_links'));
        
        $content = '<div class="footermod footermod_links">'; 
        $content .= '<p class="title">'.get_string('links','theme_saga').'</p>';
        
        $content .= '<ul class="links">';
        
        for($x=0;$x<sizeof($links);$x++){
            $content .= '<li><a target="blank" href="'.$links[$x]->link.'">'.$links[$x]->text.'</a></li>';
        }
        
        $content .= '</ul>';
        $content .= '</div>';
        
        return $content;
    }
    
    private function footermod_contactinfo(){
        $address = get_config('theme_saga', 'footermod_contact_address');
        $city = get_config('theme_saga', 'footermod_contact_city');
        $phone = get_config('theme_saga', 'footermod_contact_phone');
        $mail = get_config('theme_saga', 'footermod_contact_mail');
        
        $content = '<div class="footermod footermod_contactinfo">';
        
        $content .= '<p class="title">'.get_string('contactinfo','theme_saga').'</p>';
        
        $content .= '<ul class="contactinfos">';
        $content .= '<li>'.$address.'</li>';
        $content .= '<li>'.$city.'</li>';
        $content .= '<li>'.$phone.'</li>';
        $content .= '<li>'.$mail.'</li>';
        $content .= '</ul>';
        
        $content .= "</div>";
        
        return $content;
    }
    
    private function footermod_image(){
        $title = get_config('theme_saga', 'footermod_image_title');
        $src = get_config('theme_saga', 'footermod_image_url');
        
        $content = '<div class="footermod footermod_image">';
        
        $content .= '<p class="title">'.$title.'</p>';
        $content .= '<div class="image"><img src="'.$src.'"/></div>';
        
        $content .= "</div>";
        
        return $content;
    }
    
    private function footermod_notice(){
        $title = get_config('theme_saga', 'footermod_notice_title');
        $text = get_config('theme_saga', 'footermod_notice_text');
        
        $content = '<div class="footermod footermod_text">';
        
        $content .= '<p class="title">'.$title.'</p>';
        $content .= '<p>'.$text.'</p>';
        
        $content .= "</div>";
        
        return $content;
    }

    private function footermod_none(){
        return '<div style="width:1px;height:1px;"></div>';
    }

    
    protected function footermod($modulearea){
        $module = get_config("theme_saga","footer".$modulearea);
        if(trim($module)!=""){
            $module = "footermod_".$module;
            return $this->$module();
        }else{
            return ' ';
        }
    }
    
    protected function loadGoogleFont(){
        $fontFamily = get_config('theme_saga', 'font');

        switch ($fontFamily) {
            case 'oxygen':
                /* Theme Font */
                echo "<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>";
                /* Theme Options Font */
                echo "<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>";
                break;
            case 'lato':
                /* Theme Font */
                echo "<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>";
                /* Theme Options Font */
                echo "<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>";
                break;
            case 'roboto':
                /* Theme Font */
                echo "<link href='http://fonts.googleapis.com/css?family=Roboto:400,100italic,100,300italic,300,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>";
                /* Theme Options Font */
                echo "<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>";
                break;
            case 'ubuntu':
                /* Theme & Theme Options Font */
                echo "<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>";
                break;
            default:
                /* Theme Options Font */
                echo "<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>";
                break;
        }
    }
    
    protected function otherLoginMethods($CFG){
        $guestLogin = get_config('theme_saga', 'guestLogin');

        echo '<div class="otherLoginMethod">';

        if($guestLogin){
            echo '<div class="subcontent guestsub">
                        <div class="desc">
                            '.get_string('mayAllowGuestAccess','theme_saga').'        
                        </div>
                        <form action="index.php" method="post" id="guestlogin">
                            <div class="guestform">
                                <input type="hidden" name="username" value="guest">
                                <input type="hidden" name="password" value="guest">
                                <input type="submit" value="'.get_string('loginAsGuest','theme_saga').'">
                            </div>
                        </form>
                    </div>';
        }

        echo '</div>';
    }

    protected function breadcrumb($PAGE){
        $breadcrumb = get_config('theme_saga', 'breadcrumb');
        $editPageButton = get_config('theme_saga', 'editPageButton');
        $content = '';
        
        if(($breadcrumb + $editPageButton) > 0){
            $content = '<div class="sixteen columns">
                            <div class="navbar">
                                <div class="wrapper clearfix">';

            if($breadcrumb){
                $content .=             '<div class="breadcrumb">'.$this->navbar().'</div>';
            }
            if($editPageButton){
                $content .=             '<div class="navbutton">'.$PAGE->button.'</div>';
            }

            $content .=         '</div>
                            </div>
                        </div>';
        }

        return $content;
    }

    protected function mycourses($CFG,$sidebar){
        $mycourses = enrol_get_users_courses($_SESSION['USER']->id);
        
        $courselist = array();
        foreach ($mycourses as $key=>$val){
            $courselist[] = $val->id;
        }
        
        $content = '';
        
        for($x=1;$x<=sizeof($courselist);$x++){
            $course = get_course($courselist[$x-1]);
            $title = $course->fullname;
            
            if ($course instanceof stdClass) {
                require_once($CFG->libdir. '/coursecatlib.php');
                $course = new course_in_list($course);
            }

            $url = $CFG->wwwroot."/theme/saga/pix/coursenoimage.jpg";
            foreach ($course->get_course_overviewfiles() as $file) {
                $isimage = $file->is_valid_image();
                $url = file_encode_url("$CFG->wwwroot/pluginfile.php",
                        '/'. $file->get_contextid(). '/'. $file->get_component(). '/'.
                        $file->get_filearea(). $file->get_filepath(). $file->get_filename(), !$isimage);
                if (!$isimage) {
                    $url = $CFG->wwwroot."/theme/saga/pix/coursenoimage.jpg";
                }
            }
            
            $content .= '<div class="mycourse-view '.(($x%2==0)?'view-nomargin':'').'">
                            <a href="'.$CFG->wwwroot.'/course/view.php?id='.$courselist[$x-1].'">
                                <figure class="effect-chico">
                                    <img src="'.$url.'" alt="'.$title.'"/>
                                    <figcaption>
                                        <div class="more"></div>
                                    </figcaption> 
                                </figure>
                            </a>
                            <a href="'.$CFG->wwwroot.'/course/view.php?id='.$courselist[$x-1].'"><h2>'.$title.'</h2></a>
                        </div>';
        }
                    
        return $content;
    }
    
    protected function banner(){
        $showbanner = get_config('theme_saga', 'showbanner');
        $bannerurl = get_config('theme_saga', 'bannerurl');
        
        $content = "";
        
        if($showbanner){
            $content = '<div id="bannerRow" class="row">
                            <div class="sklt-container">
                                <div class="sixteen columns" id="banner">
                                    <img src="'.$bannerurl.'"/>
                                </div>
                            </div>
                        </div>';
        }
        
        return $content;
    }
    
    protected function html_blocks(){
        $showhtmlblocks              = get_config('theme_saga','showhtmlblocks');
        
        $content = '';
        
        if($showhtmlblocks){
            $htmlblock1title             = get_config('theme_saga','htmlblock1title');
            $htmlblock1                  = get_config('theme_saga','htmlblock1');
            $htmlblock2title             = get_config('theme_saga','htmlblock2title');
            $htmlblock2                  = get_config('theme_saga','htmlblock2');
            
            $content = '<div class="row">
                            <div class="sklt-container">
                                <div class="eight columns">
                                    <h1>'.$htmlblock1title.'</h1>
                                    <div>'.$htmlblock1.'</div>
                                </div>
                                <div class="eight columns">
                                    <h1>'.$htmlblock2title.'</h1>
                                    <div>'.$htmlblock2.'</div>
                                </div>
                            </div>
                        </div>';
        }
        return $content;
    }
    
    protected function featuredcourses($CFG){
        $showfeaturedcourses = get_config("theme_saga","showfeaturedcourses");
        $content = '';

        if($showfeaturedcourses){
            $featuredcourses = get_config('theme_saga', 'featuredcourses');
            $courselist = json_decode($featuredcourses);
            $content = '<div id="featuredCoursesRow" class="row">
                            <div class="sklt-container">
                                <div class="sixteen columns" id="featuredCourses">
                                    '.get_string('featuredcourses','theme_saga').'
                                
                                    <div id="featuredCoursesNav">';

            if(sizeof($courselist)>3){
                    $content .= '   <div id="featuredCoursesNavRight">></div>                                    
                                    <div id="featuredCoursesNavLeft"><</div>
                                 </div>';
            }
            
            $content .= '</div>
                            <div class="sixteen columns">
                                <div id="featuredCoursesCarrousel">';

            for($x=1;$x<=sizeof($courselist);$x++){
                $course = get_course($courselist[$x-1]);
                $title = $course->fullname;
                
                if ($course instanceof stdClass) {
                    require_once($CFG->libdir. '/coursecatlib.php');
                    $course = new course_in_list($course);
                }

                $url = $CFG->wwwroot."/theme/saga/pix/coursenoimage.jpg";
                foreach ($course->get_course_overviewfiles() as $file) {
                    $isimage = $file->is_valid_image();
                    $url = file_encode_url("$CFG->wwwroot/pluginfile.php",
                            '/'. $file->get_contextid(). '/'. $file->get_component(). '/'.
                            $file->get_filearea(). $file->get_filepath(). $file->get_filename(), !$isimage);
                    if (!$isimage) {
                        $url = $CFG->wwwroot."/theme/saga/pix/coursenoimage.jpg";
                    }
                }

                $content .= '<div class="item'.(($x==1)?' first':(($x==3)?' last':'')).'">
                                    <a href="'.$CFG->wwwroot.'/course/view.php?id='.$courselist[$x-1].'">
                                        <figure class="effect-chico">
                                            <img src="'.$url.'" alt="'.$title.'"/>
                                            <figcaption>
                                                <div class="more"></div>
                                            </figcaption>           
                                        </figure>
                                    </a>
                                    
                                    <a href="'.$CFG->wwwroot.'/course/view.php?id='.$courselist[$x-1].'"><h2>'.$title.'</h2></a>
                            </div>';
            }
            
            $content .= '   </div>
                        </div>
                    </div>
                </div>';
        }
        
        return $content;
    }
    
    protected function menu(){

        $menuitems = json_decode(get_config('theme_saga', 'menudata'));
        $content = '<div id="menu">
                        <ul>';

        $currentpage = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        $currentpage = str_replace("/my/", "", $currentpage);
        $currentpage = str_replace("/#", "", $currentpage);

        if(stristr($currentpage,'.php')){
            $exp = explode("/", $currentpage);
            $currentpage = '';
            for($i=0; $i<sizeof($exp)-1;$i++){
                $currentpage .= $exp[$i].'/';
            }
        }

        if($currentpage[strlen($currentpage)-1] == '/') $currentpage = substr($currentpage, 0, -1);

        for($x=0;$x<sizeof($menuitems);$x++){

            if($menuitems[$x]->deep == '1'){
                if($menuitems[$x]->link[strlen($menuitems[$x]->link)-1] == '/') $menuitems[$x]->link = substr($menuitems[$x]->link, 0, -1);

                $content .= '<li '.((($x+1)>=sizeof($menuitems) || $menuitems[$x+1]->deep == '1')?'':'class="has-sub"').'>
                                <a href="'.$menuitems[$x]->link.'"'.(( $currentpage == str_replace("http://", "", str_replace("https://", "", $menuitems[$x]->link)))?' class="active"':'').'><span data-hover="'.$menuitems[$x]->text.'">'.$menuitems[$x]->text.'</span></a>';
                if(($x+1)>=sizeof($menuitems) || $menuitems[$x+1]->deep == '1'){
                    $content .= '</li>';
                }else{
                    $content .= '<ul>';
                }
            }else if($menuitems[$x]->deep == '2'){
                $content .= '       <li>
                                        <a href="'.$menuitems[$x]->link.'"><span data-hover="'.$menuitems[$x]->text.'">'.$menuitems[$x]->text.'</span></a>
                                    </li>';
                if(($x+1)>=sizeof($menuitems) || $menuitems[$x+1]->deep == '1'){
                    $content .= '</ul>
                             </li>';
                }
            }
        }
        
        $content .= '   </ul>   
                     </div>';

        return $content;
    }
    
    protected function responsive_menu(){

        $menuitems = json_decode(get_config('theme_saga', 'menudata'));
       
        $content = '';

        /* Responsive Menu */
        $content .= '   <div id="responsive_menu_button"></div>';

        $content .= '<div id="responsive_menu">';
        $content .= '   <ul class="rp-menu">';

        for($x=0;$x<sizeof($menuitems);$x++){

            if($menuitems[$x]->deep == '1'){
                if($menuitems[$x]->link[strlen($menuitems[$x]->link)-1] == '/') $menuitems[$x]->link = substr($menuitems[$x]->link, 0, -1);

                $content .= '<li>
                                <a href="'.$menuitems[$x]->link.'">'.$menuitems[$x]->text.'</a>';
                if(($x+1)>=sizeof($menuitems) || $menuitems[$x+1]->deep == '1'){
                    $content .= '</li>';
                }else{
                    $content .= '<ul'.((($x+1)>=sizeof($menuitems) || $menuitems[$x+1]->deep == '1')?'':' class="has-submenu"').'>';
                }
            }else if($menuitems[$x]->deep == '2'){
                $content .= '       <li>
                                        <a href="'.$menuitems[$x]->link.'">'.$menuitems[$x]->text.'</a>
                                    </li>';
                if(($x+1)>=sizeof($menuitems) || $menuitems[$x+1]->deep == '1'){
                    $content .= '</ul>
                             </li>';
                }
            }
        }

        $content .= '   </ul>';
        $content .= '</div>';



        return $content;
    }
    
    public function logo($page = ''){
        $logourl = get_config('theme_saga', 'logourl');
        $content = '';
        if($page!="login"){
            if(!$logourl || trim($logourl)=="")
                $content = '<div id="defaultlogo" class="logoleft"></div>';
            else{
                $content = '<div id="logo" class="logoleft"></div>';
            }
        }else{
            if(!$logourl || trim($logourl)=="")
                $content = '<div id="defaultlogo" class="logocenter"></div>';
            else{
                $content = '<div id="logo" class="logocenter"></div>';
            }
        }
        return $content;
    }

    public function favicon() {
        $faviconurl = get_config('theme_saga', 'faviconurl');
        if(!$faviconurl || trim($faviconurl)=="")
            $faviconurl = $this->page->theme->pix_url('favicon', 'theme');
        return $faviconurl;
    }

    protected function socialicons($area){
        $hassocialicons = get_config('theme_saga', $area.'socialicon');
        
        $social_facebook = get_config('theme_saga','social_facebook');
        $social_twitter = get_config('theme_saga','social_twitter');
        $social_gplus = get_config('theme_saga','social_gplus');
        $social_youtube = get_config('theme_saga','social_youtube');
        $social_vimeo =  get_config('theme_saga','social_vimeo');
        $social_wordpress = get_config('theme_saga','social_wordpress');
        $social_pinterest = get_config('theme_saga','social_pinterest');
        $social_flickr = get_config('theme_saga','social_flickr');
        $social_rss = get_config('theme_saga','social_rss');
        $social_dribbble = get_config('theme_saga','social_dribbble');
        $social_linkedin = get_config('theme_saga','social_linkedin');
        $social_tumblr = get_config('theme_saga','social_tumblr');
        $social_behance = get_config('theme_saga','social_behance');
        
        $content = '';
        $count = 0;
        
        if($hassocialicons){
            if(isset($social_facebook) && trim($social_facebook)!=""){
                $content .= '<a href="'.$social_facebook.'" target="blank"><div class="facebooksocial iconsocial '.(($count==0)?"no-marginleft":"").'"></div></a>';
                $count++;
            }
            if(isset($social_twitter) && trim($social_twitter)!=""){
                $content .= '<a href="'.$social_twitter.'" target="blank"><div class="twittersocial iconsocial '.(($count==0)?"no-marginleft":"").'"></div></a>';
                $count++;
            }
            if(isset($social_gplus) && trim($social_gplus)!=""){
                $content .= '<a href="'.$social_gplus.'" target="blank"><div class="gplussocial iconsocial '.(($count==0)?"no-marginleft":"").'"></div></a>';
                $count++;
            }
            if(isset($social_youtube) && trim($social_youtube)!=""){
                $content .= '<a href="'.$social_youtube.'" target="blank"><div class="youtubesocial iconsocial '.(($count==0)?"no-marginleft":"").'"></div></a>';
                $count++;
            }
            if(isset($social_vimeo) && trim($social_vimeo)!=""){
                $content .= '<a href="'.$social_vimeo.'" target="blank"><div class="vimeosocial iconsocial '.(($count==0)?"no-marginleft":"").'"></div></a>';
                $count++;
            }
            if(isset($social_wordpress) && trim($social_wordpress)!=""){
                $content .= '<a href="'.$social_wordpress.'" target="blank"><div class="wordpresssocial iconsocial '.(($count==0)?"no-marginleft":"").'"></div></a>';
                $count++;
            }
            if(isset($social_pinterest) && trim($social_pinterest)!=""){
                $content .= '<a href="'.$social_pinterest.'" target="blank"><div class="pinterestsocial iconsocial '.(($count==0)?"no-marginleft":"").'"></div></a>';
                $count++;
            }
            if(isset($social_flickr) && trim($social_flickr)!=""){
                $content .= '<a href="'.$social_flickr.'" target="blank"><div class="flickrsocial iconsocial '.(($count==0)?"no-marginleft":"").'"></div></a>';
                $count++;
            }
            if(isset($social_rss) && trim($social_rss)!=""){
                $content .= '<a href="'.$social_rss.'" target="blank"><div class="rsssocial iconsocial '.(($count==0)?"no-marginleft":"").'"></div></a>';
                $count++;
            }
            if(isset($social_dribbble) && trim($social_dribbble)!=""){
                $content .= '<a href="'.$social_dribbble.'" target="blank"><div class="dribbblesocial iconsocial '.(($count==0)?"no-marginleft":"").'"></div></a>';
                $count++;
            }
            if(isset($social_linkedin) && trim($social_linkedin)!=""){
                $content .= '<a href="'.$social_linkedin.'" target="blank"><div class="linkedinsocial iconsocial '.(($count==0)?"no-marginleft":"").'"></div></a>';
                $count++;
            }
            if(isset($social_tumblr) && trim($social_tumblr)!=""){
                $content .= '<a href="'.$social_tumblr.'" target="blank"><div class="tumblrsocial iconsocial '.(($count==0)?"no-marginleft":"").'"></div></a>';    
                $count++;
            }
            if(isset($social_behance) && trim($social_behance)!=""){
                $content .= '<a href="'.$social_behance.'" target="blank"><div class="behancesocial iconsocial '.(($count==0)?"no-marginleft":"").'"></div></a>';            
                $count++;
            }           
        } 
        
        $content .= ' ';
        
        return $content;
    }

    protected function slider(){
        $slider = get_config('theme_saga', 'slider');
        
        if($slider){
            $slideritems = json_decode(get_config('theme_saga', 'slideshowdata'));
            $sliderEffects = array('<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">','<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">');        

            $content = '<div id="sliderarea" class="row">';

            $content .= '<div id="slider" class="sl-slider-wrapper">
                            <div class="sl-slider">';

            for($x=0;$x<sizeof($slideritems);$x++){
                $content .= $sliderEffects[$x%2];
                $content .= '<div class="sl-slide-inner">
                                    <div class="bg-img bg-img-'.($x+1).'"></div>
                                    <div class="title"><cite>'.$slideritems[$x]->title.'</cite></div>
                                    <blockquote><p>'.$slideritems[$x]->description.'</p></blockquote>
                                </div>
                            </div>';
            } 

            $content .= '</div>

                            <nav id="nav-arrows" class="nav-arrows">
                                <span class="nav-arrow-prev">Previous</span>
                                <span class="nav-arrow-next">Next</span>
                            </nav>
                        </div>

                            <nav id="nav-dots" class="nav-dots">
                                <span class="nav-dot-current"></span>';

            for($x=1;$x<sizeof($slideritems);$x++)
                $content .= '<span></span>';

            $content .= '</nav>';
            $content .= '</div>';
        }else{
            $content = '';
        }
        
        return $content;
    }

    protected function forcefooter($page = 'login'){
        $code = '<style type="text/css">
                    @media screen and (min-height: 600px){
                       #footer,#footerend{
                           position: absolute !important;
                       }
                    }
                </style>';
        if($page=='login'){
            echo $code;
        }else{
            echo '<pre>';
            $url = explode("/",$_SERVER['PHP_SELF']);
            $page = $url[sizeof($url)-1];
            if($page=='logout.php') echo $code;
            echo '</pre>';
        }
    }
    
    protected function render_navigation_node(navigation_node $item) {
        $content = $item->get_content();
        $title = $item->get_title();
        if ($item->icon instanceof renderable && !$item->hideicon) {
            if(trim($content) == 'Saga')
                $item->icon->pix = 'g/saga_'.get_config('theme_saga','themecolor');
            $icon = $this->render($item->icon);
            if(trim($content) == 'Saga')
                $content = '<b>Saga</b>';
            $content = $icon.$content; // use CSS for spacing of icons
        }
        if ($item->helpbutton !== null) {
            $content = trim($item->helpbutton).html_writer::tag('span', $content, array('class'=>'clearhelpbutton', 'tabindex'=>'0'));
        }
        if ($content === '') {
            return '';
        }
        if ($item->action instanceof action_link) {
            $link = $item->action;
            if ($item->hidden) {
                $link->add_class('dimmed');
            }
            if (!empty($content)) {
                // Providing there is content we will use that for the link content.
                $link->text = $content;
            }
            $content = $this->render($link);
        } else if ($item->action instanceof moodle_url) {
            $attributes = array();
            if ($title !== '') {
                $attributes['title'] = $title;
            }
            if ($item->hidden) {
                $attributes['class'] = 'dimmed_text';
            }
            $content = html_writer::link($item->action, $content, $attributes);

        } else if (is_string($item->action) || empty($item->action)) {
            $attributes = array('tabindex'=>'0'); //add tab support to span but still maintain character stream sequence.
            if ($title !== '') {
                $attributes['title'] = $title;
            }
            if ($item->hidden) {
                $attributes['class'] = 'dimmed_text';
            }
            $content = html_writer::tag('span', $content, $attributes);
        }
        return $content;
    }

    public function login_info($withlinks = null) {
        global $USER, $CFG, $DB, $SESSION;

        if (during_initial_install()) {
            return '';
        }

        if (is_null($withlinks)) {
            $withlinks = empty($this->page->layout_options['nologinlinks']);
        }

        $loginpage = ((string)$this->page->url === get_login_url());
        $course = $this->page->course;
        if (session_is_loggedinas()) {
            $realuser = session_get_realuser();
            $fullname = fullname($realuser, true);
            if ($withlinks) {
                $loginastitle = get_string('loginas');
                $realuserinfo = " [<a href=\"$CFG->wwwroot/course/loginas.php?id=$course->id&amp;sesskey=".sesskey()."\"";
                $realuserinfo .= "title =\"".$loginastitle."\">$fullname</a>] ";
            } else {
                $realuserinfo = " [$fullname] ";
            }
        } else {
            $realuserinfo = '';
        }

        $loginurl = get_login_url();

        if (empty($course->id)) {
            // $course->id is not defined during installation
            return '';
        } else if (isloggedin()) {
            $context = context_course::instance($course->id);

            $fullname = fullname($USER, true);
            // Since Moodle 2.0 this link always goes to the public profile page (not the course profile page)
            if ($withlinks) {
                $linktitle = get_string('viewprofile');
                $username = "<a href=\"$CFG->wwwroot/user/profile.php?id=$USER->id\" title=\"$linktitle\">$fullname</a>";
            } else {
                $username = $fullname;
            }
            if (is_mnet_remote_user($USER) and $idprovider = $DB->get_record('mnet_host', array('id'=>$USER->mnethostid))) {
                if ($withlinks) {
                    $username .= " from <a href=\"{$idprovider->wwwroot}\">{$idprovider->name}</a>";
                } else {
                    $username .= " from {$idprovider->name}";
                }
            }
            if (isguestuser()) {
                $loggedinas = $realuserinfo.get_string('loggedinasguest');
                if (!$loginpage && $withlinks) {
                    $loggedinas .= " (<a href=\"$loginurl\">".get_string('login').'</a>)';
                }
            } else if (is_role_switched($course->id)) { // Has switched roles
                $rolename = '';
                if ($role = $DB->get_record('role', array('id'=>$USER->access['rsw'][$context->path]))) {
                    $rolename = ': '.role_get_name($role, $context);
                }
                $loggedinas = get_string('loggedinas', 'moodle', $username).$rolename;
                if ($withlinks) {
                    $url = new moodle_url('/course/switchrole.php', array('id'=>$course->id,'sesskey'=>sesskey(), 'switchrole'=>0, 'returnurl'=>$this->page->url->out_as_local_url(false)));
                    $loggedinas .= '('.html_writer::tag('a', get_string('switchrolereturn'), array('href'=>$url)).')';
                }
            } else {
                $loggedinas = $realuserinfo.get_string('loggedinas', 'moodle', $username);
                if ($withlinks) {
                    $loggedinas .= " (<a href=\"$CFG->wwwroot/login/logout.php?sesskey=".sesskey()."\">".get_string('logout').'</a>)';
                }
            }
        } else {
            $loggedinas = get_string('loggedinnot', 'moodle');
            if (!$loginpage && $withlinks) {
                $loggedinas .= " (<a href=\"$loginurl\">".get_string('login').'</a>)';
            }
        }

        if (isset($SESSION->justloggedin)) {
            unset($SESSION->justloggedin);
            if (!empty($CFG->displayloginfailures)) {
                if (!isguestuser()) {
                    if ($count = count_login_failures($CFG->displayloginfailures, $USER->username, $USER->lastlogin)) {
                        $loggedinas .= '&nbsp;<div class="loginfailures">';
                        if (empty($count->accounts)) {
                            $loggedinas .= get_string('failedloginattempts', '', $count);
                        } else {
                            $loggedinas .= get_string('failedloginattemptsall', '', $count);
                        }
                        if (file_exists("$CFG->dirroot/report/log/index.php") and has_capability('report/log:view', context_system::instance())) {
                            $loggedinas .= ' (<a href="'.$CFG->wwwroot.'/report/log/index.php'.
                                                 '?chooselog=1&amp;id=1&amp;modid=site_errors">'.get_string('logs').'</a>)';
                        }
                        $loggedinas .= '</div>';
                    }
                }
            }
        }

        return $loggedinas;
    }
}
?>
