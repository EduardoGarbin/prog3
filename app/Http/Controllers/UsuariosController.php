<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;


class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::orderBy('id', 'asc')->get();

        return view('usuarios.index', ['usuarios' => $usuarios, 'pagina' => 'usuarios']);
    }

    public function create()
    {
        return view('usuarios.create', ['pagina' => 'usuarios']);
    }

    public function insert(Request $form)
    {
        $usuario = new Usuario();

        $usuario->name = $form->nome;
        $usuario->email = $form->email;
        $usuario->username = $form->usuario;
        $usuario->password = Hash::make($form->senha);

        $usuario->save();


        event(new Registered($usuario));
        //return redirect()->route('usuarios.index');
        $this->login($form);
        return redirect()->route('verification.notice');
    }

    // Ações de login
    public function login(Request $form)
    {
        // Está enviando o formulário
        if ($form->isMethod('POST')) {
            // para a página anterior
            $credenciais = $form->validate([
                'username' => ['required'],
                'password' => ['required'],
            ]);
            if (Auth::attempt($credenciais, $form->lembra == "meubau")) {
                session()->regenerate();
                return redirect()->route('home');
            } else {
                return redirect()->route('login')->with('erro', 'Usuário ou senha inválidos.');
            }
        }
        return view('usuarios.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}
