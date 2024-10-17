<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim - Bootstrap ile Detaylı Site</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Web Sitem</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Ana Sayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Hakkında</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">İletişim <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>İletişim</h1>
        <p>Bizimle iletişime geçmek için aşağıdaki formu doldurun.</p>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Formdan gelen verileri al
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            // Verileri dosyaya kaydet
            $data = "Ad: $name\nE-posta: $email\nMesaj: $message\n\n";
            file_put_contents('messages.txt', $data, FILE_APPEND | LOCK_EX);

            echo "<div class='alert alert-success'>Mesajınız  Veri Tabanına Eklenmiştir!</div>";
        }
        ?>

        <form method="post" action="">
            <div class="form-group">
                <label for="name">İsim Soyad:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">E-posta adresiniz:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Mesajınız:</label>
                <textarea id="message" name="message" class="form-control" required></textarea>
            </div>
            <button class="btn btn-primary">Gönder</button>
        </form>
    </div>

    <footer class="bg-light text-center py-4">
        <p>&copy; 2023 Web Sitem. Tüm hakları saklıdır.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>