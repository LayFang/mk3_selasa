<?php
$host = 'localhost';
$user = 'root';
$pswd = '';
$dbname = 'sistempendaftaranperalatanelektrik';

$conn = new mysqli($host, $user , $pswd, $dbname);
session_start();
