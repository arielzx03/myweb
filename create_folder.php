<?php
// Mendapatkan tahun saat ini
$currentYear = date("Y");

// Membuat nama folder
$folderName = "data_" . $currentYear;

// Mengecek apakah folder sudah ada atau belum
if (!file_exists($folderName)) {
    // Membuat folder baru
    mkdir($folderName);
    echo "Folder berhasil dibuat: " . $folderName;

    // Membuat file HTML di dalam folder
    $htmlContent = "<!DOCTYPE html>
                    <html lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>Data for $currentYear</title>
                    </head>
                    <body>
                        <h1>Data for $currentYear</h1>
                        <!-- Isi halaman HTML sesuai kebutuhan -->
                    </body>
                    </html>";

    $filePath = "$folderName/index.html";
    file_put_contents($filePath, $htmlContent);
    echo "File HTML berhasil dibuat: " . $filePath;
} else {
    echo "Folder sudah ada: " . $folderName;
}
?>