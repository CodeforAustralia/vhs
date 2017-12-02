@if (count($letters)>0)
<?php
  $file=$directory ."/html/".$letters[0]->reference_id."/".$letters[0]->uuid.".html";
  header('Content-Type: text/html; charset=utf-8');
  readfile($file);
  exit;
?>
@endif
