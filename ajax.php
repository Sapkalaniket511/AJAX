<?php
 $city=array(
    "japan" => "tokyo",
    "Mexico" => "mexico city",
   "usa" => "new york city",
   "india" => "mumbai",
   "korea" => "seoul",
   "china" => "shanghai",
   "nigeria" => "lagos",
   "argentina" => "buenos aires",
   "egypt" => "cairo",
   "uk" => "london"
    );

    $q=$_REQUEST["q"];

    $country=array_search($q,$city);
    echo "<p>$q is in $country.</p>" ;
    ?>