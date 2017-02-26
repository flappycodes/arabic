<?php

class Controller_Faculty extends Controller_Base
{
	public $template = 'faculty/template';

	public function before()
	{
		parent::before();

		if (Request::active()->controller !== 'Controller_Faculty' or ! in_array(Request::active()->action, array('login', 'logout')))
		{
			if (Auth::check())
			{
				$admin_group_id = Config::get('auth.driver', 'Simpleauth') == 'Ormauth' ? 6 : 50;
				if ( ! Auth::member($admin_group_id))
				{
					Session::set_flash('error', e('You don\'t have access to the faculty panel'));
					Response::redirect('/');
				}
			}
			else
			{
				Response::redirect('faculty/login');
			}
		}
	}

	public function action_login()
	{
		// Already logged in
		Auth::check() and Response::redirect('faculty');

		$val = Validation::forge();

		if (Input::method() == 'POST')
		{
			$val->add('email', 'Email or Username')
			    ->add_rule('required');
			$val->add('password', 'Password')
			    ->add_rule('required');

			if ($val->run())
			{
				if ( ! Auth::check())
				{
					if (Auth::login(Input::post('email'), Input::post('password')))
					{
						// assign the user id that lasted updated this record
						/*foreach (\Auth::verified() as $driver)
						{
							if (($id = $driver->get_user_id()) !== false)
							{
								// credentials ok, go right in
								$current_user = Model\Auth_User::find($id[1]);
								Session::set_flash('success', e('Welcome, '.$current_user->username));
								Response::redirect('admin');
							}
						}*/

						// credentials ok, go right in
						$current_user = Model_User::find_by_username(Auth::get_screen_name());
						Session::set_flash('success', e('Welcome, '.$current_user->username));
						if (Auth::member(1)) {
							Response::redirect('user');
						}
						if (Auth::member(50)) {
							Response::redirect('faculty');
						}
						if (Auth::member(100)) {
							Response::redirect('admin');
						}
					}
					else
					{
						$this->template->set_global('login_error', 'Login failed!');
					}
				}
				else
				{
					$this->template->set_global('login_error', 'Already logged in!');
				}
			}
		}

		$this->template->title = 'Login';
		$this->template->content = View::forge('faculty/login', array('val' => $val), false);
	}

	/**
	 * The logout action.
	 *
	 * @access  public
	 * @return  void
	 */
	public function action_logout()
	{
		Auth::logout();
		Response::redirect('faculty');
	}

	/**
	 * The index action.
	 *
	 * @access  public
	 * @return  void
	 */
	public function action_index()
	{
		$this->template->title = 'Dashboard';
		$this->template->content = View::forge('faculty/dashboard');
	}

}

/* End of file admin.php */