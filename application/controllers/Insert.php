<?php
class Insert extends CI_Controller {

    public function index()
    {
        $title='wolodyjowski';
        $opis= 'historyczny';
        $kateg = 2;
        $rok = 2001;
        $napis = 1976;
        $this->load->model('Test_model');
        $this->Test_model->insert_movie($title,$opis,$kateg,$rok,$napis);
        $data['query'] = $this->Test_model->get_last_three_movies();

        $this->load->view('testview', $data);

    }
}