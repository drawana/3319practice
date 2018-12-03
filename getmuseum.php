<?php
$query = "SELECT * FROM museum;";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
    echo '<option>$row["musname"]</option>';
}
mysqli_free_result($result);
?>