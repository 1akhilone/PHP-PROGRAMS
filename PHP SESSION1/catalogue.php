<?php
$con = @mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db($con,"librarymy");

$result = mysqli_query($con,"SELECT * FROM mycart");    

echo "<table border='1' width='100%'>
<tr>
<th>Snap shot of Cover Page</th>
<th>Book Name <br>Auther Name<br>Publisher</th>
<th>Price</th>
<th>Add to Cart</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td><img src='images/". $row['Book Name'] . ".jpg' width=50 height=50></td>";
  echo "<td>Book :" . $row['Book Name'] . "<br>Author :" . $row['Author'] . "<br>Publication :" . $row['Publisher'] . "</td>";
  echo "<td>$" . $row['Price'] . "</td>";
  echo "<td><img src='images/addToCart.png' width='75px' height='30px' align='middle'> </td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>