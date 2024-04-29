<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</head>

<body>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" @vite('resources/css/app.css')>
        <meta name="description" content="Esto es un login de Laravel, con factories">
        <meta name="author" content="David Cruz">
        <meta name="semestre" content="Cuarto semestre">
        <meta name="programa" content="Tecnologia desarrollo de software">
        <meta name="profesor" content="Mario Porras Porras">
        <meta>
        <title>Signin Template · Bootstrap v5.1</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

        <style>
            body {
                background-color: rgba(24, 92, 92, 0.76);
            }

            .form-signin {
                max-width: 330px;
                padding: 15px;
                margin: auto;
            }

            .form-signin .checkbox {
                font-weight: 400;
            }

            .form-signin .form-floating:focus-within {
                z-index: 2;
            }

            .form-signin input[type="email"],
            .form-signin input[type="password"] {
                height: 50px;
                font-size: 16px;
            }

            .form-signin input[type="email"] {
                width: 300px;
                margin-bottom: -1px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }

            .form-signin input[type="password"] {
                margin-bottom: 10px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }

            .form-signin img {
                margin-bottom: 20px;
            }

            .form-signin button {
                height: 50px;
                font-size: 18px;
                border-radius: 25px;
            }

            .form-signin p {
                margin-top: 20px;
                font-size: 14px;
            }
        </style>

        <!-- Custom styles for this template -->
        <link href="{{ asset('/css/signin.css') }}" rel="stylesheet">
    </head>

    <body class="text-center">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 p-5 ">
                    <img src="/Laravelcon.svg" alt="Logo Laravel" class="w-[300px] h-[350px] m-auto ">
                    <h1 class="text-white text-5xl">Parcial Frameworks</h1>
                    <p class="text-white"></p>
                </div>
                <div class="col-md-6 p-5 h-screen flex justify-center items-center">
                    <!-- Formulario de inicio de sesión en el lado derecho -->
                    <main class="form-signin">
                        <form action="{{ route('auth.authenticate') }}" method="POST">
                            @csrf
                            <img src="/image.png" alt="Logo Uniminuto">
                            <h1 class="h3 mb-3 fw-normal">Inicia Sesion</h1>

                            <div class="form-floating">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" id="email" name="email"
                                    placeholder="name@example.com">
                                <label for="email">Email address</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" id="password" placeholder="Password">
                                <label for="password">Password</label>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="checkbox mb-3">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>

                            <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar Sesión</button>
                            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </body>

    </html>
