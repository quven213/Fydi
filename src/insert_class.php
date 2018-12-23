<?php

  class insert_records{

    private $host;
    private $user;
    private $pass;
    private $db;
    public $table;
    public $number;
    public $param = array();
    public $con;

    #database connection function
    public function connect($localhost,$username,$password,$database){
      $this->host = $localhost;
      $this->user = $username;
      $this->pass = $password;
      $this->db = $database;

      $con = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
      if(!$con){
        echo 'Failed to connect to database';
      }else{
        return $con;
      }
    }

    #extract database connection state from first parameter and store the rest parameters into assiciative an array
    public function load(){
      $args = func_get_args();
      $this->con = $args[0];
      array_shift($args);
      foreach($args as $i){
        $this->param[explode(':',$i)[0]] = explode(':',$i)[1];
      }
    }

    #start looping the query result by creating distinctive fake data
    public function start(){
      require 'fake_generate_class.php';
      $obj = new fake();
      $status = '';
      for($i = 0; $i < $this->number; $i++){
        $sql  = "INSERT INTO $this->table";
        $sql .= " (`".implode("`, `", array_keys($this->param))."`)";
        $sql .= " VALUES ";
        $sql .= "(";
        foreach ($this->param as $v) {
          $value = $obj->generate($v);
          $sql .= "'".$value."',";
        }
        $sql .= ")";
        $sql = substr($sql,0,-2).')';
        $result = mysqli_query($this->con,$sql);
        if(!$result){
          die(mysqli_error($this->con));
        }else{
          $status = 'okay';
        }
      }
      echo $status;
    }


  }

?>
