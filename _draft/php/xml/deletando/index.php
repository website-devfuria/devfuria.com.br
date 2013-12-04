<?php
function delete_book_id($id, $filename = 'loaned.xml'){
  $data = simplexml_load_file($filename);
  for($i = 0, $length = count($data->resource->book); $i < $length; $i++){
    if($data->resource->book[$i]->ID == $id){
      unset($data->resource->book[$i]);
      break;
    }
  }
  file_put_contents("__".$filename, $data->saveXML());
}
//SAMPLE USAGE
delete_book_id('Book 1');

?>
