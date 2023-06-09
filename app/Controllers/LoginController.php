<?php

namespace App\Controllers;

use \App\Models\AsistenModel;
use App\Models\LoginModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login/loginpage');
    }

    public function check()
    {
        $model1 = model(AsistenModel::class);
        $data = [
            'list' => $model1->getAsisten(),
            'title' => 'Daftar Asisten'
        ];
        $model = model(LoginModel::class);
        $post = $this->request->getPost(['usr', 'pwd']);
        $user = $model->where('username', $post['usr'])->first();
        $pass = $model->where('password', $post['pwd'])->first();
        if ($user && $pass) {
            $session = session();
            $session->set('pengguna', $post['usr']);
            return view('layout/header', $data)
                . view('asisten/simpan')
                . view("layout/footer");
        } else {
            return view('login/fail');
        }
    }

    public function logout()
    {
        $session = session();
        $session->remove('pengguna');
        return view('login/loginpage');
    }
    // ...
}
