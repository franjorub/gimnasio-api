<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\User;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            return redirect()->intended('dashboard'); //redirecciona a la main page
        }
        return view('usuario.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if($user->id_rol == 1){
            return view('usuario.create');
        };
        
        return redirect('/'); // si no es admin lo redirecciona a home
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->all();

        if (User::where('email', '=', $data['email'])->exists()) {
            // user found
            return redirect('/usuario/nuevo'); //correo existe
        }else{

            if(strcmp($data['password'],$data['password_confirm'])  != 0){

                return redirect('/usuario/nuevo'); //contraseñas iguales

            }else{
                User::create([
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'nombre'=> $data['nombre'],
                    'apellido' => $data['apellido'],
                    'id_rol' => $data['rol']
                ]);

                return redirect('/usuario/nuevo');
            }


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

        /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        $table = 'usuario';
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user();
            return redirect()->intended('dashboard');
        }else{
            return view('usuario.index'); //email o contraseña incorrectos
        }
    }


    public function logout(){
        Auth::logout();
        return redirect('login');
    }

}