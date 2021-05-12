?<php
      //open new file to write
      $data_file = fopen("feedback.txt", "a");
      
      $feedback = $_POST[""];
      
      //Write data to server side file
      fwrite($data_file, $text_to_write);
      fclose($date_file);
?>
