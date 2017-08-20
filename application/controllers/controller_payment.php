<?php
class Controller_Payment extends Controller
{
    public $layouts = "index";

    function action_index()
    {

        $this->template->view('payment');

    }
}