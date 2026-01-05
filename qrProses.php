<?php
if ($_POST) {
    $text = htmlspecialchars($_POST['text']);
    $type = $_POST['type'];
    $scale = $_POST['scale'];
    
    echo "<h2>QR Code Anda:</h2>";
    echo "<img src='https://bwipjs-api.metafloor.com/?bcid=$type&text=$text&scale=$scale' alt='Generated Code'>";
    echo "<br><br>";
    echo "<p><strong>Teks:</strong> $text</p>";
    echo "<p><strong>Jenis:</strong> $type</p>";
    echo "<p><strong>Ukuran:</strong> $scale</p>";
    echo "<br>";
    echo "<a href='index.php'>← Kembali ke Generator</a>";
} else {
    echo "<p>Tidak ada data yang dikirim.</p>";
    echo "<a href='index.php'>← Kembali ke Generator</a>";
}
?>