<?php 
    $menubar = empty($PAGE->layout_options['nomenubar']);
    $noslider = !empty($PAGE->layout_options['noslider']);
    $topbutton = (isset($PAGE->layout_options['topbutton']))?$PAGE->layout_options['topbutton']:'logout';
?>

<div id="topbar" class="row">
    <div class="sklt-container">
        <div class="sixteen columns">
            <?php echo $OUTPUT->socialicons('header'); ?>
        
            <?php
                switch ($topbutton) {
                    case 'home':
                        echo '<div id="home" class="topbutton"><a href="'.$CFG->wwwroot.'">'.get_string('home','theme_saga').'</a></div>';
                    break;
                    default:
                        if(isloggedin())
                            echo '<div id="logout" class="topbutton"><a href="'.$CFG->wwwroot.'/login/logout.php">'.get_string('logout','theme_saga').'</a></div>';
                        else
                            echo '<div id="login" class="topbutton"><a href="'.$CFG->wwwroot.'/login">'.get_string('login','theme_saga').'</a></div>';
                }
            ?>

            <?php 
                if(isloggedin() && get_config('theme_saga', 'loggedAs')){
                    echo '<p id="topText"> '.$OUTPUT->login_info(false).'</p>';
                }else if(!isloggedin() && get_config('theme_saga', 'registerLink')){
                    echo '<p id="topText"><a href="'.$CFG->wwwroot.'/login/signup.php">'.get_string('register','theme_saga').'</a></p>';
                }
            ?>
        </div>
    </div>
</div>

<?php if($menubar) { 
        $fixedmenu = get_config('theme_saga','fixedmenu');

echo        '<div id="menubar" class="row'.(($fixedmenu)?' canfix':'').'">
                    <div class="sklt-container">
                        <div class="four columns">
                            <a href="'.$CFG->wwwroot.'">'.$OUTPUT->logo().'</a>
                            '.$this->responsive_menu().'
                        </div>
                        <div class="twelve columns">'.$OUTPUT->menu($CFG->wwwroot).'</div>
                    </div>
            </div>';
} ?>