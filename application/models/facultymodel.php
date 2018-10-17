<?php 

class facultymodel extends CI_Model
{
	public function facultyvalidate($input){
		$q = $this->db->where(['username'=>$input['username'],'password'=>$input['password']])
							->get('faculty');
			// echo '<pre>';
			// print_r($q->result());
			// exit();
			if($q->num_rows()){
				return $q->row()->facultyId;
			}
			else{
				return 0;
			}
	}

	public function userdata(){
		$id=$this->session->userdata('id');
		$q = $this->db->select()
						->from('faculty')
						->where(['facultyId' =>$id])
						->get();

		return $q->result();
	}
	public function fetch_teaching_course(){
		$id=$this->session->userdata('id');
		$q = $this->db->select('courseId')
						->from('facultycourse')
						->where(['facultyId' =>$id])
						->get();
		// echo '<pre>';
		// 	print_r($q->result());
		// 	print_r($q->row());
		// 	exit();
		return $q->result();
	}
	public function fetchCourseName($course){
		$q = $this->db->select('courseName')
						->where('courseId',$course)
						->get('courses');
		// echo '<pre>';
		// 	print_r($q->result());
		// 	print_r($q->row());
		// 	exit();
		return $q->row();
	}

	public function fetchstudents($course){
		$q = $this->db->select('studentId')
						->where('courseId',$course)
						->get('courseRegistered');
		
		return $q->result();
		
	}
	public function fetchNames($id){
		$q = $this->db->select(array('FirstName','LastName'))
						->where('studentid',$id)
						->get('users');
		
		return $q->row();
		
	}
}
?>