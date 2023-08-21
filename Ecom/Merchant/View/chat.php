<?php
session_start();
include_once "../Model/model.php";
// if (!isset($_SESSION['unique_id'])) {
//   header("location: login.php");
// }
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./resources/css/chat_design.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" /> -->
  <script src="https://kit.fontawesome.com/154f79af60.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php
        $id = $_GET['id'];
        $sql = $pdo->prepare("SELECT * FROM m_merchant WHERE unique_id = :id");
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();

        $row = $sql->fetch(PDO::FETCH_ASSOC);
        if ($row) {

        ?>
          <a href="./users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
          <img src="../../Storage/profile/<?php echo $row['logo']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['m_name']; ?></span>
          </div>
        <?php
        } else {
          header("location: ./users.php");
        }
        ?>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="hidden" class="incoming_id" name="incoming_id" value="<?php echo $id; ?>">
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="./resources/js/chat.js"></script>

</body>

</html>