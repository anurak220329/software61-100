<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class report extends CI_Controller {

	
	public function index()
	{
	echo "report index";
    }
    public function _hello()
    {
        echo "</br>Helloworld";
    }
    public function showname($name="Anurak",$lastname="Klakphet"){
        echo "My name is</br> " .$name. " ".$lastname;
        $this->_hello();
    }
    public function showview(){
        $this->load->view("hello_view");
        $this->load->view("hello_view");
        $this->load->view("hello_view");
    }
    public function showuser(){
        $data["name"] = "anurak";
        $data["lastname"] = "klakphet";
        $data["age"] = 18;
        $this->load->view("user_page",$data);    
    }
    public function getuser($p1=null,$p2=null,$p3=null){
        $data["name"] = $p1;
        $data["lastname"] = $p2;
        $data["age"] = $p3;
        $this->load->view("user_page",$data);    
    }
    public function showbooks(){
        $data["books"] = array("java","kotlin","php");
        $this->load->view("books_page",$data);
    }
}
