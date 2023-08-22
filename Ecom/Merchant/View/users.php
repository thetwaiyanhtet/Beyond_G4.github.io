<?php
session_start();
include_once "../Model/model.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./resources/css/chat_design.css">
  <script src="https://kit.fontawesome.com/154f79af60.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php
          $user_id = $_SESSION['unique_id'];
          $stmt = $pdo->prepare("SELECT * FROM m_merchant WHERE unique_id = :user_id");
          $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

          if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
              $row = $stmt->fetch(PDO::FETCH_ASSOC);
          ?>
              <img src="../../Storage/profile/<?php echo $row['logo']; ?>" alt="">
              <div class="details">
                <span><?php echo $row['m_name']; ?></span>
                <p><?php echo ($row['is_logged_out'] == 1) ? 'Offline' : 'Online'; ?></p>

              </div>
        </div>
      </header>
      <div class="search">
        <span class="text">Select a user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
      </div>
    </section>
  </div>

  <script src="./resources/js/users.js"></script>
  <script src=""></script>


</body>

</html>
<?php
            } else {
              echo "No data found.";
            }
          } else {
            echo "Error executing query: " . print_r($stmt->errorInfo(), true);
          }
?>