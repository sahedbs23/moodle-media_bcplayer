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
 * Media Brightcove player event handler definition.
 * @category event
 * @package    media_bcplayer
 * @copyright   2020 Brain station 23 ltd. <https://brainstation-23.com/>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// List of observers.
$observers = array(
    array(
        'eventname' => '\core\event\course_module_created',
        'callback' => 'media_bcplayer_observer::course_module_created',
    ),
    array(
        'eventname' => '\core\event\course_module_updated',
        'callback' => 'media_bcplayer_observer::course_module_updated',
    )
);
