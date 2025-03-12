<?php
if (!isset($_GET['code'])) {
    die("Neplatný přístup.");
}
$meeting_code = htmlspecialchars($_GET['code']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Docházkový formulář</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <h2>Přihlášení k docházce</h2>
    <form id="attendance-form" onsubmit="submitAttendance(event)">
        <input type="hidden" id="meeting_code" value="<?php echo $meeting_code; ?>">
        <input type="text" id="name" placeholder="Jméno" required><br><br>
        <input type="text" id="surname" placeholder="Příjmení" required><br><br>
        <input type="text" id="class" placeholder="Třída" required><br><br>
        <button type="submit">Odeslat</button>
    </form>
    
    <div id="thank-you" class="hidden">
        <h3>Děkujeme za zapsání!</h3>
    </div>
    
    <script>
        function submitAttendance(event) {
            event.preventDefault();
            document.getElementById("attendance-form").classList.add("hidden");
            document.getElementById("thank-you").classList.remove("hidden");
        }
    </script>
</body>
</html>
