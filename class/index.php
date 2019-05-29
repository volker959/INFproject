<!DOCTYPE html>
<html>
<head>
	<title>INF Operacje</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	<script src="bootstrap/bootstrap.min.js"></script>


	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

<?php
class SamochodOpel {
    public $marka;
    public $model;
    public $rokProdukcji;
}
$samochod = new SamochodOpel();
$samochod->model = 'Insignia'; 

    echo $samochod->marka . ' ' . $samochod->model . ' ' . $samochod->rokProdukcji;
// wyświetli Opel Insignia 2017
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="border">

            <form action="" method="post">
                <label>Marka auta :</label>
                    <input type="text" name="marka" required="required"/><br />
                    
                <label>Model auta :</label>
                    <input type="text" name="model" required="required"/><br/>
                    
                <label>Rok produkcji :</label>
                    <input type="number" name="rok" required="required"/><br/>

                <input type="submit" value=" Submit " name="submit"/><br />
            </form>
                    
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="border center">
                <?php
                    // otwieramy plik w trybie umożliwiającym zapis na końcu pliku 
                    $plik1a=fopen("marka.txt", "r"); 
                    // przypisanie zawartości do zmiennej
                    $zawartosc1 = fread($plik1a, 8192); 
                    $plik2a=fopen("model.txt", "r"); 
                    $zawartosc2 = fread($plik2a, 8192); 
                    $plik3a=fopen("rok.txt", "r"); 
                    $zawartosc3 = fread($plik3a, 8192); 
                            
                    echo $zawartosc1. '<br>' .$zawartosc2. '<br>' .$zawartosc3; 
                ?>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="border">
                <table style="width:100%">
                    <?php
                    $auta = array ($zawartosc1, $zawartosc2, $zawartosc3);
                    asort ($auta);
                    reset ($auta);
                    foreach ($auta as $klucz=>$wart) 
                    { 
                            echo "<tr>
                                <th>$wart</th>
                            </tr>";
                    }
                    ?>
                </table>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="border">
                <?php

                   $owoce = array ("d"=>"mango", "a"=>"papaja", "b"=>"banan", "c"=>"aronia");
                   asort ($owoce);
                   reset ($owoce); // Funkcja ta powoduje powrót do pierwszego elementu tablicy
                   while (list ($klucz, $wartosc) = each ($owoce)) {
                       echo "$klucz = $wartoscn";
                   }
                   
                ?>
                
            </div>
        </div>

    </div>
</div>

<?php
if (isset($_POST['submit'])) {

$marka = $_POST['marka'];
$model = $_POST['model'];
$rok = $_POST['rok'];

    if (file_exists("marka.txt")){
    // otwieramy plik w trybie umożliwiającym zapis na końcu pliku
        $plik1=fopen("marka.txt", "a") or die("Nie udało się utworzyć pliku marka");

    // przypisanie zawartości do zmiennej 
        fwrite($plik1, $marka." ") or die("Nie udało się zapisać danych w pliku marka"); 
    } 
    else {
        echo "Plik marka nie istnieje";
    }

    if (file_exists("model.txt")){
        // otwieramy plik w trybie umożliwiającym zapis na końcu pliku
            $plik2=fopen("model.txt", "a") or die("Nie udało się utworzyć pliku model");
        
        // przypisanie zawartości do zmiennej 
            fwrite($plik2, $model." ") or die("Nie udało się zapisać danych w pliku model"); 
        } 
        else {
            echo "Plik model nie istnieje";
    }

    if (file_exists("rok.txt")){
        // otwieramy plik w trybie umożliwiającym zapis na końcu pliku
            $plik3=fopen("rok.txt", "a") or die("Nie udało się utworzyć pliku rok");
        
        // przypisanie zawartości do zmiennej 
            fwrite($plik3, $rok." ") or die("Nie udało się zapisać danych w pliku rok"); 
        } 
        else {
            echo "Plik rok nie istnieje";
    }


    echo "Poprawnie dodano dane do plików.";
}
?>

</body>
</html>