    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.87.0">
        <meta name="description" content="Esto es un login de Laravel, con factories">
        <meta name="author" content="David Cruz">
        <meta name="semestre" content="Cuarto semestre">
        <meta name="programa" content="Tecnologia desarrollo de software">
        <meta name="profesor" content="Mario Porras Porras">
        <title>Registration Template · Bootstrap v5.1</title>

        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>


        <style>
            body {
                background-color: #f8f9fa;
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
            .form-signin input[type="text"],
            .form-signin input[type="password"] {
                height: 50px;
                font-size: 16px;
            }

            .form-signin input[type="email"],
            .form-signin input[type="text"] {
                margin-bottom: 10px;
                border-radius: 25px;
            }

            .form-signin input[type="password"] {
                margin-bottom: 10px;
                border-radius: 25px;
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
        <main class="form-signin">
            <form action="{{ route('auth.register') }}" method="POST">
                @csrf
                <img class="mb-4" src="/image.png" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Crea tu Cuenta </h1>

                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}" id="email" name="email" placeholder="name@example.com">
                    <label for="email">Correo</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}" id="name" name="name" placeholder="Your Name">
                    <label for="name">Nombre</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        id="password" placeholder="Password">
                    <label for="password">Contraseña</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                        name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                    <label for="password_confirmation">Confirma Contraseña</label>
                    @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="agree-to-terms"> Aceptas terminos y Condiciones
                    </label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Crear Cuenta</button>
            </form>
        </main>
    </body>

    </html>
