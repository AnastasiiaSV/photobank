<?php
class Controller_New_Item extends Controller
{
    public $layouts = "index";

    function action_index()
    {

        $this->template->view('new_item');

    }
}