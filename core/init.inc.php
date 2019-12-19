<?php
$core_path = dirname(__FILE__);
if (empty($_GET['page']) || in_array("{$_GET['page']}.php", scandir("{$core_path}/pages")) == false)
{
header('Location: index.php?page=main');
die ();
}
$include_file = "{$core_path}/pages/{$_GET['page']}.php";
?>
