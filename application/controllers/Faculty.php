<?php 

/**
 * 
 */
class Faculty extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->id){
			return redirect('Login');
		}
	}

	public function welcome(){
		$this->load->model('facultymodel');
		$data= $this->facultymodel->userdata();
		$course = $this->facultymodel->fetch_teaching_course();
		$coursename = array();
		foreach ($course as $value) {
			$coursename[] = $this->facultymodel->fetchCourseName($value->courseId);
		}
		$offer = array();
		for($x = 0;$x < count($course);$x++){
		array_push($offer,array($course[$x],$coursename[$x]));
	}
		// echo '<pre>';
		// 	print_r($course);
		// 	print_r($coursename);
		// 	print_r($offer);
		// 	exit();

		$this->load->view('faculty/facultyhome',['user'=>$data,'input'=>$offer]);
	}

	public function addAttendance(){
		$course = $this->input->post('id');
		$this->load->model('facultymodel');
		$data= $this->facultymodel->userdata();
		$student = $this->facultymodel->fetchstudents($course);

		$studentid = array();
		foreach ($student as $value) {
			$studentid[] = $this->facultymodel->fetchNames($value->studentId);
		}
		// echo '<pre>';
		// print_r($studentid);
		// exit();
		$this->load->view('faculty/add_attendance',['user'=>$data,'student'=>$studentid]);
	}
}
?>