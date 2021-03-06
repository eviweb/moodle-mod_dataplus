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
 * Delete comment Moodle form.
 * @package mod
 * @subpackage dataplus
 * @copyright 2011 The Open University
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once($CFG->dirroot.'/course/moodleform_mod.php');

// Form containing action buttons for confirming deletion.
class dataplus_delete_comment_form extends moodleform {
    public $message = null;

    public function definition() {
        return;
    }

    public function define_fields() {
        $mform =&$this->_form;
        $mform->addElement('html', '<a name="deletecomment"></a>');
        $mform->addElement('html', '<h2>'.get_string('deletecomment', 'dataplus').'</h2>');

        if (!is_null($this->message)) {
            $mform->addElement('html', $this->message);
        }

        $this->add_action_buttons(true, get_string('confirmdelete', 'dataplus'));
    }
}