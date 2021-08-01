<?php
function print_title(){
  if(isset($_GET['id'])){
    echo htmlspecialchars($_GET['id']);
  } else {
    echo "Welcome";
  }
}
function print_description(){
  if(isset($_GET['id'])){
    $basename = basename($_GET['id']);  // FILE system 을 이용한 공격을 막기위한 방법 (ex 부모 directory access 방지) 
    echo htmlspecialchars(file_get_contents("data/".$basename));
  } else {
    echo "Hello, PHP";
  }
}
function print_list(){
  $list = scandir('./data');
  $i = 0;
  while($i < count($list)){
    $title = htmlspecialchars($list[$i]);
    if($list[$i] != '.') {
      if($list[$i] != '..') {
        echo "<li><a href=\"index.php?id=$title\">$title</a></li>\n";
      }
    }
    $i = $i + 1;
  }
}
?>
