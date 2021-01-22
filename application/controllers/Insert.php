<?php
class Insert extends CI_Controller {

    public function index()
    {
        $this->load->model('Test_model');
        $this->Test_model->insert_movie();
        $data['query'] = $this->Test_model->get_last_three_movies();

        $this->load->view('testview', $data);

    }
}