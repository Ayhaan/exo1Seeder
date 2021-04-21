<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class UtilisateurController extends Controller
{
    // READ index & show
    public function index(){
        $users = Utilisateur::all();
        return view('admin.users.indexUser', compact('users'));
    }

    public function show(Utilisateur $id){
        $user = $id;
        return view('admin.users.showUser', compact('user'));
    }
    
    //DELETE
    public function destroy(Utilisateur $id){
        $id->delete();
        return redirect()->route('users.index');
    }

    public function destroyAll(){
        Utilisateur::truncate();
        return redirect()->route('users.index');
    }

    //CREATE STORE
    public function create(){
        return view('admin.users.createUser');
    }

    public function store(Request $request){
        $user = new Utilisateur();
        $user->nom =  $request->nom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->tel = $request->tel;
        $user->save();
        return redirect()->route('users.index');

        
            ////BONUS
            // // dump($request->all());
            // foreach($request->all() as $key => $value) {
            //     // dump($key . ' => ' . $value) . "<br/>";
            //     if(($key != "_token")){
            //         $user->$key = $value; 
            //     }
            // }
    }

    //EDIT UPATE
    public function edit(Utilisateur $id){
        $user = $id;
        return view('admin.users.editUser', compact('user'));
    }

    public function update(Utilisateur $id, Request $request){
        $user = $id;
        $user->nom =  $request->nom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->tel = $request->tel;
        $user->save();
        return redirect()->route('users.index');
    }
}
