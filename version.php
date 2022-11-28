<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin version and other meta-data are defined here.
 *
 * @package     local_nitefst
 * @copyright   2022 Uendelig <contato@uendelig.com.br>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_nitefst';
$plugin->release = '0.1.0';
$plugin->version = 2022112300;
$plugin->requires = 2021051700;
$plugin->maturity = MATURITY_ALPHA;
$plugin->dependencies = [
    'filter_generico' => 2022082200,
    'availability_coursecat' => 2022040701,
    'availability_coursecompleted' => 2022040400,
    'availability_role' => 2022071200,
    'availability_courseprogress' => 2020070100,
    'availability_othercompleted' => 2021112500,
    'availability_cohort' => 2022071200,
    'availability_relativedate' => 2022111100,
    'availability_user' => 2022040801,
    'availability_ipaddress' => 2022052801,
    'availability_sectioncompleted' => 2021052800,
    'availability_quizquestion' => 2021031700,
    'availability_badge' => 2016020200,
    'tool_courserating' => 2022111300,
    'tool_pluginskel' => 2021070200,
    'local_cohortrole' => 2021060800,
    'local_checkmarkreport' => 2022081000,
    'local_renumberquestioncategory' => 2020061300,
    'local_myddleware' => 2022091103,
    'mod_checkmark' => 2022081000,
];
