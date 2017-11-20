@if (count($letters)>0)
<?php
  $file=$directory ."/pdf/".$letters[0]->reference_id."/".$letters[0]->uuid.".pdf";
/*  $filename = $letters[0]->uuid.".pdf"; */
  header('Content-type: application/pdf');
  header('Content-Disposition: attachment; filename="' . $filename . '"');
  readfile($file);
  exit;
?>
@endif
