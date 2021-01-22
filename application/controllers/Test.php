<?php
class Test extends CI_Controller {

    public function index()
    {
        $this->load->model('Test_model');
        $data['query'] = $this->Test_model->get_last_three_movies();

        $this->load->view('testview', $data);
    }
}