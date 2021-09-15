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
        $this->model('categories');
        $this->view('pages/categories', $data);
    }
    public function topics(){
        $data = [
            'title' => 'Topics pages'
        ];
        $this->model('topics');
        $this->view('pages/topics', $data);
    }
    public function messages(){
        $data = [
            'title' => 'Messages pages'
        ];
        $this->model('messages');
        $this->view('pages/messages', $data);
    }
    public function login() {
        $data = [
            'title' => 'Login page',
            'userName' => '',
            'psw' => ''
        ];
        $this->model('login');
        $this->view('users/login', $data);
    }
    public function register() {
        $data = [
            'title' => 'register page',
            'userNameError' => '',
            'pswError' => '',
            'mailError' => ''
        ];
        $this->model('register');
        $this->view('users/register', $data);
    }
    public function destroy() {
        $data = [
            'title' => 'Destroy Page'
        ];

        $this->view('users/destroy', $data);
    }
    public function profil() {
        $data = [
            'title' => 'profil page'
        ];
        $this->model('profil');
        $this->view('pages/profil', $data);
    }
}
