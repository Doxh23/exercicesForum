<?php
class Pages extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function index() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('index', $data);
    }
    public function categories() {
        $data = [
            'title' => 'Category Page'
        ];

        $this->view('pages/categories', $data);
    }
}
