
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator Dinamis</title>
</head>
<body>
    <h1>QR Code Generator</h1>
    
    <form action="qrProses.php" method="post">
        <label for="text">Masukan teks:</label>
        <input type="text" name="text" id="text" required>
        <br><br>
        
        <label for="type">Jenis Kode:</label>
        <select name="type" id="type">
            <option value="qrcode">QR Code</option>
            <option value="code128">Barcode 128</option>
            <option value="ean13">EAN-13</option>
        </select>
        <br><br>
        
        <label for="scale">Ukuran:</label>
        <select name="scale" id="scale">
            <option value="3">Kecil</option>
            <option value="5" selected>Sedang</option>
            <option value="7">Besar</option>
        </select>
        <br><br>
        
        <input type="submit" value="Generate QR Code">
    </form>
</body>
</html>