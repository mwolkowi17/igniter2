<?php
class Blog extends CI_Controller {

public function index()
{

      /* $data = array(
              'title' => 'My Title',
              'heading' => 'My Heading',
              'message' => 'My Message'
      );*/
     // $data['title'] = "My Real Title";
     // $data['heading'] = "My Real Heading";
     $this->load->model('Blog_model');

     $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');

     $data['title'] = "My Real Title";
     $data['heading'] = "My Real Heading";
       // echo 'Hello World!';
       $this->load->view('blogview', $data);
}
}