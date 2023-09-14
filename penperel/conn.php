<?php
$host = 'localhost';
$user = 'root';
$pswd = '';
$dbname = 'sistemperalatanpendaftaranelektrik';

$conn = new mysqli($host, $user , $pswd, $dbname);
session_start();
