<?php
unlink('data/'.basename($_POST['id']));  // 악의적인 화일 삭제를 방지하기 위함.
header('Location: /web2-PHP/index.php');
?>
