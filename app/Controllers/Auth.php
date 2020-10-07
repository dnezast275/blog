<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

class Auth extends BaseController
{
    public function index()
    {
        if (session()->get('email')) {
            return redirect()->to(base_url('/admin'));
        }

        $data = [
            'title'         => 'Login | Sistem Informasi',
            'validation'    => \Config\Services::validation()
        ];

        return view('auth/index', $data);
    }

    public function register()
    {
        if (session()->get('email')) {
            return redirect()->to(base_url('/admin'));
        }

        $data = [
            'title'         => 'Register | Sistem Informasi',
            'validation'    => \Config\Services::validation()
        ];
        return view('auth/register', $data);
    }

    public function save()
    {
        $userModel = new \App\Models\UserModel;

        $data = [
            'user_level' => 1,
            'active'     => 1,
            'nama'       => $this->request->getVar('nama'),
            'email'      => $this->request->getVar('email'),
            'password'   => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'created_at' => Time::now(),
            'updated_at' => Time::now()
        ];

        $register = $userModel->register($data);
        session()->setFlashdata('message', 'Akun anda berhasil didaftarkan!');
        return redirect()->to(base_url('/auth'));
    }

    public function login()
    {
        $userModel = new \App\Models\UserModel;

        $data   = [
            'email'     => $this->request->getVar('email'),
            'password'  => $this->request->getVar('password')
        ];

        $user   = $userModel->login($data);


        if ($user) {
            if ($user['active'] == 1) {
                if ($data['email'] == $user['email']) {
                    if (password_verify($data['password'], $user['password'])) {
                        $session = [
                            'user_level' => $user['user_level'],
                            'email'      => $user['email'],
                            'log'        => true
                        ];
                        session()->set($session);
                    } else {
                        session()->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Password anda salah!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                        return redirect()->to(base_url('/auth'));
                    }
                } else {
                    session()->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Email tidak terdaftar!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                    return redirect()->to(base_url('/auth'));
                }
            } else {
                session()->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Akun anda belum aktif!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                return redirect()->to(base_url('/auth'));
            }
        } else {
            session()->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Akun anda tidak terdaftar!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
            return redirect()->to(base_url('/auth'));
        }

        if ($user['user_level'] == 1) {
            return redirect()->to(base_url('/admin'));
        } else {
            return redirect()->to(base_url('/user'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/auth'));
    }

    //--------------------------------------------------------------------

}