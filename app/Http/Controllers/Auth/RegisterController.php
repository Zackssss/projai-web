<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\User;
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
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        /*$user = [
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'centre' => $request->input('centre'),
            'mail' => $request->input('mail'),
            'password' => $request->input('password'),
        ];*/
        $user = new User;
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->centre = $request->input('centre');
        $user->mail = $request->input('mail');
        $user->password = $request->input('password');
        return json_encode($user);
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
