<?php 
/* SVN FILE: $Id$ */
/* TweetsController Test cases generated on: 2010-10-01 03:10:56 : 1285873196*/
App::import('Controller', 'Tweets');

class TestTweets extends TweetsController {
	var $autoRender = false;
}

class TweetsControllerTest extends CakeTestCase {
	var $Tweets = null;

	function setUp() {
		$this->Tweets = new TestTweets();
	}

	function testTweetsControllerInstance() {
		$this->assertTrue(is_a($this->Tweets, 'TweetsController'));
	}

	function tearDown() {
		unset($this->Tweets);
	}
}
?>