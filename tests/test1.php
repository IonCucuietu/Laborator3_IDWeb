<?php
use PHPUnit\Framework\TestCase; 
class Connect{
    public function connection(){
     $testing= new mysqli("localhost","root","","store");
     if($testing){
        return true;
     }else{
        return false;
     }
    }
   }
class test1 extends TestCase {
    function test(){
        $newcl = new Connect;
        $res= $newcl->connection();
        $this->assertTrue($res);
    }
}
?>