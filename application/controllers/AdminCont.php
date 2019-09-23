<?php

class AdminCont extends CI_Controller{

    public function index()
    {
        echo 'Login';
    }

    public function dashboard()
    {
        $this->load->view('admin/dashboard');
    }
    
    public function profile()
    {
        $this->load->view('admin/profile');
    }

    public function tasks()
    {
        $this->load->view('admin/tables');
    }

    public function more()
    {
        $this->load->view('admin/more');
    }

    public function allUsers()
    {
        $this->load->view('admin/allUsers');
    }
}