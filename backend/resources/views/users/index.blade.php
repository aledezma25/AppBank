<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Users</title>
</head>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('successdelete'))
    <div class="alert alert-danger">
        {{ session('successdelete') }}
    </div>
@endif
<body>
    <div class="container text-center">
        <h1>Registrar usuario</h1>
        <br>
        <form action="{{route('usuarios.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Ingrese su nombre:
                <input type="text" name="name" id="name" placeholder="Nombre" class="form-control" required></label>
            </div>
            <div class="form-group">
                <label for="name">Ingrese su apellido:
                <input type="text" name="last_name" id="last_name" placeholder="Apellido" class="form-control" ></label>
            </div>
            <div class="form-group">
                <label for="phone">Ingrese su telefono:
                <input type="text" name="phone_number" id="phone_number" placeholder="Telefono" class="form-control" ></label>
            </div>
            <div class="form-group">
                <label for="email">Ingrese su Email:
                <input type="text" name="email" id="email" placeholder="Email" class="form-control" ></label>
            </div>
            <div class="form-group">
                <label for="password">Password:
                <input type="password" name="password" id="password" placeholder="Password" class="form-control" ></label>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password:
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="form-control" ></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </form>
    </div>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <form action="{{route('usuarios.destroy', $user->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                            <a href="{{route('usuarios.edit', $user->id)}}" class="btn btn-warning">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    

</body>
</html>