<!DOCTYPE html>
<html>
<head>
    <title>Modifier le contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Modifier le contact</h2>
    <hr>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contact_update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nom</label>
            <input type="text" name="name" value="{{ $contact->name }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $contact->email }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Téléphone</label>
            <input type="text" name="contact" value="{{ $contact->contact }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Objet</label>
            <input type="text" name="object" value="{{ $contact->object }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Message</label>
            <textarea name="message" class="form-control">{{ $contact->message }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Mettre à jour</button>
    </form>
</div>
</body>
</html>
