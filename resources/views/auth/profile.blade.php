<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Beranda</title>
</head>
<body class="container mt-4">
    <div class="row justify-content-end">
        <!-- Profile -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Profile</h5>
                    <p class="card-text">Name: {{ Auth::user()->name }}</p>
                    <p class="card-text">Email: {{ Auth::user()->email }}</p>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-block">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- List CRUD -->
    <div class="text-center mt-4">
        <h3>List Table CRUD Joss Laundry</h3>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Diri</h5>
                        <p class="card-text">Add a description or any relevant information about Data Diri.</p>
                        <a href="/datadiri" class="btn btn-primary btn-block">View Data Diri</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Laundry</h5>
                        <p class="card-text">Add a description or any relevant information about Laundry.</p>
                        <a href="/laundry" class="btn btn-primary btn-block">View Laundry</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pembayaran</h5>
                        <p class="card-text">Add a description or any relevant information about Pembayaran.</p>
                        <a href="/pembayaran" class="btn btn-primary btn-block">View Pembayaran</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
