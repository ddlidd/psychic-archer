<?php
/**
 * Software License Agreement (http://creativecommons.org/licenses/by-nc/3.0/)
 * Software Licnese Type (Attribution-NonCommercial 3.0 Unported)
 * Copyright (c) 2012 Edmund K.
 * @example ftp_conn.php?ftp_user=&ftp_pass=&ftp_host=&ftp_port
**/

// Get All The Data.
$ftp_user = $_GET['ftp_user'];
$ftp_pass = $_GET['ftp_pass'];

$ftp_host = $_GET['ftp_host'];
$ftp_port = $_GET['ftp_port'];
$local = 'example.zip';
$remote = 'example.zip';

//Start FTP Connections and Log In.
$conn = ftp_connect($ftp_host, $ftp_port, 300) or die ('Failed To Connect');
ftp_login($conn, $ftp_user, $ftp_pass) or die ('Failed To Login');
// We have sucessfully connected to the FTP Server. Query Commands Now.
if(ftp_get($conn, $local, $remote, FTP_BINARY)){
	echo"Sucess!";
	}
	else{
	echo"Failed";
}
//Close FTP Connection
ftp_close($conn);
?>