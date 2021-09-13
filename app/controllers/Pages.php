<?php
class Pages extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
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
    public function login() {
        $data = [
            'title' => 'Login page',
            'userName' => '',
            'psw' => ''
        ];

        $this->view('users/login', $data);
    }
    public function register() {
        $data = [
            'title' => 'register page',
            'userNameError' => '',
            'pswError' => '',
            'mailError' => ''
        ];

        $this->view('users/register', $data);
    }
    public function destroy() {
        $data = [
            'title' => 'Destroy Page'
        ];

        $this->view('../app/models/destroy', $data);
    }
}
