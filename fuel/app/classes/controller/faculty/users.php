<?php
class Controller_Faculty_Users extends Controller_Faculty
{
	public function action_index(){
		$data['users'] = Model_User::find('all');
		$this->template->title = "Listing users";
		$this->template->content = View::forge('faculty/users/index', $data);
	}

	public function action_view(){

	}

	public function action_create(){
		
	}

	public function action_update(){
		
	}
}