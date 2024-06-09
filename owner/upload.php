<?php
$targetDir = "uploads/"; // Direktori penyimpanan file
$targetFile = $targetDir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

// Cek apakah file sudah ada
if (file_exists($targetFile)) {
    echo "File sudah ada.";
    $uploadOk = 0;
}

// Batasi jenis file yang diizinkan
if($fileType != "txt" && $fileType != "pdf" && $fileType != "docx" && $fileType != "xlsx") {
    echo "Hanya file dengan ekstensi TXT, PDF, DOCX, dan XLSX yang diperbolehkan.";
    $uploadOk = 0;
}

// Cek jika $uploadOk bernilai 0 oleh kesalahan
if ($uploadOk == 0) {
    echo "File tidak berhasil diunggah.";
// Jika semuanya berjalan lancar, coba unggah file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        echo "File ". basename( $_FILES["file"]["name"]). " berhasil diunggah.";
    } else {
        echo "Terjadi kesalahan saat mengunggah file.";
    }
}
?>