<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TropiSweet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: linear-gradient(135deg, #b7e5ff 0%, #e8f9ff 100%);
            font-family: 'Poppins', sans-serif;
        }

        main {
            flex: 1; 
        }
    </style>
</head>
<body>

    <x-navbar />

    <main class="container py-4">
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
