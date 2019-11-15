<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\User;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;
    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'centre' => ['required', 'string', 'max:255'],
            'mail' => ['required', 'string', 'mail', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'PdC' => ['required']
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'centre' => $data['centre'],
            'mail' => $data['mail'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function store(Request $request)
    {
        $user = ['nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'centre' => $request->input('centre'),
            'mail' => $request->input('mail'),
            'mdp' => $request->input('mdp'),
            'role' => 'etudiant'];
        return json_encode($user);



    }

    /**
     * Create a new user instance after a valid registration.
     *
     *
     * @param Request $request
     * @throws GuzzleException
     */

    public function callJson(Request $request){
        $client = new Client();
        $userJson = ['nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'centre' => $request->input('centre'),
            'mail' => $request->input('mail'),
            'mdp' => $request->input('mdp'),
            'role' => 'etudiant'];

        $response = $client->request('POST', 'localhost:8080/users/register', ['headers' => [
            'Accept' => 'application/json'
        ],
            'json' => $userJson]);
        return json_encode($userJson);
        }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return new User($user);
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        return new User($user);
    }
}
