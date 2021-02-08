<?php namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\Controllers;
class Login extends BaseController{
    public function index(){
        $data = [
            'judul' => "Login"
        ];
        echo view ('apotek/user/login', $data);
    }

    public function codelogin(){
        $session = session();
        $model = new LoginModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        echo "<pre>";
        print_r($data);
    if($data){
        $pass = $data['password'];
        $verify_pass = password_verify($password, $pass);
//print_r($pass);
//print_r($password);
        if($verify_pass){
            $ses_data = [
                'id_user'   => $data['id_user'],
                'nm_user'   => $data['nm_user'],
                'level'     => $data['level'],
                'logged_in' => TRUE

            ];
            $this->session->set($ses_data);
            //redirect()->to('user');
            return redirect()->to(site_url('/user'));
        }else{
             $this->session->setFlashdata('msg','Password Salah');
            return redirect()->to('/login');
        }
    }else{
        $this->session->setFlashdata('msg','Username Salah');
        return redirect()->to('/login');
    }
}
    public function logout(){
        $this->session->destroy();
        return redirect()->to('/login');
    }
    function haspass(){
        echo password_hash('rudii', PASSWORD_DEFAULT);
    } 
}