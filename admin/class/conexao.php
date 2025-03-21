<!--Ligar o Banco-->
 
<?php
 
class Conexao{
 
    public static function LigarConexao(){
 
        //dbname=nome do banco de dados - host=nome do host que será usado - '' = senha -
        $conn = new PDO('mysql:dbname=dbfelinni;host=localhost', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}
 