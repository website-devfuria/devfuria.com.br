<?php

require "Triangulo.php";


class TrianguloTest extends PHPUnit_Framework_TestCase
{

    public function testChecar(){
        $triangulo = new Triangulo();
        
        $triangulo->a = 5;
        $triangulo->b = 4;
        $triangulo->c = 3;
        $this->assertTrue($triangulo->checar());
    }
    
}