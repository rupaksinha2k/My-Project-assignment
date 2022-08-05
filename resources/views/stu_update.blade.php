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
            <H1> student Update details</H1>
            <hr>
        @if(Session::has('message'))

        <div class ="alert alert-success">

            {{Session::get('message')}}
        </div>
        @endif

        <form action ="" method="POST">
@csrf  

@method('PUT')


<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}">
    
</div>
  
<div class="mb-3">
    <label for="phone" class="form-label">phone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{$data->phone}}">
</div>
      
  <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}">
  </div>
  
  <input type="submit" class="btn btn-primary" value="student_update">Click for new admission...!!!
</form>

        </div>
        
       </div>
    </div>
</body>
</html>