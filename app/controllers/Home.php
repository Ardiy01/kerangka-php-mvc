<?php

class Home extends Controller
{   
    // Kerangka index
    public function index()
    {
        $data['judul'] = 'Welcome';
        $data['atvhome'] = 'active';
        $this->view('templates/header', $data);
        $this->view('templates/navbar-welcome', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }

    // Kerangka about
    public function about()
    {
        $data['judul'] = 'About';
        $data['atvabout'] = 'active';
        $this->view('templates/header', $data);
        $this->view('templates/navbar-welcome', $data);
        $this->view('home/about');
        $this->view('templates/footer');
    }
}
