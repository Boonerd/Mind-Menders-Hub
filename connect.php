<?php
 $server = 'localhost';
 $username = 'root';
 $password = '';
 $database = 'mindmenders';

 $connect = mysqli_connect($server,$username,$password,$database);
 if (!$connect) {
 	echo "Connection unsuccessfull";
 }/*else{
 	echo "Connection not successful";
 }
 $sql = "CREATE DATABASE MindMenders";
 $result = mysqli_query($connect,$sql);
 if ($result) {
 	echo "Database successfully created";
 }else{
 	echo mysqli_error($connect);
 }*/