<!DOCTYPE html>
<html>
<head>
    <title>Liste des Contacts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Liste des Contacts</h2>
        <hr>
    @if (session('success'))
        <div style="background-color: greenyellow;">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Objet</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->contact }}</td>
                    <td>{{ $contact->object }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>
                        <a href="#" class="btn btn-primary">Update</a>
                        <form action="{{ route('contact_destroy', $contact->id) }}";  method="POST";  style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html></tr>