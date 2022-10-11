<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{url('/')}}/register" method="post">
        @csrf
        <div class="container">
            <h1 class="text-center">
                Registration
            </h1>
            <div class="form-group">
              <label for="">Name:</label>
              <input type="text" name="name" id="" class="form-control" placeholder="Enter your name">
              <span class="text-denger">
              @error('name')
                  {{$message}}
              @enderror
              </span>
            </div>
            <div class="form-group">
              <label for="">Email:</label>
              <input type="email" name="email" id="" class="form-control" placeholder="Enter your email">
              <span class="text-denger">
              @error('email')
                  {{$message}}
              @enderror
              </span>
            </div>
            <div class="form-group">
              <label for="">Phone:</label>
              <input type="number" name="phone" id="" class="form-control" placeholder="Enter your phone number">
              <span class="text-denger">
              @error('phone')
                  {{$message}}
              @enderror
              </span>
            </div>
            <div class="form-group">
              <label for="">Password:</label>
              <input type="password" name="password" id="" class="form-control" placeholder="Enter your password">
              <span class="text-denger">
              @error('password')
                  {{$message}}
              @enderror
              </span>
            </div>
            <div class="">
              <label for="">Confirm Password:</label>
              <input type="password" name="password_" id="" class="form-control" placeholder="Re-type password">
              <span class="text-denger">
              @error('password_')
                  {{$message}}
              @enderror
             </span>
            </div>
            <h2 class="text-center"><button class="btn btn-primary" type="submit">SUBMIT</button></h2>
        </div>
    </form>
  </body>
</html>