<?php
while($row = mysqli_fetch_array($data["SP"])){
    echo $row["TenSP"];
}