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
 * List of core events we wish to register for.
 *
 * You can have a rather longer description of the file as well,
 * if you like, and it can span multiple lines.
 *
 * @package    local
 * @subpackage academicyear
 * @copyright  2013 Cathal O'Riordan
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$handlers = array (
    'course_created' => array (
        'handlerfile'      => '/local/academicyear/lib.php',
        'handlerfunction'  => array('academicyear_course_handler', 'course_created'),
        'schedule'         => 'instant',
        'internal'         => 1,
    ),
 
    'course_deleted' => array (
        'handlerfile'      => '/local/academicyear/lib.php',
        'handlerfunction'  => array('academicyear_course_handler', 'course_deleted'),
        'schedule'         => 'instant',
        'internal'         => 1,
    ),
);