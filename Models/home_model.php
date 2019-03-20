<?php
//
// Exemple de page model
//
//class Home
//{
//
//    public $id;
//
//    public static function getUser($id){
//
//        global $db;
//
//        $id = str_secur($id);
//
//        $req = $db->prepare('SELECT * FROM user WHERE id = '.$id);
//        $req->execute($id);
//        $req->fetchAll();
//
//        return $req;
//    }
//
//}