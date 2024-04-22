<?php
if(isset($_POST['clientName']) && isset($_POST['bookingMessage'])){
    $name = $_POST['clientName'];
    $message = $_POST['bookingMessage'];

    // Nomor WhatsApp tujuan
    $whatsappNumber = '6289620378128'; // Ganti dengan nomor WhatsApp yang dituju

    // Pesan yang akan dikirimkan
    $formattedMessage = "Nama: $name\nPesan: $message";

    // Membuat URL yang sesuai dengan format WhatsApp API
    $whatsappURL = "https://api.whatsapp.com/send?phone=$whatsappNumber&text=" . urlencode($formattedMessage);

    // Mengarahkan pengguna ke URL WhatsApp
    header("Location: $whatsappURL");
    exit();
} else {
    // Jika data tidak lengkap, kembali ke halaman sebelumnya
    echo "
    <script>
        window.location=history.go(-1);
    </script>";
}
?>
