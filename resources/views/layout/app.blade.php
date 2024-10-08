<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Landing Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="bg-dark text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Hello, I'm a Full Stack Developer</h1>
            <p class="lead">I build modern web applications and solve complex problems.</p>
            <a href="#portfolio" class="btn btn-primary btn-lg">View My Work</a>
        </div>
    </header>

    <main class="py-5">
        <section id="portfolio" class="container">
            <h2 class="text-center mb-5">My Projects</h2>
            <div class="row">
                @yield('content')
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 IT Programmer Portfolio</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
