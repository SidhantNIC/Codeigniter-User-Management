<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function register(){
        $data['title'] = 'Sign Up';

        $this->form_validation->set_rules('fname','Firstname','required');
        $this->form_validation->set_rules('mname','Middlename','required');
        $this->form_validation->set_rules('lname','Lastname','required');
        $this->form_validation->set_rules('dob','DOB','required');
        //calculate age with dob
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('phone','Phone','required');
        $this->form_validation->set_rules('gender','Gender','required');
        //generate ecode

        if($this->form_validation->run()===FALSE){
            //if form validation fails redirerct to same
            //register page again
            if(!$this->session->userdata('logged_in')){
                redirect('users/adminlogin');
              }
              else{
            $this->load->view('users/register',$data);
              }
        }
        else{
            //calculate age from dob
            $dateOfBirth = ($this->input->post('dob'));
            $today = date("d-m-Y");
            $diff = date_diff(date_create($dateOfBirth), date_create($today));
            $age = $diff->format('%y');


            //generate an employee unique code
            $length = 3;
            $length2 =7;
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = '';
            $randomString2 = '';
            $today = date("Y");
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0,  $charactersLength - 1)];
            }
             for ($i = 0; $i < $length2; $i++) {
                $randomString2 .= $characters[rand(0,  $charactersLength - 1)];
            }
         
            $employeecode =  'WB/EMP/' . $today . '/' . $randomString . '/' . $randomString2;
        
            $this->user_model->register($age,$employeecode);

            $this->session->set_flashdata('user_registered','You are registered');

            redirect('users/admindashboard');

            
        }


    }

    //admin login function
    public function adminlogin(){

        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run()===FALSE){
            //if form validation fails redirerct to same
            //adminlogin page again
            $this->load->view('users/adminlogin');
        }

        else{
            $username  = $this->input->post('username',TRUE);
            $password = ($this->input->post('password',TRUE));
            $validate = $this->user_model->validate($username,$password);

            if($validate->num_rows() > 0){
                $data  = $validate->row_array();
                $username  = $data['username'];
                $password = $data['password'];
                $sesdata = array(
                    'username'  => $username,
                    'password'     => $password,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($sesdata);
                redirect('users/admindashboard');
            }
            else{
                echo $this->session->set_flashdata('msg','Username or Password is Wrong');
                redirect('users/adminlogin');
            }
        }

    }

    //function admin dashboard view
    public function admindashboard(){
        //unlogged user dashboard restriction
        if(!$this->session->userdata('logged_in')){
            redirect('users/adminlogin');
          }
          else{
            $this->load->view('users/admindashboard');
          }
    }


    //Display data from a database-

    function index(){
        //calling user_model function all()
        $users = $this->user_model->all();
        $data = array();
        $data['users'] = $users;
        if(!$this->session->userdata('logged_in')){
            redirect('users/adminlogin');
          }
          else{
        $this->load->view('users/list',$data);
          }
    }

    //funciton to edit user 

    function edit($editID){
        $user = $this->user_model->getuser($editID);
        $data = array();
        $data['user'] = $user;

        $this->form_validation->set_rules('fname','Fname','required');
        $this->form_validation->set_rules('mname','Mname','required');
        $this->form_validation->set_rules('lname','Lname','required');
        $this->form_validation->set_rules('dob','Dob','required');
        $this->form_validation->set_rules('age','Age','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('phone','Phone','required');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('code','Code','required');

        if($this->form_validation->run()==false){
            if(!$this->session->userdata('logged_in')){
                redirect('users/adminlogin');
              }
              else{
            $this->load->view('users/edit',$data);
              }
        }
        else{
            //update user record
            $formArray = array();
            $formArray['fname'] = $this->input->post('fname');
            $formArray['mname'] = $this->input->post('mname');
            $formArray['lname'] = $this->input->post('lname');
            $formArray['dob'] = $this->input->post('dob');
            $formArray['age'] = $this->input->post('age');
            $formArray['email'] = $this->input->post('email');
            $formArray['phone'] = $this->input->post('phone');
            $formArray['gender'] = $this->input->post('gender');
            $formArray['code'] = $this->input->post('code');
            $this->user_model->updateuser($editID,$formArray);
        
            $this->session->set_flashdata('success','Record Updated Successfully');
            redirect(base_url().'users/index');
        }
    }



//Delete user function
function delete($userid){
    $this->user_model->deleteuser($userid);
    $this->session->set_flashdata('success','Record deleted successfully');
    redirect(base_url().'users/index');

}



    //user login function
    public function userlogin(){

        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('dob','Dob','required');
        if($this->form_validation->run()===FALSE){
            //if form validation fails redirerct to same
            //userlogin page again
            $this->load->view('users/userlogin');
        }

        else{
            $email = $this->input->post('email',TRUE);
            $dob = ($this->input->post('dob',TRUE));
            $validate = $this->user_model->validateuser($email,$dob);

            if($validate->num_rows() > 0){
                $data  = $validate->row_array();
                $email  = $data['email'];
                $dob = $data['dob'];
                $sesdata2 = array(
                    'email'  => $email,
                    'dob'     => $dob,
                    'userlogged_in' => TRUE
                );
                $this->session->set_userdata($sesdata2);
                redirect('users/userdashboard');
            }
            else{
                echo $this->session->set_flashdata('msg','Username or Password is Wrong');
                redirect('users/userlogin');
            }
        }

    }

        //function employee dashboard view
        public function userdashboard(){

        $email = $this->session->userdata('email');
        $data['user'] = $this->user_model->displayuser($email);


        if(!$this->session->userdata('userlogged_in')){
            redirect('users/userlogin');
          }
          else{
        $this->load->view('users/userdashboard',$data);
          }
        }
        
    
//Display employees from databse






//logout and destroy all session and redirect to homepage
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

    
    
}
