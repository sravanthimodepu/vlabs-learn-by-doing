<?PHP //$Id

require_once dirname(dirname(dirname(__FILE__))) . '/config.php';
require_once($CFG->dirroot.'/auth/joomdle/auth.php');

class block_jsgroup extends block_base {
    function init() {
        global $THEME, $CFG, $USER, $COURSE;

        $this->title = get_string('auth_joomla_group_discussion','auth_joomdle') ;
//        $this->version = 2009110209;
    }

    function has_config() {
        return false;
    }

    function get_content() {
        global $THEME, $CFG, $USER, $COURSE;

        // only for logged in users!
        if (!isloggedin()) {
            return false;
        }

	$course_name = $COURSE->fullname;
	/* Get JS group ID for this course */
	$auth_joomdle = new  auth_plugin_joomdle ();
	$id = $auth_joomdle->call_method ("getJSGroupId", $course_name);

	$group_info = $auth_joomdle->call_method ("getJSGroupImageLink", $course_name);

	/* Link to JS group */
	$joomla_url = get_config (NULL, 'joomla_url');
	$link = $joomla_url . "/index.php?option=com_community&view=groups&task=viewgroup&groupid=$id";

	if (!$group_info['avatar'])
		$group_info['avatar'] = 'components/com_community/assets/group.jpg';

	$img = $joomla_url . '/' .  $group_info['avatar'];

	$this->content = new stdClass;

	$this->content->text = "<a href=\"$link\"><img src=\"$img\" /></a>";
//	$this->content->text = "<a href=\"$link\">Group</a>";
        $this->content->footer = '';

        return $this->content;
    }
}

?>
