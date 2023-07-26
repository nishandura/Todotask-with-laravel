    @extends('layouts.app')
    @section('content')
      <div class="container mb-4">
       <div class="card text-left">
         <div class="card-body">
           <h4 class="card-title">Create Task</h4>
           <a name="" id="" class="btn btn-primary btn-sm" href="{{route('task.index')}}" role="button">ManageTask</a>
           <div class="row">
            <form action="{{route('task.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="">Task Tittle</label>
                      <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                      <label for="">Task Description</label>
                      <input type="text" name="desc" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    
                    </div>
                    <button class="btn btn-outline-primary" type="submit">Submit</button>            
                  </div>
            </form>
          </div>
         </div>
       </div>
      </div>
      @endsection
   