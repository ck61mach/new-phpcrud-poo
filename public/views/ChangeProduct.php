<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Crud | Change Product</title>
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
       	<div class="container justify-center flex mx-auto mt-5">
       		<form id="addProduct" class="bg-white border rounded p-4 drop-shadow-md" action="../../src/entities/ChangeProduct.php" method="post">
       			<div class="w-64 flex flex-col mb-4">
       				<label class="mb-1">ID</label>
       				<input class="border border-solid border-slate-400 p-1 outline-none" type="number" name="id" minlength="1" placeholder="ID" required>
       			</div>
       			<div class="w-64 flex flex-col mb-4">
       				<label class="mb-1">Name</label>
       				<input class="border border-solid border-slate-400 p-1 outline-none" type="text" name="name" minlength="1" maxlength="100" placeholder="Product Name" required>
       			</div>
       			<div class="w-64 flex flex-col mb-4">
       				<label class="mb-1">Price</label>
       				<input class="border border-solid border-slate-400 p-1" type="number" step="0.01" name="price" placeholder="Product Price" required>
       			</div>
       			<div class="w-64 flex flex-col mb-4">
       				<label class="mb-1">Currency Type</label>
       				<select class="outline-none cursor-pointer border border-solid border-slate-400 bg-slate-50 p-2" name="currencyType" required>
       					<option>USD</option>
       					<option>BRL</option>
       					<option>JPY</option>
       				</select>
       			</div>
       			<div class="w-64 flex flex-col mb-4">
       				<label class="mb-1">Description</label>
       				<textarea class="outline-none border border-solid border-slate-400 bg-slate-50 p-1" cols="10" rows="5" name="description" minlength="1" maxlength="255" placeholder="Description" required></textarea>
       			</div>
       			<div class="w-64 flex flex-col">
       				<button class="cursor-pointer rounded-md p-1 border bg-orange-400 text-white" name="change" style="width: 16.3rem;">Change</button>
       			</div>
       		</form>
       	</div>
       	
       	<script src="../js/jquery-3.6.3.js"></script>
       	<script src="../js/jquery.validate.js"></script>
       	<script src="../js/validateForm.js"></script>
    </body>
</html>