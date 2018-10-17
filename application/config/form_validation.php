<?php 

$config = [
			'add_login_rules'=>[
								[
								'field'=>'username',
								'label'=>'User Name',
								'rules'=>'required'
								],
								[
								'field'=>'password',
								'label'=>'Password',
								'rules'=>'required']
			                ],

			'add_Signup_rules'=>[
								[
								'field'=>'username',
								'label'=>'User Name',
								'rules'=>'required|is_unique[users.username]'
								],
								[
								'field'=>'password',
								'label'=>'Password',
								'rules'=>'required'],
								[
								'field'=>'FirstName',
								'label'=>'FirstName',
								'rules'=>'required|alpha'
								],
								[
								'field'=>'LastName',
								'label'=>'LastName',
								'rules'=>'required|alpha'
								],
								[
								'field'=>'Email',
								'label'=>'Email',
								'rules'=>"required|valid_email|is_unique[users.Email]"
								]
			                ]
]
?>