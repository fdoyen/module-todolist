<?php

namespace Modules\Todo\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Todo\Entities\Todo;
use Illuminate\Http\Response;

class TodoController extends Controller
{
    public function all($id){
        return view('todo::home.all', ['todo' => Todo::where('user_id', $id)->get()]);
    }

    public function getOne($id){
        $response = [
            "todo" => Todo::find($id),
            "user" => Todo::find($id)->user,
            "code" => 200
        ];
        return new Response($response, 200);
    }

    public function create(Request $request){
        $todo = new Todo();
        $todo->name = $request->post('name');
        $todo->description = $request->post('description');
        $todo->user_id = $request->post('user_id');
        $todo->save();
    }

    public function update(Request $request, $id){
        $todo = Todo::find($id);
        $todo->name = $request->post('name');
        $todo->description = $request->post('description');
        $todo->user_id = $request->post('user_id');
        $todo->save();
    }

    public function form($id = null){
        if($id !== null){
            $todo = Todo::find($id);
            return view('todo::components.todoform', ['todo' => $todo]);
        }else{
            return view('todo::components.todoform');
        }
    }

    public function delete($id){
        $todo = Todo::find($id);
        $todo->delete();
        $todo = Todo::all();
        return view("todo::home.all", ['message' => 'Supprimé avec succès', 'todo' => $todo]);
    }
}
