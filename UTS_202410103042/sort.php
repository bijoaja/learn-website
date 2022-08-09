<?php
$sort_option = "";
if(isset($_GET["sort_animo"]))
{
  if($_GET["sort_animo"] == "kecil")
  {
    $sort_option = "asc";
  }
  else if($_GET["sort_animo"] == "besar")
  {
    $sort_option = "desc";
  }
}
?>