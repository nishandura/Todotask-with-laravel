
    @extends('layouts.app')
    @section('content')
    <x-notify::notify />
      <div class="container">
        <div class="row">
           <div class="card text-left">
             <a name="" id="" class="btn btn-primary" href="{{route('task.create')}}" role="button">CreateTask</a>
             <a name="" id="" class="btn btn-success" href="{{route('createpdf')}}" role="button">Generate PDF</a>
             <div class="card-body">
               <h4 class="card-title">Manage Task</h4>
               <table class="table">
                <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Task</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($task as $t)
                    <tr>
                        <td scope="row">{{$loop->iteration}}</td>
                        <td>{{$t->title}}</td>
                        <td>{{$t->desc}}</td>
                        <td>
                            <a name="" id="" class="btn btn-primary btn-sm" href="{{route('task.edit',$t->id)}}" role="button">Edit</a>
                            {{-- <a name="" id="" class="btn btn-danger btn-sm" href="{{route('task.destroy',$t->id)}}" role="button">Delete</a> --}}
                        
                              <form action="{{route('task.destroy',$t->id)}}" method="POST" enctype="multipart/form-data">
                                @method('delete')
                              <button type="submit" class="btn btn-danger btn-sm link-info">Delete</button>
                              @csrf
                              </form>
                            </button>
                            <!-- Button trigger modal -->
                            {{-- <button type="button" class="btn btn-danger btn-sm link-info" data-toggle="modal" data-target="#modelId">
                              Delete
                            </button> --}}
                            
                            <!-- Modal -->
                            {{-- <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Are you sure you want to delete</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                    Body
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    <form action="{{route('task.destroy',$t->id)}}" method="POST" enctype="multipart/form-data">
                                      @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    @csrf
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div> --}}
          
                          </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
             </div>
           </div>
        </div>
      </div>
      @endsection
    