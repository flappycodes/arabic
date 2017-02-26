<?php
class Controller_Admin_Users extends Controller_Admin
{
	public function action_index(){
		$data['users'] = Model_User::find('all');
		$this->template->title = "Listing users";
		$this->template->content = View::forge('admin/users/index', $data);
	}

	public function action_view($id = null){
		$data['answer'] = Model_Answer::find($id);

		$this->template->title = "Answer";
		$this->template->content = View::forge('admin/answers/view', $data);
	}

	public function action_create(){
		if (Input::method() == 'POST')
		{
			$val = Model_User::validate('create');

			if ($val->run())
			{
				$user = Model_User::forge(array(
					'username' => Input::post('username'),
					'password' => Auth::instance()->hash_password(Input::post('password')),
					'email' => Input::post('email'),
					'fname' => Input::post('fname'),
					'mname' => Input::post('mname'),
					'lname' => Input::post('lname'),
					'year' => Input::post('year'),
					'group' => Input::post('group'),
					'status' => 0,
				));

				if ($user and $user->save())
				{
					Session::set_flash('success', e('Added user #'.$user->id.'.'));

					Response::redirect('admin/users');
				}

				else
				{
					Session::set_flash('error', e('Could not save user.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "New user";
		$this->template->content = View::forge('admin/users/create');
	}

	public function action_update(){
		
	}
	
	public function action_edit($id = null){
		$user = Model_User::find($id);
		$val = Model_User::validate('edit');

		if ($val->run())
		{
			$user->username = Input::post('username');
			$user->password = Auth::instance()->hash_password(Input::post('password'));
			$user->fname = Input::post('fname');
			$user->lname = Input::post('lname');
			$user->mname = Input::post('mname');
			$user->year = Input::post('year');
			$user->status = Input::post('status');
			$user->group = Input::post('group');
			$user->email = Input::post('email');
			$user->status = 0;

			if ($user->save())
			{
				Session::set_flash('success', e('Updated user #' . $id));

				Response::redirect('admin/users');
			}

			else
			{
				Session::set_flash('error', e('Could not update user #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$user->username = $val->validated('username');
				$user->password = $val->validated('password');
				$user->fname = $val->validated('fname');
				$user->lname = $val->validated('lname');
				$user->mname = $val->validated('mname');
				$user->year = $val->validated('year');
				$user->status = $val->validated('status');
				$user->group = $val->validated('group');
				$user->email = $val->validated('email');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('user', $user, false);
		}

		$this->template->title = "Edit user";
		$this->template->content = View::forge('admin/users/edit');
	}
}