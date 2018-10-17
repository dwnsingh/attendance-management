<?php 


class User extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		if(!$this->session->id){
			return redirect('Login');
		}
	}

	public function index()
	{
		 $this->load->view('Users/login');
	}

	public function welcome(){
		$this->load->model('loginmodel');
		$data= $this->loginmodel->userdata();
		$course = $this->loginmodel->fetch_register_course();
		$registered = $this->loginmodel->alreadyregistered();
		$this->load->view('Users/userhome',['user'=>$data,'input'=>$course,'registered'=>$registered]);
	}
	
	public function course()
	{
		$this->load->model('loginmodel');
		$data= $this->loginmodel->userdata();
		$course = $this->loginmodel->fetchCourses();
		$this->load->view('Users/courseRegister',['user'=>$data,'input'=>$course]);
		 
	}
	public function courseSubmit(){
		$input= $this->input->post();
		if(!empty($input)){
			$this->load->model('loginmodel');
			$id = $this->session->userdata('id');
			foreach ($input['mycheck'] as $value) {
				$name = $this->loginmodel->fetchCourseName($value);

				$insert=$this->loginmodel->insertcourses($id,$value,$name->courseName);

			}
			if($insert){
				$this->session->set_flashdata('inserted','course registered succesfully');
				return redirect('User/welcome');
			}
			else{
				$this->session->set_flashdata('failed','course registeration failed! please try again.');
				return redirect('User/course');
			}
			
		}
		else{
			return redirect('User/course');
		}
	}


	public function logout(){
		$this->session->unset_userdata('id');
		
		return redirect('Login');
	}

	
}

?>