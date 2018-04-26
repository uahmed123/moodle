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
 * @package     local_duallang
 * @category    optional API reference
 * @copyright   2017 umer ahmed <umer@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace local_duallang;
defined('MOODLE_INTERNAL') || die();
/**
 * Duallang string manager just to demonstrate the custom string manager functionality
 *
 * @copyright 2015 David Mudrak <david@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class duallang_string_manager extends \core_string_manager_standard {
    /**
     * Dummy implementation of the get_string() method
     *
     * @param string $identifier the identifier of the string to search for
     * @param string $component the component the string is provided by
     * @param string|object|array $a optional data placeholder
     * @param string $lang moodle translation language, null means use current
     * @return string
     */


    Public function get_string($identifier, $component = '', $a = null, $lang = null)
    {


        $string = parent::get_string($identifier, $component, $a, 'en');
        $zh_cn = parent::get_string($identifier, $component, $a, 'ur');
        //var_dump($zh_cn);
        if (strlen($zh_cn) > 0) {

            $string .= ' | ' . $zh_cn;
        }
        return $string;

    }
}