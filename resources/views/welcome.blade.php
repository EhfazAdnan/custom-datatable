<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <title>Laravel</title>
    </head>
    <body>
        <div id="app" class="container p-5">
            <div class="row">

               <div class="col-md-3">
                @if (Route::has('login'))
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="/">Menu</a></li>
                        @auth
                            <li class="list-group-item"><a href="{{ url('/home') }}">Home</a></li>
                        @else
                            <li class="list-group-item"><a href="{{ route('login') }}">Login</a></li>

                            @if (Route::has('register'))
                            <li class="list-group-item"><a href="{{ route('register') }}">Register</a></li>
                            @endif
                        @endauth
                        <li class="list-group-item"><a href="/pagination">Work One</a></li>
                    </ul>
                @endif
               </div>
               <div class="col-md-9">

                <table class="table table-striped">

                    <thead>
                        <tr>
                        <th ># </th>
                        <th >Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr>
                        <td>1</th>
                        <td>Demo Name</th>
                        <td>Demo Email</th>
                        <td>Demo Role</th>
                        </tr>
                       
                    </tbody>
                    
                </table>
               </div>
            </div>
        </div>
        <script src="js/app.js"></script>

    </body>
</html>
