@extends('layouts.app')
@section('content')
      <div class="container mb-4">
       <div class="card text-left">
         <div class="card-body">
           <h4 class="card-title">Edit Task</h4>
           <div class="row">
            <form action="{{route('task.update',$task->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
              @csrf
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="">Task Tittle</label>
                      <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$task->title}}">
                    </div>
                    <div class="form-group">
                      <label for="">Task Description</label>
                      <input type="text" name="desc" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$task->desc}}"">
                    
                    </div>
                    <button class="btn btn-primary btn-sm link-info" type="submit">Submit</button>            
                  </div>
            </form>
          </div>
         </div>
       </div>
      </div>
  @endsection