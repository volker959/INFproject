
<div class="col-lg-8 col-md-8">
<table class="table table-bordered" id="dataTable" cellspacing="0">

<thead>

<tr>

<th>ID</th>

<th>Name of Product</th>

<th>Price of Product</th>

<th>Product Catrogy</th>

<th>Product Details</th>

<th>Who order</th>

</tr>

</thead>

<tfoot>

<tr>

<th>ID</th>

<th>Name of Product</th>

<th>Price of Product</th>

<th>Product Catrogy</th>

<th>Product Details</th>

<th>Who order</th>

</tr>

</tfoot>

<?php

$servername = "localhost";

$username = "root";

$password = "toor";

$dbname = "auth";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = 'SELECT * from products';

if (mysqli_query($conn, $sql)) {

echo "";

} else {

echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}

$count=1;

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

// output data of each row

while($row = mysqli_fetch_assoc($result)) { ?>

<tbody>

<tr>

<th>

<?php echo $row['product_id']; ?>

</th>

<td>

<?php echo $row['product_name']; ?>

</td>

<td>

<?php echo $row['product_price']; ?>

</td>

<td>

<?php echo $row['product_cat']; ?>

</td>

<td>

<?php echo $row['product_details']; ?>

</td>

<td>

<?php echo $row['user_email']; ?>

</td>

</tr>

</tbody>

</div>

<?php

$count++;

}

} else {

echo '0 results';

}

?>