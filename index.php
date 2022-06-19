<?php 
    Class Operation{
        public $number1;
        public $number2;
        public $number3;
       
        function __construct(){
            $this->err = "Error al realizar la operación.";
            return $this->err;
        }

    function sumar($number1,$number2,$number3){
        $this->number1 =intval($number1);
        $this->number2 = intval($number2);
        $this->number3 = intval($number3);
        $this->result = $this->number1 + $this->number2 + $this->number3;
        echo $this->result;
    }

    function restar($number1,$number2,$number3){
        $this->number1 =intval($number1);
        $this->number2 = intval($number2);
        $this->number3 = intval($number3);
        $this->result = $this->number1 - $this->number2 - $this->number3;
        echo  $this->result;
    }
    function multiplicar($number1,$number2,$number3){
        $this->number1 =intval($number1);
        $this->number2 = intval($number2);
        $this->number3 = intval($number3);
        $this->result = $this->number1 * $this->number2 * $this->number3;
        echo  $this->result;
    }
    function dividir($number1,$number2,$number3){
        $this->number1 =intval($number1);
        $this->number2 = intval($number2);
        $this->number3 = intval($number3);
        $this->result = $this->number1 / $this->number2 / $this->number3;
        echo  $this->result;
    }
}
    function verifyOperation($number1,$number2,$number3,$operation){
    $op = new Operation();
        if(!isset($number1) || !is_numeric($number1) || !isset($number2) || !is_numeric($number2) || !isset($number3) || !is_numeric($number3) || !isset($operation)){
         return print $op->__construct(); 
        }

        if($operation == 'sumar'){
            return $op->sumar($number1,$number2,$number3);
        }

        if($operation == 'restar'){
            return  $op->restar($number1,$number2,$number3);
        }

        if($operation == 'multiplicar'){
            return $op->multiplicar($number1,$number2,$number3);
        }

        if($operation == 'dividir'){
            return $op->dividir($number1,$number2,$number3);
        }
    }
   /* function sumar($number1,$number2,$number3){
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
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones numericas en PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
   <header class="container-fluid bg-primary p-2">
       <h1 class="h1 text-light">Calculadora Simple</h1>
   </header> 
   <div class="container-fluid bg-light d-flex flex-row flex-wrap justify-content-center aling-item-center">
        <div class="container-lg d-lg-flex flex-row flex-wrap justify-content-center align-item-center">
            <form method="post">
            <div class="container-lg-fluid m-3 d-lg-flex flex-lg-column flex-sm-wrap">
             <label class="form-label h2 mb-2">Ingrese 3 numeros</label>   
            <div class="container-fluid mb-2 d-flex justify-content-md-center">
                    <input type="text" class="form-control-lg p-5 w-100 flex-lg-{grow|shrink}-1" readonly value="<?php
                    if (isset($_POST['btn'])) {
                        verifyOperation($_POST['number1'],$_POST['number2'],$_POST['number3'],$_POST['operation']);
                    }else {
                        echo '0';
                    }
                    ?>" >
            </div>
                <div class="container-fluid mb-2 d-lg-flex flex-lg-row flex-xxl-wrap flex-sm-{grow-shrink}-1">

                    <input type="text" name="number1" placeholder="0" class="form-control m-1" value="<?php isset($_POST['number1']) && is_numeric($_POST['number1']) ?print $_POST['number1']:"0";?>">
                    
                    <input type="text" name="number2"placeholder="0" class="form-control m-1" value="<?php isset($_POST['number2']) && is_numeric($_POST['number2']) ?print $_POST['number2']:"0";?>">
                    
                    <input type="text" name="number3"  placeholder="0" class="form-control m-1" value="<?php isset($_POST['number3']) && is_numeric($_POST['number3']) ?print $_POST['number3']:"0";?>">
                    
                </div>
                <div class="container-fluid mb-2 flex-sm-{grow-shrink}-1">
                <select name="operation" id="" class="form-select bg-light">
                <option value="">Seleccione una Operación</option>

                <option value="sumar" <?php isset($_POST['operation'])&& $_POST["operation"]=="sumar"?print "selected":""?>>Sumar</option>

                <option value="restar" <?php isset($_POST["operation"]) && $_POST["operation"] == "restar"?print "selected":"";?>>Restar</option>

                <option value="multiplicar" <?php isset($_POST["operation"]) && $_POST["operation"] == "multiplicar"?print "selected":"";?>>Multiplicar</option>

                <option value="dividir" <?php isset($_POST["operation"]) && $_POST["operation"] == "dividir"?print "selected":"";?>>Dividir</option>

                </select>
                </div>
                <div class="container-fluid d-flex flex-column flex-wrap justify-content-center mb-3 flex-sm-{grow-shrink}-1">
                    <input type="submit" name="btn" id="" value="enviar" class="btn btn-primary flex-{grow|shrink}-1"></div>
            </div>

            </form>
        </div>

   </div>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>
