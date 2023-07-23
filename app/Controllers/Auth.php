<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Cookie\Cookie;

class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to(site_url('login'));
    }

    public function login()
    {

        //Get Cookies
        // $this->response->setCookie('abc', "abc", 3600);
        // $request = service('request');

        // $accessToken = $request->getCookie('abc');

        // // Check if the 'access_token' cookie exists and has a value
        // if (!empty($accessToken)) {
        //     // Use the $accessToken variable as needed
        //     // For example, you can echo it or use it in API calls
        //     echo $accessToken;
        // } else {
        //     // Cookie not found or has no value
        //     echo 'Cookie not found or has no value.';
        // }

        // //Delete Cookie

        // helper('cookie');
        // delete_cookie('abc');

        return view('auth/login');
    }

    public function loginProcess()
    {
        $url = 'https://api.bpkad.jatimprov.go.id/login';
        $headers = array('Content-Type: application/json');

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $remember = $this->request->getPost('remember');

        $data = array(
            'username' => $email,
            'password' => $password,
            'aplikasi' => 'PAD',
            'tahun' => 2023
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            // Handle cURL error
            echo 'cURL error: ' . curl_error($ch);
        }

        curl_close($ch);

        $apiResponse = $response;

        // Extract the token from the API response
        $user = json_encode($apiResponse);
        $expires_in = json_decode($apiResponse)->expires_in;

        $this->response->setCookie('user', $user, $expires_in);

        return redirect()->to('/')->withCookies();
    }

    public function logout()
    {
        helper('cookie');
        delete_cookie('user');

        return redirect()->to('/login')->withCookies();
    }
}
