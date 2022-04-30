<?php 
    $number1 = "";
    $number2 = "";
    $number3 = "";
    $result ="";

    function verifyOperation($number1,$number2,$number3,$operation){
        if (isset($number1) && is_numeric($number1)) {
            $number1 = intval($_POST["number1"]);
        }else {
            $number1 = 0;
        }
        
        if (isset($number2) && is_numeric($number2)) {
            $number2 = intval($_POST["number2"]);
        }else {
            $number2 = 0;
        }
       
        if (isset($number3)&& is_numeric($number3)) {
            $number3 = intval($_POST["number3"]);
        }else {
            $number3 = 0;
        }
        return operation($operation,$number1,$number2,$number3);
    }
    function sumar($number1,$number2,$number3){
        $result = $number1 + $number2 + $number3;
        return print $result;
    }
    function restar($number1,$number2,$number3){
        $result = $number1 - $number2 - $number3;
        return print $result;
    }
    function multiplicar($number1,$number2,$number3){
        $result = $number1 * $number2 * $number3;
        return print $result;
    }
    function dividir($number1,$number2,$number3){
        if ($number1 == 0 || $number2 == 0 || $number3 == 0) {
         return print "No se puede dividir entre 0";   
        }else{
           return print $result = ($number1 / $number2) / $number3;
        }
       
    }
    
    function operation($operation,$number1,$number2,$number3){
        switch ($operation) {
            case 'sumar':

                return sumar($number1,$number2,$number3);

               break;
            case 'restar':

                return restar($number1,$number2,$number3);

                break;
            case 'multiplicar':

                return multiplicar($number1,$number2,$number3);

                break;
            case 'dividir':

              return dividir($number1,$number2,$number3);

                break;
            default:

                return print "Operacion Invalida";
                break;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones numericas en PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <header class="container-fluid bg-primary p-2">
       <h1 class="h1 text-light">Calculadora Simple</h1>
   </header> 
   <div class="container-fluid bg-light d-flex flex-row flex-wrap justify-content-center aling-item-center">
        <div class="container-md d-sm-flex flex-row flex-wrap justify-content-center align-item-center">
            <form method="post">
            <div class="container-lg m-3 d-flex flex-md-column flex-md-row">
             <label class="form-label h2 mb-2">Ingrese 3 numeros</label>   
            <div class="container-fluid mb-2 d-flex justify-content-center">
                    <input type="text" class="form-control-lg flex-fill p-5 text-end" readonly value="<?php
                    if (isset($_POST['btn'])) {
                        verifyOperation($_POST['number1'],$_POST['number2'],$_POST['number3'],$_POST['operation']);
                    }else {
                        echo '0';
                    }
                    ?>" >
            </div>
                <div class="container-fluid mb-2 d-lg-flex flex-lg-row flex-xxl-wrap ">

                    <input type="text" name="number1" placeholder="0" class="form-control m-1" value="<?php isset($_POST['number1']) && is_numeric($_POST['number1']) ?print $_POST['number1']:"";?>">
                    
                    <input type="text" name="number2"placeholder="0" class="form-control m-1" value="<?php isset($_POST['number2']) && is_numeric($_POST['number2']) ?print $_POST['number2']:"";?>">
                    
                    <input type="text" name="number3"  placeholder="0" class="form-control m-1" value="<?php isset($_POST['number3']) && is_numeric($_POST['number3']) ?print $_POST['number3']:"";?>">
                    
                </div>
                <div class="container-fluid mb-2">
                <select name="operation" id="" class="form-select bg-light">
                <option value="">Seleccione una Operación</option>

                <option value="sumar" <?php isset($_POST['operation'])&& $_POST["operation"]=="sumar"?print "selected":""?>>Sumar</option>

                <option value="restar" <?php isset($_POST["operation"]) && $_POST["operation"] == "restar"?print "selected":"";?>>Restar</option>

                <option value="multiplicar" <?php isset($_POST["operation"]) && $_POST["operation"] == "multiplicar"?print "selected":"";?>>Multiplicar</option>

                <option value="dividir" <?php isset($_POST["operation"]) && $_POST["operation"] == "dividir"?print "selected":"";?>>Dividir</option>

                </select>
                </div>
                <div class="container-fluid d-flex flex-column flex-wrap justify-content-center mb-3">
                    <input type="submit" name="btn" id="" value="enviar" class="btn btn-primary flex-{grow|shrink}-1"></div>
            </div>

            </form>
        </div>

   </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>