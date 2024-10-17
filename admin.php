<?php
// messages.txt dosyasından verileri oku
$messages = [];
if (file_exists('messages.txt')) {
    $file = fopen('messages.txt', 'r');
    while (($line = fgets($file)) !== false) {
        // Her bir mesajı satırlara ayır
        if (trim($line) !== '') {
            $messages[] = $line;
        }
    }
    fclose($file);
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="admin.php">Mesajlar <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Çıkış</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Mesajlar</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Ad</th>
                    <th>E-posta</th>
                    <th>Mesaj</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Mesajları işleyip tabloya ekle
                foreach ($messages as $message) {
                    // Mesajı satırlara ayır
                    $lines = explode("\n", trim($message));
                    if (count($lines) >= 3) {
                        $name = str_replace('Ad: ', '', $lines[0]);
                        $email = str_replace('E-posta: ', '', $lines[1]);
                        $msg = str_replace('Mesaj: ', '', $lines[2]);
                        echo "<tr>
                                <td>$name</td>
                                <td>$email</td>
                                <td>$msg</td>
                              </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <footer class="bg-light text-center py-4">
        <p>&copy; 2023 Admin Panel. Tüm hakları saklıdır.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>