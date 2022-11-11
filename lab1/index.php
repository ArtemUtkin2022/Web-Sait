<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
  <title> lab1 </title>
 </head>
 <body>
 <style>
   HTML { font-size: 40px;
		background-color: rgb(231, 209, 159);
}
h2{
	text-align: center;
}
h1{
	float:left;
}
input{
	
	height: 40px;
	margin-top:85px;
	margin-left:30px;
}
  </style>
     <form action="index.php" method="get">
 <h2> Вычисление объема куба </h2> 
     <h1>Введите данные:</h1>
     <input type="text" name="A"><br>
     <input type="submit" value="Вычислить объем куба">
		 <p>Результат подсчета</p>
     </form>
     <?php 
		 if($_GET == null){
			echo "Данные отсутствуют!";
		 }
		 else{
			$b = 0;
			echo $v = $b + ($_GET["A"] * $_GET["A"] * $_GET["A"]);
		 }
		?> 
 </body>
</html>


