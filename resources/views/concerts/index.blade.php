<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Concert List</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    </head>
    <body class="container mt-4">
        <div class="text-center">
          <h1>Concert List</h1>
        </div>
        <div class="container mt-4">
          
            <form class="form-inline" action="" method="GET">
              <div class="form-group mb-2">
                <input name="band" type="text" class="form-control" id="staticEmail2" placeholder="band name....">
              </div>
              <div class="form-group mx-sm-3 mb-2">
                <label for="inputPassword2" class="sr-only">City</label>
                <input name="city" type="text" class="form-control" id="inputPassword2" placeholder="city name...">
              </div>
              <button type="submit" class="btn btn-primary mb-2">Filter</button>
            </form>
            
            <hr>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Band</th>
                    <th scope="col">Venue</th>
                    <th scope="col">City</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($concerts as $concert)
                    <tr>
                      <th scope="row">1</th>
                      <td>{{$concert->title}}</td>
                      <td>{{$concert->venue}}</td>
                      <td>{{$concert->city}}</td>
                      <td>{{$concert->date}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            {{-- <div class="mt-4">
              {{$concerts->links()}}
            </div> --}}
        </div>
    </body>
</html>
