<?php

/**
 * Makes our changes to the CSS
 *
 * @param string $css
 * @param theme_config $theme
 * @return string 
 */
function saga_process_css($css, $theme) {
    global $CFG;
    $themecolor = $theme->settings->themecolor;
    
    switch ($themecolor) {
        case 'blue':
            $color1 = "#F1F0F0";
            $color2 = "#487E85";
            $color3 = "#095573";
            $color4 = "#97A12A";
            $themespriteposition = "-25px";
            break;
        case 'purple':
            $color1 = "#E2E2E2";
            $color2 = "#777FAD";
            $color3 = "#000018";
            $color4 = "#535353";
            $themespriteposition = "-50px";
            break;
        case 'black':
            $color1 = "#E2E2E2";
            $color2 = "#505050";
            $color3 = "#0A0A0A";
            $color4 = "#505050";
            $themespriteposition = "-75px";
            break;
        case 'custom':
            $color1 = $theme->settings->customColorScheme1;
            $color2 = $theme->settings->customColorScheme2;
            $color3 = $theme->settings->customColorScheme3;
            $color4 = $theme->settings->customColorScheme4;
            $themespriteposition = "0";
            break;
    }
    
    $layoutStyle = $theme->settings->layoutStyle;
    $bgstyle = '';

    switch ($layoutStyle) {
        case 'bgcolor':
            $bgstyle = '
                        body{
                            left: 50%;
                            margin-left: -675px;
                            position: absolute;
                            width: 1350px;
                        }
                        html{
                            background: '.$theme->settings->bgcolor.' !important;
                            overflow-x: hidden;
                        }

                        ';
            break;
        case 'bgpattern':
            $bgstyle = '
                        body{
                            left: 50%;
                            margin-left: -675px;
                            position: absolute;
                            width: 1350px;
                        }
                        html{
                            background-image: url('.((isset($theme->settings->bgpatternCustom) && trim($theme->settings->bgpatternCustom) != "")?$theme->settings->bgpatternCustom:$CFG->wwwroot."/theme/saga/pix/patterns/".$theme->settings->bgpattern).');
                            background-attachment: scroll;
                            background-size: auto;
                            background-position: 50% 50%;
                            background-repeat: repeat repeat;
                            overflow-x: hidden;
                        }

                        ';
            break;
        case 'bgimage':
            $bgstyle = '
                        body{
                            left: 50%;
                            margin-left: -675px;
                            position: absolute;
                            width: 1350px;
                        }
                        html{
                            background-image: url('.$theme->settings->bgimage.');
                            background-attachment: fixed;
                            background-size: cover;
                            background-position: 50% 50%;
                            background-repeat: no-repeat no-repeat;
                            overflow-x: hidden;
                        }

                        ';
            break;
    }

    $css = str_replace("[[setting:color1]]", $color1, $css);
    $css = str_replace("[[setting:color2]]", $color2, $css);
    $css = str_replace("[[setting:color3]]", $color3, $css);
    $css = str_replace("[[setting:color4]]", $color4, $css);
    $css = str_replace("[[setting:themespriteposition]]", $themespriteposition, $css);
    
    $css = str_replace("[[setting:logourl]]", $theme->settings->logourl, $css);
    $css = str_replace("[[setting:footermod_aboutus_whitelogo]]", $theme->settings->footermod_aboutus_whitelogo, $css);

    $css = str_replace("[[setting:bgstyle]]", $bgstyle, $css);
    $css = str_replace("[[setting:fontFamily]]", ucfirst($theme->settings->font), $css);
    $css = str_replace("[[setting:customCSS]]", $theme->settings->customCSS, $css);

    $slideritems = json_decode($theme->settings->slideshowdata);
    
    $slidecss = "";
    for($x=1;$x<=sizeof($slideritems);$x++){
        $slidecss .= '.bg-img-'.$x.' {
                            background-image: url('.$slideritems[$x-1]->image.');
                        }';
    }
    $css = str_replace("[[setting:slidebackgrounds]]", $slidecss, $css);
    
    // Return the CSS
    return $css;
}

?>