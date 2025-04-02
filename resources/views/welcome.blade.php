<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
            <div class="card-body text-center">
                <h2 class="mb-3">Registration</h2>
                <p class="text-muted">Fill out the form carefully for registration</p>
                <form method="POST" action="{{ route('form.submit') }}">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mb-3 text-start">
                        <label for="newusername" class="form-label">Username</label>
                        <input type="text" id="newusername" name="newusername" class="form-control" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label for="newpassword" class="form-label">Password</label>
                        <input type="password" id="newpassword" name="newpassword" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>
