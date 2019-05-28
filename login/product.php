
<div class="col-lg-4 col-md-4">
<h2>Dodaj zamówienie</h2>
<br>
<form action="" method="post">
    <label>Nazwa produktu :</label>
        <input type="text" name="pname" id="name" required="required" placeholder="Nazwa produktu"/><br />
        
    <label>Cena produktu :</label>
        <input type="number" name="pprice" id="price" required="required" placeholder="150"/><br/>
        
    <label>Kategoria produktu :</label>
        <input type="text" name="pcat" id="cat" required="required" placeholder="Sluchawki GamingINF vol2"/><br/>

    <label>Opis produktu :</label><br>
        <textarea name="pdetails" rows="10" cols="30" id="details" required="required" placeholder="Opis produktu"></textarea><br/>
    
    <input type="submit" value=" Submit " name="submit"/><br />
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "toor";
$dbname = "auth";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_POST['submit'])) {
// receive all input values from the form
$pname = mysqli_real_escape_string($conn,$_POST['pname']);
$price = mysqli_real_escape_string($conn,$_POST['pprice']);
$pcat = mysqli_real_escape_string($conn,$_POST['pcat']);
$pdetails = mysqli_real_escape_string($conn,$_POST['pdetails']);
$user = $user['email'];
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO products (product_name, product_price, product_cat, product_details, user_email)
VALUES ('$pname', '$price', '$pcat', '$pdetails', '$user')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>



</div>


<div class="col-lg-4 col-md-4">
<h2>Usuń zamówienie</h2>
<br>
<form action="" method="post">
    <label>Nazwa produktu :</label>
        <input type="number" name="id" id="id" required="required" placeholder="ID zamówienia"/><br />
    
    <input type="submit" value=" Usuń " name="usun"/><br />
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "toor";
$dbname = "auth";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_POST['usun'])) {
// receive all input values from the form
$id = mysqli_real_escape_string($conn,$_POST['id']);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM products WHERE product_id=$id";
if ($conn->query($sql) === TRUE) {
echo "Usunięto zamówienie";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>



</div>