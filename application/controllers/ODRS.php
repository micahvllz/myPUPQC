<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ODRS extends CI_Controller
{

  public function new_request()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "ODRS", "title" => "New Request"]);
    $this->load->view('student/new-request');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/scripts/new-request-scripts');
  }

  public function requests()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "ODRS", "title" => "Requests"]);
    $this->load->view('student/requests');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/scripts/requests-scripts');
  }

  public function transactions()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "ODRS", "title" => "Transactions"]);
    $this->load->view('student/transactions');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/scripts/transactions-scripts');
  }
}