<?php
  if($_POST['formSubmit'] == "Submit")
  {
    $errorMessage = "";
    if(empty($_POST['keyword']))
    {
      $errorMessage .= "<li>You forgot to enter a movie!</li>";
    }


    $keyword = $_POST['keyword'];

    if(!empty($errorMessage))
    {
      echo("<p>There was an error with your form:</p>\n");
      echo("<ul>" . $errorMessage . "</ul>\n");
    }
  }

?>
