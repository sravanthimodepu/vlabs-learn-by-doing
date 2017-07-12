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

/**
 * mod/taskchain/edit/columnlists.php
 *
 * @package    mod
 * @subpackage taskchain
 * @copyright  2010 Gordon Bateson (gordon.bateson@gmail.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since      Moodle 2.0
 */

/** Include required files */
require_once(dirname(dirname(dirname(dirname(__FILE__)))).'/config.php');
require_once($CFG->dirroot.'/mod/taskchain/locallib.php');
require_once($CFG->dirroot.'/mod/taskchain/edit/form/columnlists.php');

// create object to represent this TaskChain activity
$TC = new mod_taskchain();;

$url = $TC->url->edit('columnlists');
//mod_taskchain::add_to_log($TC->course->id, 'taskchain', 'editcolumnlists', $url, $TC->columnlisttype, $TC->columnlistid);

// Set editing mode
mod_taskchain::set_user_editing();

// initialize $PAGE (and compute blocks)
$PAGE->set_url($TC->url->edit('columnlists', array('id' => $TC->get_courseid(), 'columnlisttype' => $TC->columnlisttype)));
$PAGE->set_title($TC->taskchain->name);
$PAGE->set_heading($TC->course->fullname);

if ($TC->inpopup) {
    // $PAGE->set_pagelayout('popup');
    $PAGE->set_pagelayout('embedded');
}

$output = $PAGE->get_renderer('mod_taskchain');

$mform = new mod_taskchain_edit_columnlists_form();

if ($mform->is_cancelled()) {
    $TC->action = 'editcancelled';
} else if ($TC->action=='update' && ($newdata = $mform->get_data())) {
    $TC->action = 'datasubmitted';
}

switch ($TC->action) {

    case 'deleteconfirmed' :
        $text = '';

        $id = $TC->get_columnlistid();
        $type = $TC->get_columnlisttype();
        $lists = $TC->get_columnlists($type);

        if (is_numeric($id) && $id>0) {
            if (array_key_exists($id, $lists)) {
                // delete a single columnlist
                unset_user_preference('taskchain_'.$type.'_columnlist_'.$id);
                $text = get_string('columnlist', 'mod_taskchain', $lists[$id]);
            }
        } else {
            // delete all user defined column lists
            foreach ($lists as $id => $name) {
                unset_user_preference('taskchain_'.$type.'_columnlist_'.$id);
                if ($text=='') {
                    $text = get_string('lists'.$type, 'mod_taskchain');
                }
            }
        }
        $text = get_string('deletedactivity', '', mod_taskchain::textlib('strtolower', $text));
        echo $output->page_quick($text, 'close');
        break;

    case 'delete' :
        $type = $TC->get_columnlisttype();
        $text = get_string('confirmdelete'.$type.'columnlist', 'mod_taskchain');
        $params = array('inpopup'        => $TC->inpopup,
                        'chainid'        => $TC->get_chainid(),
                        'columnlistid'   => $TC->get_columnlistid(),
                        'columnlisttype' => $TC->get_columnlisttype());
        echo $output->page_delete($text, 'edit/columnlists.php', $params);
        break;

    case 'deleteall' :
        $type = $TC->get_columnlisttype();
        $text = get_string('confirmdelete'.$type.'columnlists', 'mod_taskchain');
        $params = array('inpopup'        => $TC->inpopup,
                        'chainid'        => $TC->get_chainid(),
                        'columnlistid'   => '00', // i.e. all
                        'columnlisttype' => $TC->get_columnlisttype());
        echo $output->page_delete($text, 'edit/columnlists.php', $params);
        break;

    case 'deletecancelled':
    case 'editcancelled':
        close_window();
        break;

    case 'datasubmitted':
        $columnlistnames = $TC->get_columnlists($TC->columnlisttype);

        if ($newdata->columnlistname) {
            // list name given, so check it is unique
            $id = array_search($newdata->columnlistname, $columnlistnames);
            if (is_numeric($id)) {
                $newdata->columnlistid = $id;
            }
        } else {
            // no list name given, so use old name if there was one
            if ($newdata->columnlistid && array_key_exists($newdata->columnlistid, $columnlistnames)) {
                $newdata->columnlistname = $columnlistnames[$newdata->columnlistid];
            }
        }

        if (empty($newdata->columnlistid)) {
            if (count($columnlistnames)) {
                // new columnlist id required
                $id = max(array_keys($columnlistnames)) + 1;
                $newdata->columnlistid = sprintf('%02d', $id);
            } else {
                // first column list is being added
                $newdata->columnlistid = '01';
            }
        }

        if (empty($newdata->columnlistname)) {
            $newdata->columnlistname = get_string('columnlist', 'mod_taskchain', $newdata->columnlistid);
        }

        $name = 'taskchain_'.$newdata->columnlisttype.'_columnlist_'.$newdata->columnlistid;
        set_user_preference($name, $newdata->columnlistname.':'.implode(',', $newdata->columnlist));

        if ($TC->inpopup) {
            echo $output->page_quick(get_string('changessaved'), 'close');
        } else {
            $params = array('columnlistid' => $newdata->columnlistid);
            redirect($TC->url->edit('tasks', $params));
        }
        break;

    case 'update':
    case 'edit':
    default:
        // initizialize data in form
        $defaults = array();
        $mform->data_preprocessing($defaults);
        $mform->set_data($defaults);
        unset($defaults);

        echo $output->header();

        // display the form
        $mform->display();

        echo $output->footer();

}
