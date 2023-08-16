<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Creation</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class='col-sm-6'>
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label"><h5>Name</h5></label>
                        <input type="text" name="name" id="name" class="form-control">
                        @error('name')
                         <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="city" class="form-label"><h5>City</h5></label>
                        <input type="text" name="city" id="city" class="form-control">
                        @error('city')
                         <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="marks" class="form-label"><h5>Marks</h5></label>
                        <input type="number" name="marks" id="marks" class="form-control" min='0' max="100">
                        @error('marks')
                          <span>{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <br>
                @if (session()->has('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}};
                </div>
                @endif
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
