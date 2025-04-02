<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4 text-center">
            <h2>Welcome, {{ session('username') }}</h2>
            

            @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif

            <p class="mt-3">You have successfully registered.</p>
            <p class="text-muted">Email: {{ session('email') }}</p>
            <a href="/" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</body>
</html>
