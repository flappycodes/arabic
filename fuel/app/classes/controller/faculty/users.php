<?php
class Controller_Admin_Users extends Controller_Admin
{
	public function action_index(){
		$data['users'] = Model_User::find('all');
		$this->template->title = "Listing users";
		$this->template->content = View::forge('admin/users/index', $data);
	}

	public function action_view(){

	}

	public function action_create(){
		
	}

	public function action_update(){
		
	}
}