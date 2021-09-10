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
    public function topics(){
        $data = [
            'title' => 'Topics pages'
        ];
        $this->view('pages/topics', $data);
    }
    public function messages(){
        $data = [
            'title' => 'Messages pages'
        ];
        $this->view('pages/messages', $data);
    }
}
