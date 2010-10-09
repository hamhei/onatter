<?php 
/* SVN FILE: $Id$ */
/* User Fixture generated on: 2010-10-03 07:10:00 : 1286057640*/

class UserFixture extends CakeTestFixture {
	var $name = 'User';
	var $table = 'users';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'username' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 50),
			'password' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 50),
			'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
			'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'username'  => 'Lorem ipsum dolor sit amet',
			'password'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2010-10-03 07:14:00',
			'modified'  => '2010-10-03 07:14:00'
			));
}
?>