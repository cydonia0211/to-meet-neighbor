<!DOCTYPE html>
<?php
    setcookie("userid", "", time()-3600);
    setcookie("username", "", time()-3600);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        echo "userid와 username 쿠키가 삭제되었다!";
    ?>
</body>
</html>