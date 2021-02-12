<?php

class Test extends Conn{
  //query without pdo
  public function getUser(){
    $query = "SELECT * FROM pengguna";
    $stmt = $this->connect()->query($query);
    while ($row = $stmt->fetch()) {
      echo $row['username'];
    }
  }

  //query using pdo
  public function getUserSTMT($search){
    $search = "%$search%";
    $query = "SELECT * FROM pengguna WHERE username like ?";
    $stmt = $this->connect()->prepare($query);
    $stmt->execute([$search]);

    $names = $stmt->fetchAll();
    
    foreach ($names as $key) {
      echo $key['username'];
    }
  }
  public function setUserSTMT($name){
    $query = "INSERT INTO pengguna (username) values (?)";
    $stmt = $this->connect()->prepare($query);
    $stmt->execute([$name]);
  } 

}