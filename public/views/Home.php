<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Crud | Home</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-slate-50">
        <header class="w-full p-2 bg-slate-900 text-slate-50">
        	<nav class="flex gap-5">
        		<h2 class="font-bold text-lg">
        			<a href="/" target="_self">PHPCrud</a>
        		</h2>
        		<a href="Home.php" target="_self">Product's</a>
        		<a href="AddProduct.php" target="_self">Add Product</a>
        	</nav>
    	</header>
       	<div class="container mx-auto text-left mt-5" style="width: 50rem;">
       		<h2 class="font-bold text-2xl">Product List</h2>
       		<p>
           		View all products added to your database!<br>
           		Add, change or delete any product that you no longer find necessary.
       		</p>
       		
       		<div class="container mt-2">
       			<a href="ChangeProduct.php" class="w-24 p-2 rounded-md p-1 border bg-orange-400 text-white">Edit</a>
       			<a href="DeleteProduct.php" class="w-24 p-2 rounded-md p-1 border bg-rose-600 text-white">Delete</a>
       		</div>
       		
       		<div class="mt-5" style="width: 50rem;">
       			<table class="table-auto border-collapse border border-slate-400">
       				<thead>
       					<tr>
           					<th class="border border-slate-300 bg-slate-900 text-white">ID</th>
           					<th class="border border-slate-300 bg-slate-900 text-white">Name</th>
           					<th class="border border-slate-300 bg-slate-900 text-white">Description</th>
           					<th class="border border-slate-300 bg-slate-900 text-white">Currency Type</th>
           					<th class="border border-slate-300 bg-slate-900 text-white">Price</th>
       					</tr>
       				</thead>
       				<tbody>
       					<?php include "../templates/listAllProduct.php"; ?>
       				</tbody>
       			</table>
       		</div>
       	</div>
    </body>
</html>