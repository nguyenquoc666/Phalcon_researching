<?php
use Phalcon\Mvc\Controller;

class SignupController extends Controller{
	public function indexAction(){
		echo $this->url->getBaseUri();
	}

	public function registerAction(){
		$user = new Users();

		// store and check for errors
		$success = $user->save(
			$this->request->getPost(),
			[
				'name',
				'email',
			]
		);
		if ($success) {
			echo 'Thanks for registering!';
		} else {
			echo "Sorry, the following problems were generated: ";

			$messages = $user->getMessages();

			foreach ($messages as $message) {
				echo $message->getMessage(), "<br/>";
			}
		}
		$this->view->disable();
	}
}