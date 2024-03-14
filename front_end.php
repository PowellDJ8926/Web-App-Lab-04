<html>
	<head>
	<script>

function showcart()
{

document.getElementById('cart').style.display='block';



}


function addItem(n)
{

document.getElementById('cart').innerHTML += n;




}



</script>
		<style>
			
			.white_content

			{
					display:none;
					position:absolute;
					top:50px;
					left:500px;
					width:1080px;
					height:600px;
					background-color:#FFF;
					z-index:1000;

			}

			.black_content

			{

					display:none;
					position:absolute;
					top:0%;
					left:0%;
					width:100%;
					height:100%;
					background-color:black;
					opacity:.70;
					z-index:1;

			}
			
			ul
			{
				font-family: Arial;
				list-style-type:none;
				background-color:#c5c5c5;
				height:46px;
				overflow:hidden;
			}
			li
			{
				float:left;
			}
			li a, .drp
			{
				  display: inline-block;
				  color: black;
				  text-align: center;
				  padding: 14px 16px;
				  text-decoration:none;
				  
			}
			li .menu-item
			{
				
				display:inline-block;
			}
			.menu-content
			{
				
				display:none;
				position:absolute;
				background-color:#f8f8f8;
				z-index:1;
				
				
			}
			.menu-content a {
			  font-family: Arial;
			  color: black;
			  padding: 12px 16px;
			  text-decoration: none;
			  display: block;
			  
			}
			.menu-content a:hover{
			  background-color:#f8f8f8;
			  
			}
			
			.menu-item:hover .menu-content
			{
				display:block;
				
			}
			
			h1{
				color:black;
				font-family:"Brush Script MT", cursive;
			}
			
			 .image-container {
            position: relative; 
            width: 500px; 
            height: 300px; 
             
        }

        .specific-area1 {
            position: absolute; 
            top: 0px; 
            left: 10px; 
           
        }
		.specific-area2 {
            position: absolute; 
            top: 0px; 
            left: 1700px; 
           
        }
		.specific-area3 {
            position: absolute; 
            top: 500px; 
            left: 600px; 
           
        }
		.specific-area4 {
            position: absolute; 
            top: -750px; 
            left: 1810px; 
           
        }
		
		.cart_content{
			display:none;
			 position: absolute; 
            top: 80px; 
            left: 1820px; 
		
		
		
		}
			
		</style>
	</head>
	
	
	<body>
	
	
	
	<?php include ("db_connection.php");?>
	
	<h1 align="center"> <img src="img\jbu_logo.jpg"> </h1>
	<h1 align="center"> Online JBU Pet Shop </h1>
	<!-- -->

<!--topbanner-->
<ul>
		<li class="menu-item"><a href="#" class="drp">Reptiles </a>
			<div class="menu-content">
				
				<a  href="add_book.php">Tortises</a><br>
				<a  href="remove_book.php">Lizards</a><br>
				<a href="display_books.php">Snakes</a><br>
			</div>
		
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Exotic Animals </a>
		<div class="menu-content">
			<a  href="add_book.php">Sugar Glider</a><br>
			<a  href="remove_book.php">Capybara</a><br>
			<a href="display_books.php">Axolotl</a><br>
			<a href="evilpetstore.html">Dont click</a><br>
		</div>
		
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Users </a>	
		<div class="menu-content">
			<a href="add_user.php">Add User</a><br>
			<a href="remove_user.php">Remove User</a><br>
			<a href="display_users.php">Display all Users</a><br>
		</div>
		</li>
	</ul>
	<p align="center"> Welcome to my Online store - Here are the deals of the week!<p>
	<div id="cart" width="100" height="100" class="cart_content" > </div>
	
<!--bottombanner-->
<center>
<table>
				<tr>
	<?php
		$sql_product="SELECT * FROM product_tab";
		$result_product=$connect->query($sql_product);
		$count = 0;
		while ($row_product = $result_product->fetch_assoc())
		{
		?>
			<td> <?php echo "<img src='".$row_product["product_img"]."' width='100' height='100'/>"; ?>
 <br>
					<?php echo $row_product["product_name"] ?><br>
					<?php echo $row_product["unit_price"] ?><br>
					<?php echo $row_product["qty_in_stock"] ?><br>
					<input type = "button" value="Add to Cart" onClick="javascript:addItem('<?php echo $row_product["product_name"]; ?> ')" />
				</td>


	<?php
			if ($count>=5)
			{ echo "</tr><tr>";
			  $count=1;
			}
			else
			{
				$count++;
			}
		}
	?>
	
	
				</tr>
			</table>
			</center>
	<div class="image-container">
        
		<img src="img/cart.png" width="80" height="80" class="specific-area4" onclick = "showcart()" alt="Image">
	</body>
</html>