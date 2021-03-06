<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('auth');
        $this->load->model('auth');
    }

    public function index()
    {
        redirect('user/login');
    }

    public function login()
    {
        /*add_user(
            array(
                'username'   => 'testuser2',
                'password'   => 'testuser123',
                'email'      => 'testeremail@gmail.com',
                'first_name' => 'Test',
                'last_name'  => 'User'
            )
        );*/
        // Posted variables
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Login using the helper function
        if ( login($username, $password) )
        {
            $this->load->view('auth/logged_in');
        }
        else
        {
            $this->load->view('auth/login_form');
        }
    }

    public function register()
    {
        // If user was successfully added
        if( add_user($_POST) )
        {
            $this->load->view('auth/user_added');
        }
        else
        {
            $this->load->view('auth/register_form');
        }
    }
    
    public function create_password()
    {
        echo generate_password(8);
    }
    
    public function hash_password($password)
    {
        echo hash_password($password);
    }

}