<?php

namespace App\Middleware;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\Exceptions\HTTPException;

class TokenCheck implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $request = service('request');
        $user = $request->getCookie('user');

        // Perform your token validation here
        if (empty($user) || !$this->isValidToken($user)) {
            // If the token is invalid, return a 401 Unauthorized response
            return redirect()->to(site_url('login'));
        }

        // Token is valid, continue with the request
        return $request;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // You can perform additional actions after the response has been sent here if needed.
        // This method is optional for the FilterInterface implementation.
    }

    // Replace this with your actual token validation logic
    private function isValidToken($token)
    {
        // Example validation logic, check if the token is not empty
        return !empty($token);
    }
}
