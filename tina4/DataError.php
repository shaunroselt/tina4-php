<?php

/**
 * Created by PhpStorm.
 * User: S946115
 * Date: 2016/03/27
 * Time: 10:36 PM
 */
class DataError
{
  private $errorCode;
  private $errorMessage;

  function __construct($errorCode="", $errorMessage="")
  {

      $this->errorCode = $errorCode;
      $this->errorMessage = $errorMessage;
  }

  function getError() {
      return ["errorCode" => $this->errorCode, "errorMessage" => $this->errorMessage];
  }

  function __toString()
  {
     return json_encode($this->getError());
  }
}