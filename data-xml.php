<?php
header('Content-type: text/xml');
header('Pragma: public');
header('Cache-control: private');

include("koneksi.php");

echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
echo "<markers>";
$sql="select * from mapsgis";
$query=mysqli_query($conn, $sql) or die($conn->error);
while ($data=mysqli_fetch_array($query)) {
 echo "<marker long='".$data['long']."' lat='".$data['lat']."'  name='".$data['name']."' desc='".$data['desc']."'/>";
}
echo "</markers>";
?>