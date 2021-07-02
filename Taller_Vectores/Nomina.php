<?php 
$Emp1 = array("1.020.745.165", "Nelson Andres Herrera Trujillo", "Administración", "Gerente", 4240000 );
$Emp2 = array("1.020.780.585", "Juan Sebastian Herrera Trujillo", "Administración", " Sub Gerente", 4240000 );
$Emp3 = array("80.463.405", "Joaquin Rodriguez Sarmiento", "Administración", "Coordinador Agro", 2304347 );
$Emp4 = array("51.746.066", "Jabey Sanchez Doncel", "Administración", "Asistente Varios", 1060000 );
$Emp5 = array("52.786.558", "Luz Adriana Mesa Bautista", "Administración", "Contador", 1802000 );
$Emp6 = array("37.862.504", "Lucy Rueda Plata", "Administración", "Coor Administrativa", 1590000 );
$Emp7 = array("3.086.655", "Marcos William Panche", "Las Delicias - Villavicencio", "Mayordomo", 1250000 );
$Emp8 = array("1.120.871.006", "Victor Alfonso Sanchez ", "Las Delicias - Villavicencio", "Aux de Mayordomo", 923913 );
$Emp9 = array("1.005.852.587", "Yeimy Paola Mendoza Castro", "Las Delicias - Villavicencio", "Servicios Generales", 828116 );
$Emp10 = array("1.121.952.606", "James David Losada Perez", "Las Delicias - Villavicencio", "Aux de Mayordomo", 828116 );
$Emp11 = array("79.167.112", "Ramiro Rodriguez Pachon", "Mangos y Naranjos - Tausa", "Mayordomo", 917400 );
$DiasT = $_POST["Dias"];
$Hdirunas = $_POST["Diurnas"];
$Hnocturnas = $_POST["Nocturnas"];
$Hdominicales = $_POST["Dominicales"];
$Boni = $_POST["Bonificaciones"];
$Prestamos = $_POST["Prestamos"];
?>
<!DOCTYPE html>
<html lang="esp">
    <head>
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <meta charset="utf-8">
        <title> Resultado Nomina </title>  
    </head>

    <body align="center" >
         <table border="0" width="90%" cellspacing="0px"> 
            <tr class="fila1">
                <td colspan ="7"> Información Básica </td>
            </tr>
            <tr class="fila2">
                    <td> Identificación </td>
                    <td> Nombre </td>
                    <td> Centro de Costo </td>
                    <td> Cargo </td>
                    <td> Sueldo </td>
                    <td> Base Dias </td>
                    <td> Dias Laborados </td>
            </tr>
            <tr class="fila3">
                    <td> 
                        <?php 
                            switch ($_POST["Cedulas"]) {
                                case '1': echo $Emp1 [0]; break;
                                case '2': echo $Emp2 [0]; break;   
                                case '3': echo $Emp3 [0]; break;
                                case '4': echo $Emp4 [0]; break;      
                                case '5': echo $Emp5 [0]; break;
                                case '6': echo $Emp6 [0]; break;   
                                case '7': echo $Emp7 [0]; break;
                                case '8': echo $Emp8 [0]; break;   
                                case '9': echo $Emp9 [0]; break;
                                case '10':echo $Emp10 [0]; break;   
                                case '11':echo $Emp11 [0]; break;                               
                                }  
                            ?>
                    </td>
                    <td> 
                            <?php 
                            switch ($_POST["Cedulas"]) {
                                case '1': echo $Emp1 [1]; break;
                                case '2': echo $Emp2 [1]; break;   
                                case '3': echo $Emp3 [1]; break;
                                case '4': echo $Emp4 [1]; break;      
                                case '5': echo $Emp5 [1]; break;
                                case '6': echo $Emp6 [1]; break;   
                                case '7': echo $Emp7 [1]; break;
                                case '8': echo $Emp8 [1]; break;   
                                case '9': echo $Emp9 [1]; break;
                                case '10':echo $Emp10 [1]; break;   
                                case '11':echo $Emp11 [1]; break;                               
                                }  
                            ?>
                   </td>
                    <td> 
                          <?php 
                            switch ($_POST["Cedulas"]) {
                                case '1': echo $Emp1 [2]; break;
                                case '2': echo $Emp2 [2]; break;   
                                case '3': echo $Emp3 [2]; break;
                                case '4': echo $Emp4 [2]; break;      
                                case '5': echo $Emp5 [2]; break;
                                case '6': echo $Emp6 [2]; break;   
                                case '7': echo $Emp7 [2]; break;
                                case '8': echo $Emp8 [2]; break;   
                                case '9': echo $Emp9 [2]; break;
                                case '10':echo $Emp10 [2]; break;   
                                case '11':echo $Emp11 [2]; break;                               
                                }  
                            ?>
                    </td>
                    <td> 
                            <?php 
                            switch ($_POST["Cedulas"]) {
                                case '1': echo $Emp1 [3]; break;
                                case '2': echo $Emp2 [3]; break;   
                                case '3': echo $Emp3 [3]; break;
                                case '4': echo $Emp4 [3]; break;      
                                case '5': echo $Emp5 [3]; break;
                                case '6': echo $Emp6 [3]; break;   
                                case '7': echo $Emp7 [3]; break;
                                case '8': echo $Emp8 [3]; break;   
                                case '9': echo $Emp9 [3]; break;
                                case '10':echo $Emp10 [3]; break;   
                                case '11':echo $Emp11 [3]; break;                               
                                }  
                            ?>
                    </td>
                    <td> 
                        <?php 
                            switch ($_POST["Cedulas"]) {
                                case '1': $basico=$Emp1 [4]; echo "$ ",$Emp1 [4]; break;
                                case '2': $basico=$Emp2 [4]; echo "$ ",$Emp2 [4]; break;   
                                case '3': $basico=$Emp3 [4]; echo "$ ",$Emp3 [4]; break;
                                case '4': $basico=$Emp4 [4]; echo "$ ",$Emp4 [4]; break;      
                                case '5': $basico=$Emp5 [4]; echo "$ ",$Emp5 [4]; break;
                                case '6': $basico=$Emp6 [4]; echo "$ ",$Emp6 [4]; break;   
                                case '7': $basico=$Emp7 [4]; echo "$ ",$Emp7 [4]; break;
                                case '8': $basico=$Emp8 [4]; echo "$ ",$Emp8 [4]; break;   
                                case '9': $basico=$Emp9 [4]; echo "$ ",$Emp9 [4]; break;
                                case '10': $basico=$Emp10 [4]; echo "$ ",$Emp10 [4]; break;   
                                case '11': $basico=$Emp11 [4]; echo "$ ",$Emp11 [4]; break;                               
                                }  
                            ?>  
                    </td>
                    <td>
                    <?php echo "30"; ?>
                    </td>
                    <td>
                    <?php echo $DiasT; ?>
                    </td>

            </tr>
        <br></br>
        <table border="0" width="90%" cellspacing="0px"> 
        <br></br>         <br></br>
            <tr class="fila1">
                <td rowspan="2">Salario</td>
                <td rowspan="2">Aux. Transporte</td>
                <td rowspan="2"> Cantidad Horas Diur.</td>
                <td rowspan="2"> Cantidad Horas Noc.</td>
                <td rowspan="2">  Cantidad Horas Dom. </td>
                <td colspan="3">Valor Horas</td>
                <td rowspan="2">Bonificaciones</td>
                <td rowspan="2"> Total Devengados</td>
            </tr>
            <tr class="fila2">
                <td > Diurnas </td>
                <td > Nocturnas </td>
                <td > Dominicales </td>
            </tr>
            <tr class="fila3">
                <td > 
                    <?php $Salario = ($basico/30)*$DiasT; echo "$ ",round($Salario); ?>  
                </td>
                <td > 
                <?php 
                    if ($basico <= 1817052 ) {
                        $aux = 106454; echo "$106.454";
                    }
                    else{  $aux = 0; echo "$ 0";
                    }
                    ?>  
                 </td>
                <td > 
                    <?php echo $Hdirunas; ?> 
                </td>
                <td >                     
                    <?php echo $Hnocturnas; ?> 
                </td>
                <td >                    
                    <?php echo $Hdominicales; ?> 
                </td>
                <td >                     
                    <?php 
                    $Tdirunas = (($Salario/240)+ ($Salario/240)*0.25) * $Hdirunas;
                    echo "$ ", round($Tdirunas); ?> 
                </td>
                <td >                     
                    <?php 
                    $Tnocturnas = (($Salario/240)+ ($Salario/240)*0.75)* $Hnocturnas;
                    echo "$ ", round($Tnocturnas); ?> 
                 </td>
                <td >                   
                    <?php 
                    $Tdominicales = (2 * ($Salario/240))* $Hdominicales;
                    echo "$ ", round($Tdominicales); ?> 
                </td>
                <td >                     
                    <?php 
                    echo "$ ", $Boni ;
                    ?> 
                </td>
                <td >                     
                    <?php 
                    $Deven = $Boni + $Tdominicales + $Tnocturnas +  $Tdirunas + $aux + $Salario ;
                    echo "$ ", round($Deven) ;
                    ?> 
                </td>
            </tr>
        <br></br> 
        <table border="0" width="90%" cellspacing="0px"> 
        <br></br>         <br></br>
            <tr class="fila1">
                <td colspan="5">Deducciones</td>
            </tr>
        <tr class="fila2">
                <td >EPS</td>
                <td >Cesantias y Pension</td>    
                <td >Prestamo</td>                          
                <td >Total Deducido</td>               
                <td >Neto a Pagar</td>  
            </tr>
        <tr class="fila3">
                <td >                
                    <?php 
                    $EPS = $basico*0.04;
                    echo "$ ", round($EPS);
                    ?> 
                    </td>
                <td >
                    <?php 
                    $Pension = $basico*0.04;
                    echo "$ ", round($Pension);
                    ?> 
                </td>    
                <td >
                     <?php 
                    echo "$ ", $Prestamos ;
                    ?> 
                </td>                          
                <td >
                   <?php 
                    $Dedu = $Prestamos + $Pension + $EPS   ;
                    echo "$ ", round($Dedu) ;
                    ?> 
                </td>               
                <td >
                    <?php 
                    $Total = $Deven - $Dedu  ;
                    echo "$ ", round($Total) ;
                    ?> 
                </td>  
            </tr>

    </body>


</html>