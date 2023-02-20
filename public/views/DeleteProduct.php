<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Crud | Delete Product</title>
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
       		<form id="addProduct" class="bg-white border rounded p-4 drop-shadow-md" action="../../src/entities/DeleteProduct.php" method="post">
       			<div class="w-64 flex flex-col mb-4">
       				<label class="mb-1">ID</label>
       				<input class="border border-solid border-slate-400 p-1 outline-none" type="number" name="id" minlength="1" placeholder="ID" required>
       			</div>
       			<div class="w-64 flex flex-col">
       				<button class="cursor-pointer rounded-md p-1 border bg-rose-600 text-white" name="delete" style="width: 16.3rem;">Delete</button>
       			</div>
       		</form>
       	</div>
       	
       	<script src="../js/jquery-3.6.3.js"></script>
       	<script src="../js/jquery.validate.js"></script>
       	<script src="../js/validateForm.js"></script>
    </body>
</html>