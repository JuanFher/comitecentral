<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(7);
        $roles = Role::all()->pluck('name', 'id');

        return view('users.index', compact('users', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'Es necesario ingresar el nombre del usuario.',
            'email.required' => 'Es necesario ingresar el email del usuario.',
            'password.required' => 'Es necesario ingresar un password de 8 caracteres.',

            
        ];

        $rules = [
            
            'name' => 'required|min:6',
            'email' => 'required',
            'password' => 'required|min:8'
            
        ];

        $this->validate($request, $rules, $messages );
        

         $user = new User;
         $user->name = $request->name;
         $user->email = $request->email;
         $user->password = bcrypt($request->password);
         $user->save();
        

        if ($user) {
           $user->assignRole($request->role);
           return back()->with('success','Usuario creado con éxito');
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $messages = [
            'name.required' => 'Es necesario ingresar el nombre del usuario.',
            'email.required' => 'Es necesario ingresar el email del usuario.',
            'password.required' => 'Es necesario ingresar un password de 8 caracteres.',

            
        ];

        $rules = [
            
            'name' => 'required|min:6',
            'email' => 'required',
            
            
        ];

        $this->validate($request, $rules, $messages );
        

         
         $user->name = $request->name;
         $user->email = $request->email;
         if ($request->password != null) {
             $user->password = bcrypt($request->password);
         }
         $user->update();
        

        if ($user) {
           $user->syncRoles($request->role);
           return back()->with('success','Usuario actualizado con éxito');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $delete = $user->delete();
        if ($delete){
            
            return back()->with('success','Usuario eliminado con éxito');
        }
    }
}
