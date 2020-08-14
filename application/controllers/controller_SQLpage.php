<?php

class Controller_SQLpage extends Controller
{
    function __construct()
    {
        $this->model = new Model_SQLpage();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('SQLpage_view.php', 'template_view.php', $data);
    }
}
