<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        require_once 'Livro.php';
        require_once 'Pessoa.php';
        

        $p[0] = new Pessoa('Pedro', 22, 'M');
        $p[1] = new Pessoa('Maria', 30, 'F');
        
        $l[0] = new Livro('PHP Básico', 'José da Silva', 300, $p[0]);
        $l[1] = new Livro('POO com PHP', 'Maria de Souza', 500, $p[1]);
        
        
        $l[0]->abrir();
        $l[0]->folhear(80);
        $l[0]->voltarPag();
        $l[0]->detalhes();
        
        //echo '<pre>';
        //print_r($l[0]);
       // echo '<pre>';
        //print_r($l[1]);
        
        
       
        
        ?>
    </body>
</html>
