<?php

class PopupError {
    public static function display($message) {
      echo '<script type="text/javascript">alert("' . $message . '");</script>';
    }
  }
  

?>