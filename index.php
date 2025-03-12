<?php
$meeting_code = uniqid(); // Unikátní kód pro schůzku
$attendance_url = "attendance.php?code=" . $meeting_code;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Generování docházky</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
    </style>
</head>
<body>
    <h2>Generování docházkové schůzky</h2>
    <p>Odkaz na docházkový formulář:</p>
    <a href="<?php echo $attendance_url; ?>" target="_blank"><?php echo $attendance_url; ?></a>
    <div id="qrcode"></div>
    
    <script>
        new QRCode(document.getElementById("qrcode"), "<?php echo $attendance_url; ?>");
    </script>
</body>
</html>
