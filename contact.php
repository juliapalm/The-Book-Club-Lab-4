<!doctype html>
<html>
	
	<head>
		<title>BOOK CLUB</title>
		<meta name="Home" content="Home"/>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="main.css"/>
		<link href="https://fonts.googleapis.com/css?family=Lato:400,900|Open+Sans:300,700" rel="stylesheet"/>
	</head>
	
	<body>
    <div id="sitecontainer">
    <main>
    
	<?php include ("header.php"); ?>
   
        <div class="form">
            <h3>Contact us</h3>
            <form method="POST" action="thank-you.html">
                <input type="name" name="name" placeholder="Name" required/>
                <input type="email" name="email" placeholder="E-Mail" required/>
                <textarea name="textarea" placeholder="Short message"></textarea>
                <input type="submit" value="Send" />
            </form>
        </div>
        
    </main>
    
    <?php include ("footer.php"); ?>
   
    </div>
    </body>

</html>
