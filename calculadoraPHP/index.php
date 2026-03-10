<?php
require "calculadora.class.php"
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #243285;
            text-align: center;
        }
        header{
            color: #99968c;
            margin-bottom: 80px ;
        }
        header span{
            color: #fff;
        }

        label{
            color: whitesmoke;
        }
        
        input{
            padding: 10px;
            border-radius: 20px;
            border: none;
            margin: 0 8px 42px;
        }

        #btn{
            margin-top: 20px;
            padding: 7px 20px;
            background-color: gray;
            color: whitesmoke;
        }
    </style>
</head>
<body>
    <header>
        <h1> Calculadora <span>PHP</span> </h1>
    </header>

    <section id="calculadora">

        <form action="" method="post">
            <input type="number" name="num1" placeholder="Numero 1" required>
            <input type="number" name="num2" placeholder="Numero 2" required>
            <br>
            <label for="">Operaçoes </label>
            <select name="op" id="opcao">
                <option value="soma"> Soma ( + ) </option>
                <option value="sub"> Subtração ( - ) </option>
                <option value="mult"> Multiplicação ( x ) </option>
                <option value="divi"> Divisão ( / ) </option>
            </select>
            <br>
            <input id="btn" type="submit" value="Enviar">
        </form>


        <?php
        if(isset($_POST['num1']) && isset($_POST['num2'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $opcao = ($_POST['op']); 
            $conta = new Calculo($num1, $num2);
            switch ($opcao){
                case "soma": 
                   echo $conta->soma();
                    break;
                case "sub":
                 echo $conta->sub();
                    break;
                case "mult":
                 echo $conta->mult();
                    break;
                case "divi":
                 echo $conta->divi(); 
                    break; 
                
                
            }
         }
        
        

        ?>
    </section>
    
</body>
</html>