<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests\createTaskRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;

class TasksController extends Controller
{
  //подключ файл валидации. trait
   use ValidatesRequests;

    public function index()
    {
      $tasks = Task::all();
      return view('tasks.index', ['tasks'=>$tasks]);
    }

    public function create()
    {
      return view('tasks.create');
    }

    public function store(createTaskRequest $request)
    {
//упростили эту часть кода и подключ отдельн файл createTaskRequest
      // $this->validate($request, [
      //   'title'       => 'required',
      //   'description' => 'required'
      // ]);
      //сокращен версия $task->fill($request->all());
      Task::create($request->all());
             //показать все
            // dd($request->all());

            //для больших объемов данных
            // $task = new Task;
            // $task->fill($request->all());
            // $task->save();


            //если немного записей то так, если много то $fillable
            // $task->title = $request->get('title');
            // $task->description = $request->get('description');
            // dd($task);
            // $task->save();

               //возвращ на главную
            return redirect()->route('tasks.index');
    }

    public function edit($id)
    {
      $myTask = Task::find($id);

      return view('tasks.edit', ['task' => $myTask]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'title'       => 'required',
        'description' => 'required'
        ]);
        
      $myTask = Task::find($id);

      $myTask->fill($request->all());
      $myTask->save();

      return redirect()->route('tasks.index');
    }

    public function show($id)
    {
      $myTask = Task::find($id);

      return view('tasks.show', ['task' => $myTask]);
    }


    public function destroy($id)
    {
      Task::find($id)->delete();

      return redirect()->route('tasks.index');
    }
}
