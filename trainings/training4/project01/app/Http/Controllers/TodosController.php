<?php
//名前空間（エイリアス）自動読み込みを行えるようにしている
namespace App\Http\Controllers;

//エイリアスを省略,同時にファイルの依存関係も明白に宣言
use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index() {
        $todos = Todo::all();
        return view('todos.index')->with('todos',$todos);
    }

    public function store(Request $request) {
        $todo = new Todo();
        $todo->body = $request->body;
        $todo->save();
        return redirect('/');
    }

    public function destroy(todo $todo) {
        $todo->delete();
       return redirect('/');
     }

    public function edit(todo $todo) {
        return view('todos.edit')->with('todo',$todo);
    }

    public function update(Request $request,todo $todo) {
        $todo->body = $request->body;
        $todo->save();
        return redirect('/');
    }
}
