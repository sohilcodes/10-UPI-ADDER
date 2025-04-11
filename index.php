<!-- Save this as index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SOHIL SCRIPTER (official)</title>
  <link rel="stylesheet" href="ms.css">
</head>
<body>
  <div class="main-container">
    <div class="heading-text">10₹ UPI Adder</div>

    <?php
    if (!isset($_POST['submit'])) {
        echo "<form method='POST' action=''>
                <input type='text' name='upi' class='input' placeholder='Enter Your UPI' required />
                <input type='submit' value='SUBMIT' name='submit' class='button shine'>
              </form>";
    } else {
        // Original logic here (same as your provided PHP backend)
        // All API submission and processing code
        // Final success/failure message
        // Example:
        echo "<div class='success msg'>Reward claimed successfully!</div>";
    }
    ?>

    <a href="https://t.me/sohilscripter" class="telBtn">
      <i class="fa-regular fa-paper-plane"></i><span>JOIN OUR TELEGRAM</span>
    </a>
  </div>
</body>
</html>
