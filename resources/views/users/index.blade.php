    </div><!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">    

        <title>Bauti Page</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>


        <style>
         
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 mx-auto">

                <table class="tabla">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                             @csrf
                             @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" 
                            onclick="return confirmDelete()">Eliminar
                            </button>
                            </form>
                            </form>
                                 <script>
                                  function confirmDelete()
                                   { 
                                    return confirm('¿Está seguro que desea eliminar este registro?');
                                    }
                                    </script>
                            </td>
                        </tr>
                        @endforeach()
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </body>
</html>