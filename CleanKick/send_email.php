<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "njulpanjul07@gmail.com"; // Ganti dengan email Anda
    $subject = "Pesan Baru dari Formulir";
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "Anda menerima pesan baru:\n\n";
    $body .= "Nama Depan: $first_name\n";
    $body .= "Nama Belakang: $last_name\n";
    $body .= "Email: $email\n";
    $body .= "Telepon: $phone\n";
    $body .= "Pesan:\n$message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Terjadi kesalahan, pesan tidak dapat dikirim.";
    }
}
?>
