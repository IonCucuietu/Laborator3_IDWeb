<?php

use PHPUnit\Framework\TestCase;

class Login
{

    public function Autentificare()
    {
        $testing = new mysqli("localhost", "root", "", "store");
        $resul =  $testing->query("SELECT * FROM items;");

        return $resul;
    }
}

class test3 extends TestCase
{

    function test()
    {
        $newcl = new Login;
        $query_run = $newcl->Autentificare();

        $res = true;

        if (mysqli_num_rows($query_run) > 0) {
            foreach ($query_run as $item) {
                if ($item['price'] == 0)
                {
                    $res = false;
                }
            }
        }
        

        $this->assertTrue($res);
    }
}
