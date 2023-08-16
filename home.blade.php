<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Home</title>

    <style>
        span{
            color: red;
        }
        button{
            width: 20%;
            margin-left: 35%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{'create'}}>Create</a>
              </li>
            </div>
        </div>
    </nav>

            <div class='col-sm-6'>
                <table class="table table-hover">
                    <thead>
                      <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Name</th>
                          <th scope="col">City</th>
                          <th scope="col">Marks</th>
                          <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($std as $std)
                        <tr>
                            <th>{{$std->id}}</th>
                            <td>{{$std->name}}</td>
                            <td>{{$std->city}}</td>
                            <td>{{$std->marks}}</td>
                            <td><a href={{url('edit',$std->id)}} class='btn btn-info'>Edit</a></td>
                            <td><a href={{url('delete',$std->id)}} class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
