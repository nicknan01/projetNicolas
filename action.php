<?php
function verifier($data)
{
$data = trim($data);
$data = htmlspecialchars($data);
$data = stripcslashes($data);
return $data;
}