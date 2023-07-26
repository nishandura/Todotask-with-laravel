<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    th,td,table{
      border: 2px solid black;
      padding: 0px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
       <div class="card text-left">
         <div class="card-body">
           <h4 class="card-title">Task Details</h4>
           <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Task</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
              @foreach($task as $t)
                <tr>
                    <td scope="row">{{$loop->iteration}}</td>
                    <td>{{$t->title}}</td>
                    <td>{{$t->desc}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
         </div>
       </div>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
     

