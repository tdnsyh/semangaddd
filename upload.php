<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $foto = $_FILES["foto"];

    if ($foto["error"] === UPLOAD_ERR_OK) {
        $namaFile = basename($foto["name"]);
        $tujuan = "uploads/" . uniqid() . "_" . $namaFile;

        if (move_uploaded_file($foto["tmp_name"], $tujuan)) {
            session_start();
            $_SESSION["nama"] = $nama;
            $_SESSION["foto"] = $tujuan;
            header("Location: hai.php");
            exit();
        } else {
            echo "Gagal menyimpan file.";
        }
    } else {
        echo "Terjadi kesalahan upload.";
    }
} else {
    echo "Akses tidak valid.";
}
?>