<div class="container">
<?php

    @ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
    
    $query = " select * from Books where Reserved = 1";
    
    $stmt = $db->prepare($query);
    $stmt->bind_result($ISBN, $title, $pages, $edition, $published, $author, $reserved);
    $stmt->execute();

    echo '<table bgcolor="#dddddd" cellpadding="6">';
    echo '<tr><b><td>Title</td> <td>Author</td> <td>Reserved</td> </b> </tr>';
    while ($stmt->fetch()) {
        echo "<tr>";
        echo "<td> $title </td><td> $author </td>";
        echo '<td><a href="returnbook.php?bookid=' . urlencode($ISBN) . '"> Return </a></td>';
        echo "</tr>";
    }
    echo "</table>";
    
?>
</div>