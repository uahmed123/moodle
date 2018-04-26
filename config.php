<?php // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost = 'localhost';
$CFG->dbname = 'moodle';
$CFG->dbuser = 'root';
$CFG->dbpass = '';
$CFG->prefix = 'mdl_';
$CFG->dboptions = array(
	'dbpersist' => 0,
	'dbport' => '',
	'dbsocket' => '',
	'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot = 'http://localhost/moodle';
$CFG->dataroot = 'C:\\xampp\\moodledata';
$CFG->admin = 'admin';
$CFG->behat_wwwroot = 'http://moodletest.com';
$CFG->behat_prefix = 'bht_';

$CFG->behat_dataroot = 'C:\xampp\bht_moodledata';
$CFG->behat_profiles = [
	'default' => [
		'browser' => 'chrome',
		'extensions' => [
			'Behat\MinkExtension' => [
				'selenium2' => [
					'browser' => 'chrome',
				],
			],
		],
	],
];
$CFG->directorypermissions = 0777;
$CFG->customstringmanager ='\local_duallang\duallang_string_manager';

//$CFG->customstringmanager = '\local_stringman\dummy_string_manager';
require_once __DIR__ . '/lib/setup.php';

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems
$CFG->phpunit_prefix = 'phpu_';
$CFG->phpunit_dataroot = 'C:\\xampp\\phpu_moodledata';
$CFG->phpunit_directorypermissions = 02777; // optional
