<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Home</title>
</head>
<body>
    
	<h2>Welcome Mr. <?php echo $_SESSION['username']?> </h2>
    <span style='float:right'>
    <button class='btn btn-primary' onclick='signout()'>Signout</button>
    
	</span>

	<table style="font-size:80%">
        <?php       
            all_movies();
       
        ?>
       
    </table>
	
	<script>
function signout(){
    location.href='index.php?page=signout';
}
</script>
</body>
</html>