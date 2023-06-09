<?php

namespace App\Controllers;

use \App\Models\AsistenModel;
use \App\Models\LoginModel;

class AsistenController extends BaseController
{

    public function index()
    {
        $model1 = model(LoginModel::class);
        $session = session();
        if ($session->has('pengguna')) {
            $item = $session->get('pengguna');
            if ($model1->where('username', $item)) {
                $model = model(AsistenModel::class);
                $data = [
                    'list' => $model->getAsisten(),
                    'title' => 'Daftar Asisten'
                ];
                return view('layout/header', $data)
                    . view('asisten/AsistenView')
                    . view("layout/footer");
            } else {
                return view('login/loginpage');
            }
        } else {
            return view('login/loginpage');
        }
    }

    public function simpan()
    {
        $data = ['title' => 'Tambah Asisten'];

        $session = session();
        if ($session->has('pengguna')) {
            helper('form');
            // Memeriksa apakah melakukan submit data atau tidak.
            if (!$this->request->is('post')) {
                return view('layout/header', $data)
                    . view('asisten/simpan')
                    . view("layout/footer");
            }

            // Mengambil data yang disubmit dari form
            $post = $this->request->getPost([
                'nim',
                'nama',
                "praktikum",
                "ipk"
            ]);
            // Mengakses Model untuk menyimpan data
            $model = model(AsistenModel::class);
            $model->simpan($post);
            return view('layout/header', $data)
                . view('asisten/success')
                . view("layout/footer");
        } else {
            return view('login/loginpage');
        }
    }

    public function edit()
    {
        $data = ['title' => 'Edit Asisten'];

        $session = session();
        if ($session->has('pengguna')) {
            $db = \config\Database::connect();
            $Builder = $db->table('asisten');

            helper('form');
            if (!$this->request->is('post')) {
                return view('layout/header', $data)
                    . view('asisten/update')
                    . view("layout/footer");
            }
            $post = [
                'nama' => [$this->request->getPost('nama')],
                'praktikum' => [$this->request->getPost('praktikum')],
                'ipk' => [$this->request->getPost('ipk')]
            ];
            $Builder->where('NIM', $this->request->getPost('nim'));
            $Builder->update($post);
            return view('layout/header', $data)
                . view('asisten/success')
                . view("layout/footer");
        } else {
            return view('login/loginpage');
        }
    }
    public function delete()
    {
        $data = ['title' => 'Hapus Asisten'];

        $session = session();
        if ($session->has('pengguna')) {
            $db = \Config\Database::connect();
            $builder = $db->table('asisten');

            helper('form');
            if (!$this->request->is('post')) {
                return view('layout/header', $data)
                    . view('asisten/delete')
                    . view("layout/footer");
            }
            $post = $this->request->getPost([
                'nim'
            ]);
            $builder->where('nim', $post);
            $builder->delete();
            return view('layout/header', $data)
                . view('asisten/success')
                . view("layout/footer");
        } else {
            return view('login/loginpage');
        }
    }

    public function search()
    {
        $session = session();
        if ($session->has('pengguna')) {
            if (!$this->request->is('post')) {
                return view('/asisten/search');
            }
            $nim = $this->request->getPost(['key']);

            $model = model(AsistenModel::class);
            $asisten = $model->ambil($nim['key']);

            $data = ['hasil' => $asisten, 'title' => 'Cari Asisten'];
            return view('layout/header', $data)
                . view('asisten/search')
                . view("layout/footer");
        } else {
            return view('login/loginpage');
        }
    }
}
