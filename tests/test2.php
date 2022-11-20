<?php
use PHPUnit\Framework\TestCase; 
class Login{

    public function Autentificare(){
        $testing= new mysqli("localhost","root","","store");
        $Log = readline("Introdu Loghinul: ");
        $Pas = readline("Introdu Parola: ");
        $resul =  $testing->query("SELECT*FROM users WHERE email = '$Log' AND password = '$Pas'; ");
        if(mysqli_num_rows($resul)>0){
           return true;
        }
        else{
           return false;
        }
       }

}
class test2 extends TestCase {
    function test(){
        $newcl = new Login;
        $res= $newcl->Autentificare();
        $this->assertTrue($res);
    }
}

    ?>
