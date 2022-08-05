<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
       <div class="row">
        <div class="offset-md-2 col-md-8">
            <div d-flex justify-content-center></div>
            <H1>Dashboard -All student details</H1></div>
            <hr>
        
<table class="table">
<tbody>
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  @foreach($data as $stu)
    <tr>
      <td>{{$stu->id}}</td>
      <td>{{$stu->name}}</td>
      <td>{{$stu->phone}}</td>
      <td>{{$stu->email}}</td>
      <td>
      <a href="new_admission" class ="btn btn-secondary">New</a>
      <a href="adm_detail/{{$stu->id}}" class ="btn btn-secondary">View</a>
      <a href="stu_update/{{$stu->id}}" class ="btn btn-primary">Edit</a>
      <a href="stu_delete/{{$stu->id}}" class ="btn btn-primary">Del</a>
    </td>
    </tr>

  @endforeach
</tbody>
</table>

        </div>
        
       </div>
    </div>
    <a href="/" class="btn btn-info" role="button" >Home</a>
</body>
</html>