<?php

require_once('core/start.php');
if(Input::exists('post')) {
  // validacija
  $validation = new Validate();

  $rules = [
    'email' => [
      'required' => true,
      'email' => true,
      'unique' => 'subscriptions'
    ]
  ];

  $validation->check($_POST, $rules);

  if($validation->passed()) {
    if($db->insert('subscriptions', [NULL, Input::get('email'), date('Y-m-d H:i:s')])) {
      Session::set('subscribed', 'You are subscribed to Limi blog.');
    }
    else {
      Session::set('error', 'Something went wrong');
    }
  }
  else {
		Session::set('errors', $validation->errors());
	}

}
Redirect::to('index.php#subscribe');

 ?>
