<?php
// Buat array asosiatif
$person = array(
"name" => "John",
"age" => 30,
"city" => "New York"
);

// akses elements
echo $person["name"]; // John

// tambah element
$person["email"] = "john@example.com";

// Loop pada array
foreach ($person as $key => $value) {
echo "$key: $value";
}
?>