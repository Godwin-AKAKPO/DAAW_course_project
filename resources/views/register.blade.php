<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/register" method="POST">
        @csrf
        <label>Nom :</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br>

        <label>Email :</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br>

        <label>Mot de passe :</label><br>
        <input type="password" name="password"><br>

        <label>Confirmer le mot de passe :</label><br>
        <input type="password" name="password_confirmation"><br><br>

        <button type="submit">S'inscrire</button>
    </form>

    <p>Déjà un compte ? <a href="/login">Se connecter</a></p>
</body>
</html>
