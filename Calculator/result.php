<?php
    $result = require __DIR__ . '/calc.php';
?>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
<b>Calculation result:</b>
<br>
<?= $result ?>
</body>
</html>