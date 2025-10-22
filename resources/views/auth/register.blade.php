<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        <h1>Register</h1>
        <form action="{{ route('register.post') }}" method="post">
            @csrf
            <div>
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <label for="password_confirmation">Konfirmasi Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit">Daftar</button>
        </form>

        <p>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
    </div>

</body>
</html>
=======
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form method="POST" action="{{ url('/register') }}">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="name"><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br>

        <label>Konfirmasi Password:</label><br>
        <input type="password" name="password_confirmation"><br><br>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>
>>>>>>> origin/main
