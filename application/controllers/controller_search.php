<?php
class Controller_Search extends Controller
{
    public $layouts = "index";

    function action_index()
    {

        $this->template->view('search');

    }
}