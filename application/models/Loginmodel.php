<?php 
/**
 * 
 */
class Loginmodel extends CI_Model
{
	public function isvalidate($input){
		
			$q = $this->db->where(['username'=>$input['username'],'password'=>$input['password']])
							->get('users');
			// echo '<pre>';
			// print_r($q->result());
			// print_r($q->row());
			// exit();
			if($q->num_rows()){
				return $q->row()->studentid;
			}
			else{
				return 0;
			}
		
		
	}
	

	public function add_users($array){
		return $this->db->insert('users',$array);
	}
	public function userdata(){
		$id=$this->session->userdata('id');
		$q = $this->db->select()
						->from('users')
						->where(['studentid' =>$id])
						->get();

		return $q->result();
	}
	public function alreadyregistered(){
		$id = $this->session->userdata('id');
		$q = $this->db->select('studentId')
						->where('studentId',$id)
						->limit(1)
						->get('courseRegistered');

		return $q->row();
	}
	public function fetchCourses(){
		$q = $this->db->select()
					->get('courses');
		// echo '<pre>';
		// 	print_r($q->result());
		// 	print_r($q->row());
		// 	exit();
		return $q->result();

	}
	public function insertcourses($id,$value,$name){
		return $this->db->insert('courseRegistered',['studentid'=>$id,'courseId'=>$value,'courseName'=>
			$name]);
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
	public function fetch_register_course(){
		$id=$this->session->userdata('id');
		$q = $this->db->select(array('courseId','courseName'))
						->from('courseRegistered')
						->where(['studentid' =>$id])
						->get();
		// echo '<pre>';
		// 	print_r($q->result());
		// 	//print_r($q->row());
		// 	exit();
		return $q->result();
	}
}

?>