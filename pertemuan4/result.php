<head>
  <!-- Other meta tags and links -->
  <style>
    #result {
      text-align: center;background-color: #d4edda;
      border: 1px solid #c3e6cb;
      border-radius: .25rem;
      padding: 1rem;
      margin-top: 1rem;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .alert-success {
      color: #155724;
      background-color: #d4edda;
      border-color: #c3e6cb;
    }
  </style>
</head>

<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $pesan = $_POST['pesan'];
  echo "<div id='result' class='alert alert-success' role='alert'>
          <i class='fas fa-check-circle'></i> Terima kasih, $name ($email & $number). Pesan '$pesan' telah terkirim.
        </div>";
}
?>
