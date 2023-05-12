<?php
require_once "connection/Connection.php";
class Cliente {
    public static function getAll() {
        $db = new Connection();
        $query = "SELECT * FROM usuario"
        $resultado = $db->query($query);
        $datos = []
        if($resultado->num_rows) {
            while($row = $resultado->fetch_assoc()) {
                $datos[] = [
                    'id' => $row['id'],
                    'email' => $row['email'],
                    'pass' => $row['pass'],
                    'nombre' => $row['nombre'],

                ];
            }//end while
            return $datos;
        } //end if
        return $datos;

    }//end getAll

    public static function getWhere($id_usuario) {
        $db = new Connection();
        $query = "SELECT * FROM usuario WHERE id=$id_cliente";
        $resultado = $db->query($query);
        $datos = []
        if($resultado->num_rows) {
            while($row = $resultado->fetch_assoc()) {
                $datos[] = [
                    'id' => $row['id'],
                    'email' => $row['email'],
                    'pass' => $row['pass'],
                    'nombre' => $row['nombre'],

                ];
            }//end while
            return $datos;
        } //end if
        return $datos;

    }//end getAll

    public static function insert($nombre, $email, $pass) {
        $db = new Connection();
        $query = "INSERT INTO usuario(nombre, email, pass)
         VALUES('".$nombre."','".$email."', '".$pass."' )";
         $db->query($query);
         if($db->affected_rows) {
            return TRUE;

         }//end if
         return FALSE;

    }//end insert

    public static function update($id_usuario, $nombre, $email, $pass) {
        $db = new Connection();
        $query = "UPDATE usuario SET nombre= '".$nombre."'
        WHERE id= $id_cliente";
         $db->query($query);
         if($db->affected_rows) {
            return TRUE;

         }//end if
         return FALSE;

    }//end update

    public static function delete($id_usuario) {
        $db = new Connection();
        $query = "DELETE FROM usuario WHERE id=$id_usuario";
        $db->query($query);
        if ($db->affected_rows) {
            return TRUE;
    }//end if
    return FALSE;
 }//end delete
  

 //end class Cliente
}

