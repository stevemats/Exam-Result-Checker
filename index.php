<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exam Result Checker</title>
<link rel="stylesheet" href="stylesheet/css/styles.css">
</head>
<body>
  <div class="container">
    <h2>Exam Result Checker</h2>
    <form action="" method="post">
      <input type="number" name="marks" placeholder="Enter subject mark" required>
      <button type="submit">Check Result</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $marks = $_POST["marks"];
      if ($marks >= 40) {
        echo "<div class='result'>Congratulations! You have passed.</div>";
      } else {
        echo "<div class='result'>Sorry, you have not passed.</div>";
      }
    }
    ?>
  </div>
</body>
</html>