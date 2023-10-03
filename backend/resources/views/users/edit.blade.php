<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Editar Usuarios</title>
</head>
<body>
    <div class="container text-center">
        <h1>Editar usuario</h1>
        <br>
        <form action="{{route('usuarios.update', $user->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Ingrese su nombre:
                <input type="text" name="name" id="name" placeholder="Nombre" class="form-control" value="{{$user ->name }}"></label>
            </div>
            <div class="form-group">
                <label for="name">Ingrese su apellido:
                <input type="text" name="last_name" id="last_name" placeholder="Apellido" class="form-control" value="{{$user ->last_name }}"></label>
            </div>
            <div class="form-group">
                <label for="phone">Ingrese su telefono:
                <input type="text" name="phone_number" id="phone_number" placeholder="Telefono" class="form-control" value="{{$user ->phone_number }}"></label>
            </div>
            <div class="form-group">
                <label for="email">Ingrese su Email:
                <input type="text" name="email" id="email" placeholder="Email" class="form-control" value="{{$user ->email }}"></label>
            </div>
            <div class="form-group">
                <label hidden for="password">Password:
                <input hidden type="password" name="password" id="password" placeholder="Password" class="form-control" ></label>
            </div>
            <div class="form-group">
                <label hidden for="password_confirmation">Confirm Password:
                <input hidden type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="form-control" ></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>