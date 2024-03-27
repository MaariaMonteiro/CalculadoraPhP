<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<div class="calculadora">
<div class="nomecalculadora"><h1 class="calc">
    <h1>CALCULADORA</h1>
</div>
<form action="" method="GET">

<input class="n1" type="number" name="n1" placeholder="Numero 1"><br><br>
<input class="n2" type="number" name="n2" placeholder="Numero 2"><br><br>

<input type="radio" name="operador" value="+" required>Somar<br>
<input type="radio" name="operador" value="-" required>Subtrair<br>
<input type="radio" name="operador" value="/" required>Dividir<br>
<input type="radio" name="operador" value="*" required>Multiplicar<br><br>

<button type="submit"> CALCULAR </button>


</form>

        <?php 


        if(isset($_GET['n1'], $_GET['n2'], $_GET['operador'])){

        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $operador = $_GET['operador'];
        $Resultado;

        switch($operador){
            case '+':
                 $Resultado = $n1+$n2;
                 echo $Resultado;
                break;

           case '-':
            echo $_GET['n1']-$_GET['n2'];
               break;
               
           case  '*' :
            echo $_GET['n1']*$_GET['n2'];
              break;

           case '/' :
            if($n2==0){
       echo"Não é possivel divisão por zero."; 
       

            }
            else{
                echo $_GET['n1']/$_GET['n2'];
            }
            break;
     
        }
      
    }
        
        ?>
  

</div>
</body>
</html>