<?php

	$connect = new mysqli("localhost", "root", "", "jbu_store_db", 3307);
			
			if ($connect->connect_errno){
				
				die('Could not connect: ' . $connect->connect_errno);
			}
?>