<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class home extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          //load the login model
          $this->load->model('app_model');
		  $this->load->library('calendar');
     }

	 public function upload()
	 {
		 $this->load->view('header');
		 $this->load->view('nav');
		 $report_date = $this->input->post("datepicker");
		 $report_type= $this->input->post("product_type");
		 $report_date=strtotime($report_date);
		 $newformat = date('Y-m-d',$report_date);
		 $report_id=$this->app_model->insert_report($report_type, $newformat);
		 echo $report_id; 
		 $this->load->view("upload_articles"); 
		 
	 }
	 public function update()
	 {
		 $this->load->view('header');
		 $this->load->view('nav');
		 $this->load->view("test"); 
		 
	 }
	 public function edit()
	 {
		 $this->load->view("header");
		 $this->load->view('nav');
		 $this->load->view('edit');
	 }
	 public function delete()
	 {
		 $this->load->view("header");
		 $this->load->view('nav');
		 $this->load->view('delete');
	 }
	 public function logout()
	 {
		 $this->load->view("header");
		 $this->load->view('login_view');
	 }
}?>