<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $tasks=Task::all();
        // return view('tasks.index',compact('tasks'));
        $tasks = Task::all();
        // dd('dddd');
        return view('tasks.index', compact('tasks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd('ss');
        // $request->validate([
        //     'username' => 'username',
        //     'password' => 'password',
        //     'name' => 'name',
        //     'email' => 'email',
        //     'birth_date' => 'birth_date',
        //     'age' => 'age',
        //     'picture' => 'picture'
        // ]);

        $task=Task::create([
            'username' => $request->username,
            'password' => $request->password,
            'name' => $request->name,
            'email' => $request->email,
            'birth_date' => $request->birth_date,
            'age' => $request->age,
            'picture' => $request->picture
        ]);

        return redirect(url('index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
        return view('index.show',compact('task',$task));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       
        $task = Task::find($id);
        // dd($task);
        return view('tasks.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //

        
        // $request->validate([
        //     'username' => 'username',
        //     'password' => 'password',
        //     'name' => 'name',
        //     'email' => 'email',
        //     'birth_date' => 'birth_date',
        //     'age' => 'age',
        //     'picture' => 'picture'
        // ]);

        $task = Task::find($id);

        // dd($task);

        $task->username = $request->username;
        $task->password = $request->password;
        $task->name = $request->name;
        $task->email = $request->email;
        $task->birth_date = $request->birth_date;
        $task->age = $request->age;
        $task->picture = $request->picture;

        $task->update();
        $request->session()->flash('massage','อัพเดตสำเร็จ!!');
        // return redirect('index');
        return redirect(url('index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
        $task = Task::find($id);
        // dd($task);
        $task->delete();
        $request->session()->flash('massage','ลบข้อมูลสำเร็จ!!');
        return redirect(url('index'));

    }
}
