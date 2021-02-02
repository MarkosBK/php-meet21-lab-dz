<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Registration()
    {
        return view('home.registration');
    }
    public function ShowUser()
    {
        if (!isset($_POST['regSubmit'])) {
            return view('home.registration');
        }
        if ($_POST['age'] < 18) {
            return view('home.registration', array('error' => "Контент 18+"));
        }
        if ($_POST['password'] !== $_POST['passwordConf']) {
            return view('home.registration', array('error' => "Пароли не совпадают"));
        }

        return view('home.userinfo', array('login' => $_POST['login'], 'age' => $_POST['age'], 'email' => $_POST['email']));
    }
}