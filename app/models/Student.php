<?php
namespace App\Models;
//require_once 'app/models/BaseModel.php';
class student extends BaseModel{
    protected $table = "sinh_vien";

    public function getListStudent(){
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function addStudent($id,$name,$yearOfBirth,$phoneNumber)
    {
        $sql = "INSERT INTO $this->table VALUES (?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$name,$yearOfBirth,$phoneNumber]);
    }
}

?>