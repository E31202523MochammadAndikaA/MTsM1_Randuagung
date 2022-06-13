<?php
class Login extends CI_Controller
{
    function __construct (){
        parent ::__construct();
        $this->load->model('Login_model');
		$this->load->library('LT');
    }
    public function index(){
        $this ->load->view('Login/login');
    }
    public function cek_log(){
        $username = $this->input->post('txt_user');
        $password = $this->input->post('txt_pass');
        $cek = $this->Login_model->login($username,$password,'user')->result();
        if($cek != FALSE){
            foreach($cek as $row){
                $user = $row->username;
                $grup = $row->grup;
                $session = array(
                    'nama'          => $username,
                    'logged_in'     => TRUE
                    );
                $this->session->set_userdata($session,'nama');
                $this->session->unset_userdata('gagal');
                
                
            }
        $this->session->set_userdata('session_user',$user);
        $this->session->set_userdata('session_grup',$grup);
        redirect('Admin');

        }else{
            $this ->load->view('Login/login');
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect('login');
      }
    }

?>