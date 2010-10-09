<?php 
/* SVN FILE: $Id$ */
/* Tweet Fixture generated on: 2010-10-01 03:10:03 : 1285872123*/

class TweetFixture extends CakeTestFixture {
	var $name = 'Tweet';
	var $table = 'tweets';
	var $fields = array(
			'Id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'Content' => array('type'=>'text', 'null' => true, 'default' => NULL),
			'Created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
			'Modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'Id', 'unique' => 1))
			);
	var $records = array(array(
			'Id'  => 1,
			'Content'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,
									phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,
									vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,
									feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.
									Orci aliquet, in lorem et velit maecenas luctus, wisi nulla at, mauris nam ut a, lorem et et elit eu.
									Sed dui facilisi, adipiscing mollis lacus congue integer, faucibus consectetuer eros amet sit sit,
									magna dolor posuere. Placeat et, ac occaecat rutrum ante ut fusce. Sit velit sit porttitor non enim purus,
									id semper consectetuer justo enim, nulla etiam quis justo condimentum vel, malesuada ligula arcu. Nisl neque,
									ligula cras suscipit nunc eget, et tellus in varius urna odio est. Fuga urna dis metus euismod laoreet orci,
									litora luctus suspendisse sed id luctus ut. Pede volutpat quam vitae, ut ornare wisi. Velit dis tincidunt,
									pede vel eleifend nec curabitur dui pellentesque, volutpat taciti aliquet vivamus viverra, eget tellus ut
									feugiat lacinia mauris sed, lacinia et felis.',
			'Created'  => '2010-10-01 03:42:03',
			'Modified'  => '2010-10-01 03:42:03'
			));
}
?>