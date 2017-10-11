<h3>BROWSE BOOKS</h3>

<div class="search">
    <form action="browse.php" method="GET">
        <INPUT type="text" name="searchtitle" placeholder="Title">
        <INPUT type="submit" name="submit" value="Search">
        <INPUT type="text" name="searchauthor" placeholder="Author">
        <INPUT type="submit" name="submit" value="Search">
    </form>
</div>

<div id="booklist">
<h3>BOOK LIST</h3>
            
<?php
# This is the mysqli version

$searchtitle = "";
$searchauthor = "";
    
#$searchtitle = htmlentities(mysqli_real_escape_string($db, $searchtitle));
#$searchauthor = htmlentities(mysqli_real_escape_string($db, $searchauthor));


$searchtitle = htmlentities($searchtitle);
$searchauthor = htmlentities($searchauthor);
  
if (isset($_GET) && !empty($_GET)) {
# Get data from form
    echo $searchauthor;
    
    $searchtitle = trim($_GET['searchtitle']);
    $searchauthor = trim($_GET['searchauthor']);
}

//	if (!$searchtitle && !$searchauthor) {
//	  echo "You must specify either a title or an author";
//	  exit();
//	}

$searchtitle = addslashes($searchtitle);
$searchauthor = addslashes($searchauthor);

# Open the database
@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

if ($db->connect_error) {
    echo "could not connect: " . $db->connect_error;
    printf("<br><a href=index.php>Return to home page </a>");
    exit();
}

# Build the query. Users are allowed to search on title, author, or both

$query = " select * from Books";
if ($searchtitle && !$searchauthor) { // Title search only
    $query = $query . " where Title like '%" . $searchtitle . "%'";
}
if (!$searchtitle && $searchauthor) { // Author search only
    $query = $query . " where Author like '%" . $searchauthor . "%'";
}
if ($searchtitle && $searchauthor) { // Title and Author search
    $query = $query . " where Title like '%" . $searchtitle . "%' and Author like '%" . $searchauthor . "%'"; // unfinished
}

//echo "Running the query: $query <br/>"; # For debugging

# Here's the query using an associative array for the results
//$result = $db->query($query);
//echo "<p> $result->num_rows matching books found </p>";
//echo "<table border=1>";
//while($row = $result->fetch_assoc()) {
//echo "<tr><td>" . $row['bookid'] . "</td> <td>" . $row['title'] . "</td><td>" . $row['author'] . "</td></tr>";
//}
//echo "</table>";
 

# Here's the query using bound result parameters
    // echo "we are now using bound result parameters <br/>";
    $stmt = $db->prepare($query);
    $stmt->bind_result($ISBN, $title, $pages, $edition, $published, $author, $reserved);
    $stmt->execute();

    echo '<table bgcolor="#dddddd" cellpadding="6">';
    echo '<tr><b><td>Title</td> <td>Author</td> <td>Reserve</td> </b> </tr>';
    while ($stmt->fetch()) {
        echo "<tr>";
        echo "<td> $title </td><td> $author </td>";
        echo '<td><a href="reserve.php?bookid=' . urlencode($ISBN) . '"> Reserve </a></td>';
        echo "</tr>";
    }
    echo "</table>";
    
?>

</div>
