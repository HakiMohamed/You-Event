<?php

trait Model {

    use Database;


    public function selectAll(){
        $query = '';

        $query = "SELECT * FROM $this->table";
        return $this->query($query);
    }


    public function select($data){

        $query = '';

        $query = "SELECT * FROM $this->table WHERE ";
        $keys = array_keys($data);

        foreach ($keys as $key){
            $query .= $key . " = :" . $key . " && ";
        }

        $query = trim($query, " && ");

        return $this->query($query, $data);

    }




    public function insert($data){

        $query = '';
        
        $keys = array_keys($data);
        $query = "INSERT INTO $this->table (".implode(" , ", $keys).") VALUES (:".implode(" , :", $keys).") ";

        return $this->query($query, $data);
    }




    public function delete($id, $column_id = 'id'){

        $query = '';

        $data[$column_id] = $id;
        $query = "DELETE FROM $this->table WHERE $column_id = :$column_id";

        return $this->query($query, $data);
    }




    public function update($id,$data, $column_id = 'id'){

        $query = '';

        $keys = array_keys($data);
        $query = "UPDATE $this->table SET ";  

        foreach ($keys as $key){
            $query .= $key . " = :" . $key . " , ";
        }

        $query = trim($query, " , ");

        $data[$column_id] = $id;
        $query .= " WHERE $column_id = :$column_id";
        
        $data[$column_id] = $id;
        $this->query($query, $data);

        return false;

    }
}