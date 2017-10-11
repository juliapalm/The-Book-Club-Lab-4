<?php include ("config.php"); ?>
   
<div id="headerbg">
</div>

<div id="header">
    <ul class="nav">
        <li><a class="<?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : NULL ?>" href="index.php">HOME</a></li>
        <li><a class="<?php echo $current_page == 'about.php' ? 'active' : NULL ?>" href="about.php">ABOUT US</a></li>
        <li><a class="<?php echo $current_page == 'browse.php' ? 'active' : NULL ?>" href="browse.php">BROWSE BOOKS</a></li>
        <li><a class="<?php echo $current_page == 'mybooks.php' ? 'active' : NULL ?>" href="mybooks.php">MY BOOKS</a></li>
        <li><a class="<?php echo $current_page == 'contact.php' ? 'active' : NULL ?>" href="contact.php">CONTACT</a></li>
        <li><a class="<?php echo $current_page == 'gallery.php' ? 'active' : NULL ?>" href="gallery.php">GALLERY</a></li>
    </ul>
</div>

<?php
    #get the current page in the congig file - exploding the URL ju.se/pages/about.php you want the end
    #(==) is true?, (?) give it class active, else (:) have it to null (.) means concatenation (a series of interconnected things)
    #(@) means ignore the problems and keep going
    #(->) for this, check this
    #(%) means what ever '%searchtitle%'
    #header has to go outside the fetch to become titles
    #onloan FROM books (choose which to display)
    
    #SEQURITY
    #cross site scripting, makes it impossible to code for user
    #don't allow user to open tags
    #$comment=htmlentitles
    #SQL inject something?
    #uname escape sting makes the user only input text
    #session hijacking - steal session id - false link
    #check ip - if ip of user is == to ip when the session was created then ok, if not automatically delete the session and break the connection
    #session,cookie,httponly
?>

