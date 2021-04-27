<?php
class Log
{
  // db stuff
  private $conn;
  private $table = "f_log_data_";

  // log properties
  public $imei;
  public $busId;
  public $imsi;
  public $driverId;
  public $dateTime;
  public $insertTime;
  public $gpsSignal;
  public $csq;
  public $gps;
  public $milage;
  public $longitude;
  public $latiitude;
  public $direction;
  public $speed;
  public $rpm;
  public $gpsSpeed;
  public $io;
  public $deviceStatus;


  // constructor with db 
  public function __construct($db)
  {
    $this->conn = $db;
  }

  // get log
  public function getLog()
  {
    // create query
    $query = "SELECT * FROM `vdrs`.`$this->table$_POST[busId]` WHERE `date_time` BETWEEN '$_POST[startDate] $_POST[startTime]' AND '$_POST[endDate] $_POST[endTime]' ORDER BY `date_time` DESC";

    // prepare statement
    $stmt = $this->conn->prepare($query);

    // execute query
    $stmt->execute();

    return $stmt;
  }
}
