<?php

class Auth extends CI_Driver_Library {

    /**
    * Configuration options for auth
    *
    * @var mixed
    */
    protected $_config = array(

        'method'          => 'username',
        'password_length' => 8,
        'guest_role'      => 'Guest',
        'default_role'    => 'User'

    );

    /**
    * Define the user roles
    *
    * @var mixed
    */
    protected $_roles = array(

        'Guest' => array(
            'role_id' => 0,
            'role_description' => 'A non logged in user'
        ),
        'User' => array(
            'role_id' => 1,
            'role_description' => 'Just a standard user'
        ),
        'Admin' => array(
            'role_id' => 10,
            'role_description' => 'A super administrator'
        ),

    );

    /**
    * Info about the current session / user
    *
    * @var mixed
    */
    protected $_auth_info = array(

        'username',
        'user_id',
        'role_id',

    );

    /**
    * Codeigniter instance
    *
    * @var mixed
    */
    protected $CI;

    /**
    * Constructor
    *
    */
    public function __construct()
    {
        $this->CI =& get_instance();

        $this->valid_drivers[] = 'auth_facebook';
        $this->valid_drivers[] = 'auth_twitter';
        $this->valid_drivers[] = 'auth_simpleauth';
    }

    /**
    * Logs in a user
    *
    */
    public function login()
    {

    }

    /**
    * Logs out the current user
    *
    */
    public function logout()
    {

    }

    /**
    * Add a new user to the database
    *
    */
    public function add_user()
    {

    }

    /**
    * Edit a user
    *
    */
    public function edit_user()
    {

    }

    /**
    * Delete a user
    *
    */
    public function delete_user()
    {

    }

    /**
    * Get information about the current user
    *
    */
    public function get_this_user()
    {

    }

}