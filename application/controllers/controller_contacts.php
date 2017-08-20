<?php
class Controller_Contacts extends Controller
{
    public $layouts = "index";

    function action_index()
    {
        $this->template->view('contacts');

    }
}