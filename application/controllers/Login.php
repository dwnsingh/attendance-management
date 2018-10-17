<?php 


class Login extends MY_Controller
{
	public function __construct(){
		parent::__construct();
		if($this->session->id){
			if($this->session->type==0){
				return redirect('User/welcome');
			}
			else if($this->session->type == 1){
				return redirect('faculty/welcome');
			}
		}
	}

	public function index(){
		$this->form_validation->set_error_delimiters('<div class ="text-danger">','</div>' );
		if($this->form_validation->run('add_login_rules')){
			$input = $this->input->post();
			$this->load->model('loginmodel');

			if($input['usertype']== 0){
				if($id=$this->loginmodel->isvalidate($input)){
					$this->session->set_userdata('id',$id);
					$this->session->set_userdata('type',$input['usertype']);
					return redirect('User/welcome');
				}
				else{
					$this->session->set_flashdata('msg','Invalid Username/Password');
					return redirect('login');
				}
			
			}

			else if($input['usertype']== 1){
				$this->load->model('facultymodel');
				if($id=$this->facultymodel->facultyvalidate($input)){
					$this->session->set_userdata('id',$id);
					$this->session->set_userdata('type',$input['usertype']);
					return redirect('faculty/welcome');
				}
				else{
					$this->session->set_flashdata('msg','Invalid username/Password');
					return redirect('login');
				}
			
			}

		}
		else{
			$this->load->view('Users/login');
		}
	}
	public function adduser(){
		$this->form_validation->set_error_delimiters('<div class ="text-danger">','</div>' );
		if($this->form_validation->run('add_Signup_rules')){
			$input = $this->input->post();
			$this->load->model('loginmodel');
			if($this->loginmodel->add_users($input)){
				$this->session->set_flashdata('msg','user added successfully');
				$this->session->set_flashdata('msg_class','alert-success');
			}
			else{
				$this->session->set_flashdata('msg','user could not added! please try again');
				$this->session->set_flashdata('msg_class','alert-danger');
			}
			// echo '<pre>';
			// print_r($input);
			// exit();
			return redirect('login/register');
		}
		else{
			$this->load->view('Users/register');
		}
	}
	public function register(){
		$this->load->view('Users/register');
	}

	
}
?>