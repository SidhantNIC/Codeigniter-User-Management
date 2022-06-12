<?php
class User_model extends CI_Model{
    public function register($age,$employeecode){
        //create data array of user
        //data information from register form

        $data = array(
            'fname' => $this->input->post('fname'),
            'mname' => $this->input->post('mname'),
            'lname' => $this->input->post('lname'),
            'dob' => $this->input->post('dob'),
            'age'=> $age,
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'gender' => $this->input->post('gender'),
            'code'=>$employeecode,
            
        );

        //inserting user
        return $this->db->insert('employee',$data);
    }

    //admin login validation
    function validate($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get('admin');
        return $result;
    }

    //selecting all users form database to display
    function all(){
        return $users = $this->db->get('employee')->result_array();
    }


    //selecting the user with edit button user id
    function getuser($editID){
        $this->db->where('id',$editID);
        return $user = $this->db->get('employee')->row_array();
    }
    

    //user update method 
    function updateuser($userid,$formArray){
        $this->db->where('id',$userid);
        $this->db->update('employee',$formArray);

    }

    //user delete method
    function deleteuser($userid){
        $this->db->where('id',$userid);
        $this->db->delete('employee');
    }

        //user login validation
        function validateuser($email,$dob){
            $this->db->where('email',$email);
            $this->db->where('dob',$dob);
            $result = $this->db->get('employee');
            return $result;
        }

//function for user dashboard user display
public function displayuser($email){
    $this->db->where('email',$email);
    $query = $this->db->get('employee');
    return $query->row();
}
    





}
?>