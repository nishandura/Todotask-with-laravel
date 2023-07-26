<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use PDF;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = new Task();
        $task = $task->get();
        return view('tasks.index',compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task();
        $task->title = $request->title;
        $task->desc = $request->desc;
        $task->save();
        notify()->success('Task is added');
        return redirect('task');
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
        $task = new Task();
        $task = $task->where('id',$id)->first();
        return view('tasks.edit',compact('task'));
        notify()->success('Task is edited');
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
        $task = new Task();
        $task = $task->where('id',$id)->first();
        $task->title = $request->title;
        $task->desc = $request->desc;
        $task->update();
        notify()->success('Task is updated');
        // return view('tasks.index');
        return view('tasks.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $task = new Task;
        $task = $task->where('id',$id)->first();
        $task->delete();
        notify()->success('Task is deleted');
        return view('tasks.create');
    }
    public function createpdf(){
        $task = new Task();
        $task = $task->all();
        $pdf = PDF::loadView('tasks.generatepdf',['task' => $task])->setOptions(['defaultFont'=>'sans-serif']);
        return $pdf->download('tasks.pdf');
    }
}
