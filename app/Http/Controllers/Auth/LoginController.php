<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     *
     * @param Request $request
     * @return mixed
     * @throws GuzzleException
     */

    public function callJson(Request $request){
        $client = new Client();
        $userJson = [
            'mail' => $request->input('mail'),
            'mdp' => $request->input('mdp'),
];
        $response = $client->request('POST', 'localhost:8080/users/login', ['headers' => [
            'Accept' => 'application/json'
        ],
            'json' => $userJson]);
        $datas = json_decode($response->getBody(), false, 512);
        $_SESSION['user'] = json_decode ($datas -> user, false, 512);
        return $datas -> user;
    }

}
