<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use App\Mail\ActivationMail;
use App\Models\UserActivate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Facade\FlareClient\Http\Response;

class AuthController extends Controller
{
    public function index()
    {
        $title = "Masuk";
        return view('auth.login', compact('title'));
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            if($request->user()->HasRole('member'))
            {
                return redirect()->intended('/home');
            }
            else
            {
                return redirect()->intended('/dashboard');
            }
        }

        return back()->with('Gagal', 'Email dan Kata sandi salah, silahkan coba lagi!');
    }

    public function register()
    {
        $title = "Registrasi";
        return view('auth.register', compact('title'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'identifier_number' => 'required|min:8|max:16|unique:users',
            'name'              =>  'required',
            'email'             =>  'email|unique:users',
            'gender'            =>  'required',
            'phone'             =>  'required|min:11|max:14',
            'subDistrict'       =>  'required',
            'address'           =>  'required',
        ]);

        $store = User::create([
            'identifier_number'     =>  $validatedData['identifier_number'],
            'name'                  =>  $validatedData['name'],
            'email'                 =>  $validatedData['email'],
            'gender'                =>  $validatedData['gender'],
            'phone'                 =>  $validatedData['phone'],
            'sub_district_id'       =>  $validatedData['subDistrict'],
            'address'               =>  $validatedData['address'],
            'password'              =>  Hash::make(Str::random()),
        ]);
        $store->assignRole('member');

        if($store == true)
        {
            $generateToken = UserActivate::create([
                'user_id' => $store->id,
                'token' => Str::random(16),
            ]);

            $token = $generateToken->token;
            Mail::send('contents.mail.activation', ['token' => $token, 'name' => $request->name], function($message) use($request){
                $message->to($request->email)->subject('Aktivasi Akun SIPMah');
            });

            return redirect('/login')->with('Berhasil', 'Registrasi berhasil
            silahkan cek email yang anda daftarkan
            untuk proses aktivasi!');
        }else{
            return back();
        }
        // dd($validatedData);
    }

    public function activation($token)
    {
        $mytoken = $token;
        $getData = UserActivate::where('token', $mytoken)->get();
        foreach($getData as $data)
        if($data->token == $mytoken)
        {
            $title = "Aktivasi Akun";
            return view('auth.activation', compact('title', 'mytoken'));
        }
        else
        {
            return abort(401);
        }
    }

    public function activate(Request $request)
    {
        $validatedData = $request->validate([
            'password'          => 'required|min:8',
            'confirmPassword'   => 'required|same:password'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $getUsers  = UserActivate::where('token', $request->token)->get();
        foreach($getUsers as $user)
        User::where('id', $user->user_id)->update([
            'password' => $validatedData['password'],
            'email_verified_at' => Carbon::now(),
        ]);
        UserActivate::where('token', $request->token)->delete();
        return redirect('/login')->with('Berhasil', 'Kata sandi berhasil diatur ulang silahkan login!');
    }

    public function forgotPassword()
    {
        $title = "Lupa Kata Sandi";
        return view('auth.forgot-password', compact('title'));
    }

    public function mailReset(Request $request)
    {
        $getData = User::where('email', $request->email)->get();
        foreach($getData as $data)
        $generateToken = UserActivate::create([
            'user_id'   =>  $data->id,
            'token'     =>  Str::random(16),
        ]);

        $token = $generateToken->token;
        Mail::send('contents.mail.forgot', ['token' => $token, 'name' => $data->name], function($message) use($request){
                $message->to($request->email)->subject('Atur Ulang Kata Sandi');
        });

        return redirect('/login')->with('Berhasil', 'Atur ulang kata sandi berhasil
                                        silahkan cek email anda!');
    }

    public function resetPassword($token)
    {
        $mytoken = $token;
        $getData = UserActivate::where('token', $mytoken)->get();
        foreach($getData as $data)
        if($data->token == $mytoken)
        {
            $title = "Ubah Kata Sandi";
            return view('auth.reset-password', compact('title', 'mytoken'));
        }
        else
        {
            return abort(401);
        }
    }

    public function changePassword(Request $request)
    {
        $validatedData = $request->validate([
            'password'          => 'required|min:8',
            'confirmPassword'   => 'required|same:password'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $getUsers  = UserActivate::where('token', $request->token)->get();
        foreach($getUsers as $user)
        User::where('id', $user->user_id)->update([
            'password' => $validatedData['password'],
        ]);
        UserActivate::where('token', $request->token)->delete();
        return redirect('/login')->with('Berhasil', 'Kata sandi berhasil diatur ulang silahkan login!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
