<?php
      $x = '';
      if (isset($_POST['calculate']))
      {
          $a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
          $b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';
          if ($a == ''){
              $x = 'Bạn chua nhập số a';
          }
          else if ($b == ''){
              $x = 'Bạn chưa nhập số b';
          }
          else if ($a == 0){
              $x = 'Số a phải nhập khác 0';
          }
          else {
              $x = -($b) / $a;
          }
      }
?>
<!Doctype html>
<html>
<body>
    <h1>
       Tính phương trình bậc 1:
     </h1>
    <form action ="" method="POST">
        <label for="a">a</label><br>
        <input type="text" id = "a" name="a" value=""><br>
        <label for="b">b</label><br>
        <input type="text" id = "a" name="b" value=""><br><br>
        <input type="submit" name="calculate" value="Tinh">
    </form>
    <?php echo $x; ?>
</body>
</html>
