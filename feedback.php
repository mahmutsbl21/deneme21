<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkında - Bootstrap ile Detaylı Site</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">Hakkında <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">İletişim</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Hakkında</h1>
        <p>Bu web sitesi, Bootstrap kullanılarak oluşturulmuştur. Amaç, kullanıcılara basit ve şık bir arayüz sunmaktır.</p>
        <p>Projelerimiz hakkında daha fazla bilgi almak için lütfen bizimle iletişime geçin.</p>
        <img src="https://egemeclisicom.teimg.com/crop/1280x720/egemeclisi-com/images/haberler/havali-insanlarin-havali-sozleri216b18ad437a266a8c44.jpg" alt="Logo" class="img-fluid">
        
        <h2 class="mt-5">Geri Bildirim</h2>
        
        <?php
        // Geri bildirimleri dosyadan oku ve görüntüle
        $file = 'feedback.txt';
        if (file_exists($file)) {
            $feedbacks = file($file, FILE_IGNORE_NEW_LINES);
            if (!empty($feedbacks)) {
                echo "<div class='mb-4'>";
                foreach ($feedbacks as $feedback) {
                    echo "<div class='alert alert-info'>$feedback</div>";
                }
                echo "</div>";
            }
        }

        // Form gönderimi kontrolü
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Formdan gelen verileri al
            $name = htmlspecialchars($_POST['name']);
            $surname = htmlspecialchars($_POST['surname']);
            $feedback = htmlspecialchars($_POST['feedback']);

            // Geri bildirim verilerini dosyaya yaz
            $current = file_get_contents($file);
            $current .= "İsim: $name, Soyisim: $surname, Geri Bildirim: $feedback\n";
            file_put_contents($file, $current);

            // Kullanıcıya teşekkür mesajı göster
            echo "<div class='alert alert-success'>Geri bildiriminiz için teşekkür ederiz!</div>";
        }
        ?>

        <form action="" method="POST">
            <div class="form-group">
                <label for="name">İsim:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="surname">Soyisim:</label>
                <input type="text" class="form-control" id="surname" name="surname" required>
            </div>
            <div class="form-group">
                <label for="feedback">Görüşlerinizi paylaşın:</label>
                <textarea class="form-control" id="feedback" name="feedback" rows="3" placeholder="Yorumunuzu buraya yazın..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Gönder</button>
        </form>
    </div>

    <footer class="bg-light text-center py-4">
        <p>&copy; 2023 Web Sitem. Tüm hakları saklıdır.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></ script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>