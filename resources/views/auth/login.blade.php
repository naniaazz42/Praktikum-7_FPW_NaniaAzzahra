<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    <div>
        @if ($errors->any())
            <div style="color: red;">
                {{ $errors->first() }}
            </div>
        @endif
    </div>

    <div>
        <h1>Login</h1>
        <form action="{{ route('login.post') }}" method="post">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>

        <p style="margin-top: 10px;">
            Belum punya akun? 
            <a href="{{ route('register') }}">
                <button style="padding: 6px 12px; margin-left: 5px;">Daftar</button>
            </a>
        </p>
    </div>
</body>
</html>
=======
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login.post') }}">
        @csrf
        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Login</button>
    </form>

    <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
</body>
</html>
>>>>>>> origin/main
