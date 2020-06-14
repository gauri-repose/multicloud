<html>
<body>
<?php
$name=`head -n1 path.txt`;
$path="https://".$name."/dnld14.jpg";
echo "<img src='{$path}' width=200 height=200>";
?>
</body>
</html>
