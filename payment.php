<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ödeme Sayfası</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Ana Sayfa</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="payment.php">Ödeme</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">İletişim</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Ödeme Bilgileri</h1>
        <form action="process_payment.php" method="POST">
            <h4>Kredi Kartı Bilgileri</h4>
            <div class="form-group">
                <label for="cardName">Kart Üzerindeki İsim</label>
                <input type="text" class="form-control" id="cardName" name="cardName" required>
            </div>
            <div class="form-group">
                <label for="cardNumber">Kart Numarası</label>
                <input type="text" class="form-control" id="cardNumber" name="cardNumber" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="expiryDate">Son Kullanma Tarihi</label>
                    <input type="text" class="form-control" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="cvv">CVV</label>
                    <input type="text" class="form-control" id="cvv" name="cvv" required>
                </div>
            </div>

            <h4>Fatura Adresi</h4>
            <div class="form-group">
                <label for="billingAddress">Adres</label>
                <input type="text" class="form-control" id="billingAddress" name="billingAddress" required>
            </div>
            <div class="form-group">
                <label for="billingCity">Şehir</label>
                <input type="text" class="form-control" id="billingCity" name="billingCity" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="billingState">Eyalet</label>
                    <input type="text" class="form-control" id="billingState" name="billingState" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="billingZip">Posta Kodu</label>
                    <input type="text" class="form-control" id="billingZip" name="billingZip" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Ödemeyi Tamamla</button>
        </form>
    </div>

    <footer class="bg-light text-center py-4">
        <p>&copy; 2023 Web Sitem. Tüm hakları saklıdır.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd /popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>