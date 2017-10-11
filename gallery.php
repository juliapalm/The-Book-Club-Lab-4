<?php include ("config.php"); ?>

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
    
                <h1>Pictures from users:</h1>
                <p>Upload your own pictures by logging in: <a href="userlogin.php">LOG IN</a>
                </p>
                
                <?php
                    #code taken from https://stackoverflow.com/questions/11903289/pull-all-images-from-a-specified-directory-and-then-display-them
                    $directory = "uploadedfiles";
                    $image = scandir($directory);
                    $ignore = Array(".", "..");
                    foreach($image as $curimg){
                        if(!in_array($curimg, $ignore)) {
                            #echo "<div class='gallery'>";
                            echo "<img src='uploadedfiles/$curimg'/>";
                            #echo "</div>"; 
                        }
                    }
                ?>
                
            </main>
    
        <?php include ("footer.php"); ?>
   
        </div>
    </body>

</html>
