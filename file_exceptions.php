<?php
class fileOpenException extends Exception {
  function __toString() {
    return "<strong>fileOpenException ".$this->getCode()
      ."</strong>: ".$this->getMessage()."<br />"
      ."in ".$this->getFile()." on line ".$this->getLine()."<br />";
  }
}

class fileWriteException extends Exception {
  function __toString() {
    return "<strong>fileWriteException ".$this->getCode()
      ."</strong>: ".$this->getMessage()."<br />"
      ."in ".$this->getFile()." on line ".$this->getLine()."<br />";
  }
}

class fileLockException extends Exception {
  function __toString() {
    return "<strong>fileLockException ".$this->getCode()
      ."</strong>: ".$this->getMessage()."<br />"
      ."in ".$this->getFile()." on line ".$this->getLine()."<br />";
  }
}
?>