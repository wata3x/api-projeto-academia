<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de login</title>
    <!--bootstrap-->
    <link rel="stylesheet"  type="text/css" href="css/app.css">

</head>
<body>
    <div class="container" >
        <div class="row" >
            <div class="col-md-4 col-md-offset-4 text-center">
                <h1>Página de Login</h1>
                <pre>{{ var_dump($errors) }}</pre>
                <pre>{{ var_dump(session('Falhou')) }}</pre>
                <form action="/login" method="post">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control input-lg">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control input-lg">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn btn-success btn-lg">
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
