<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
   <form action="{{route('submit')}}" method="post">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-4 ">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4"name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group col-md-6 ">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder=" " name="address">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state">
        <option selected>Choose...</option>
        <option>Pokhara </option>
        <option>Kathmandu </option>
      </select>
    </div>
</div>

  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
  
  </body>
</html>