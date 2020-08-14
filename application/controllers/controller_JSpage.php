<?php

class Controller_JSpage extends Controller
{
    function action_index()
    {
        $this->view->generate('JSpage_view.php', 'template_view.php');
    }
}
