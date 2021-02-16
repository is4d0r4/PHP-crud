<?php

namespace App\Http\Controllers;

use App\NewUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   
    // public function listUser(Request $request)
    // {
    //     $login = $request;
    //     $insert =$this->$nome->insert($login);

    //     if($insert)
    //     // return redirect()->route('');
    //     // $user = new NewUser();
    //     // $user->nome = a;
    //     // $user->telefone= a;
    //     // $user->email= a;
    //     // $user->save();

    //     echo "<h1>Listagem de Usuário</h1>";
    // }


    public function redireciona()
    {
        return view('inserir_contato');
    }

    public function aparecer()
    {
        $dados = NewUser::all();
        return view('agenda', compact ('dados'));
    }

    public function voltar()
    {
        return view('welcome');
    }

    public function tabelaparainicio()
    {
        return view('welcome');
    }

    public function insert(Request $request)
    {
        $dados = [
       'nome'=>$request->nome,
       'telefone'=>$request->telefone,
       'email'=>$request->email,
        ];
        NewUser::insert($dados);
        return view('welcome');

    }

    public function view(Request $request)
    {

        $dados = NewUser::all();
        return view('agenda', compact ('dados'));

    }

    public function delete ($id)
    {
        $delete = NewUser ::find($id);
        $delete->delete();
        return redirect()->back();
    }
    
    public function editar ($id)
    {
        $registros=NewUser ::find($id);
        return view ('inserir_contato', compact ('registros'));
    }
    
    public function update(Request $request, $id)
    {
       
        $registros = [
       'nome'=>$request->nome,
       'telefone'=>$request->telefone,
       'email'=>$request->email,
        ];
      NewUser::find($id) -> update($registros);

      $dados=NewUser::all();
   
        return redirect()->route('dadosdobanco.view',compact('dados'));

    }
}




