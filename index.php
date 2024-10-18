<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Web Sitem</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Ana Sayfa <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Hakkında</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">İletişim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="payment.php">Ödeme</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Hoş Geldiniz!</h1>
        <p>Web sitemize hoş geldiniz. Burada çeşitli ürünler bulabilir ve ödeme işlemlerinizi gerçekleştirebilirsiniz.</p>
        
        <h2>Hakkında</h2>
        <p>Bu web sitesi, kullanıcıların ihtiyaçlarına yönelik çeşitli ürün ve hizmetler sunmaktadır. Amacımız, kullanıcılarımıza en iyi deneyimi sağlamaktır.</p>

        <h2>İletişim</h2>
        <p>Bizimle iletişime geçmek için lütfen <a href="contact.php">İletişim</a> sayfasını ziyaret edin.</p>

        <h2>Ödeme Yapmak İçin Aşağıdaki Butona Tıklayın</h2>
        <a href="payment.php" class="btn btn-primary">Ödeme Sayfasına Git</a>
    </div>

    <footer class="bg-light text-center py-4">
        <p>&copy; 2023 Web Sitem. Tüm hakları saklıdır.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>