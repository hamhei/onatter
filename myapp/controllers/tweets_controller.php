<?php

//main controller
App::import('Vendor', 'oauth', array('file' => 'OAuth'.DS.'oauth_consumer.php'));
Configure::write('Security.level', 'low');

class TweetsController extends AppController {

	var $name = 'Tweets';
	var $helpers = array('Html', 'Form');

	var $components = array('Auth', 'Thumbmake');

	function index() {
		$this->Tweet->recursive = 0;
		$this->set('tweets', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Tweet.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('tweet', $this->Tweet->read(null, $id));
	}

 function addd() {
					//	var_dump($this->data);
					$this->Tweet->create();
					$this->Tweet->save($this->data);
					//	$this->Tweet->saveField('Content', $this->data['Tweet']['Content']);
					$this->redirect(array('action'=>'index'));
	}

	function contents($id = null) {
					$this->layout = null;
					$tweet = $this->Tweet->findById($id);
					// var_dump($tweet);
					header('Content-type: image/jpeg');
					echo $tweet['Tweet']['image'];
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tweet->create();
			if ($this->Tweet->save($this->data)) {
				$this->Session->setFlash(__('The Tweet has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Tweet could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Tweet', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tweet->save($this->data)) {
				$this->Session->setFlash(__('The Tweet has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Tweet could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tweet->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Tweet', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tweet->del($id)) {
			$this->Session->setFlash(__('Tweet deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

	function twit($id = null) {
					if (!$id) {
									$this->Session->setFlash(__('Invalid id for Tweet', true));
									$this->redirect(array('action'=>'index'));
					}
					$message = $this->Tweet->field('Content', array('Id' => $id));
					//	$message = $this->Tweet->read('content', $id);
					$this->Session->write('message', $message);

					$this->twitter();
					//	$this->twitter_callback();

	 			$this->Session->setFlash(__('Tweeted', true));
					$this->redirect(array('action'=>'index'));
	}

	public function twitter() {
					$consumer = $this->createConsumer();
					$requestToken = $consumer->getRequestToken('http://api.twitter.com/oauth/request_token', 'http://vm105.xen.klab.org/subversion/onatter/onatter/myapp/tweets/twitter_callback');
					$this->Session->write('twitter_request_token', $requestToken);
					$this->redirect('http://api.twitter.com/oauth/authorize?oauth_token=' . $requestToken->key);
						}

	public function twitter_callback() {

					if (isset($this->params['url']['denied'])) {
									echo 'access denied';
									return;
					}

					$message = $this->Session->read('message');
					$requestToken = $this->Session->read('twitter_request_token');
					$consumer = $this->createConsumer();
					$accessToken = $consumer->getAccessToken('http://api.twitter.com/oauth/access_token', $requestToken);

					$tweet = $consumer->post($accessToken->key, $accessToken->secret, 'http://api.twitter.com/statuses/update.json', array('status' => $message));

					$this->redirect(array('action'=>'index'));
	}

	private function createConsumer() {
					return new OAuth_Consumer('k5EiIpL5Ff0vHUqY4lnZBQ', 'nGkIkwYaRD2RokNLcCZ2PVC5HzXGgeO2WDplfQdomOk');
	}

}
?>