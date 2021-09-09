<?php
class Categories extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function index() {
        $data = [
            'title' => 'category Page'
        ];

        $this->view('categories', $data);
    }
}
