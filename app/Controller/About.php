<?php

class About extends Controller {
    public function index(){ 
        // echo "About from Controller";
        // echo $_GET['id'];

        $this->view('about');
    }

}
