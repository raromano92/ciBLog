<?php
class Posts extends CI_Controller {
  public function index() {
    $data['title'] = 'Latest Posts';

    $data['posts'] = $this->Post_model->get_posts();
    print_r($data['posts']);

    $this->load->view('template/header');
    $this->load->view('posts/index', $data);
    $this->load->view('template/footer');
  }
}