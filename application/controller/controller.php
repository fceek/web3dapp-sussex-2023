<?php

class Controller {

    public $viewLoader;
    public $model;

    function __construct($pageURI = null) {
        $this -> viewLoader = new ViewLoader();
        $this -> model = new Model();

        $this -> $pageURI();
    }

    function home() {
        $data = $this -> model -> model3D_info();
        $this -> viewLoader -> view('view_home', $data);
    }

    function apiCreateTable() {
        $data = $this -> model -> dbCreateTable();
        $this -> viewLoader -> view('view_message', $data);
    }

    function apiInsertData() {
        $data = $this -> model -> dbInsertData();
        $this -> viewLoader -> view('view_message', $data);
    }

    function apiCreateImageTable() {
        $data = $this -> model -> dbCreateImageTable();
        $this -> viewLoader -> view('view_message', $data);
    }

    function apiInsertImageData() {
        $data = $this -> model -> dbInsertImageData();
        $this -> viewLoader -> view('view_message', $data);
    }

    function apiGetData() {
        $data = $this -> model -> dbGetData();
        $this -> viewLoader -> view('view_data', $data);
    }
}