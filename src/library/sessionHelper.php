<!-- <?php
session_start();  
if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+ 1;
else
    $_SESSION['views'] = 1;

echo "views = ". $_SESSION['views'];

?>

<!doctype html>

<head>

</head>

<body>

<script type="text/javascript">

function logoutck() {
    var r = confirm("Do you really want to log out?");
    if (r) {
       window.location.href = 'logout.php'
    }
}

</script>

<input id="button1" type='button' onclick='logoutck();' value='LOGOUT'/>

</body>

</html>


logout.php

<?php

session_start();

if(isset($_SESSION['views']))
    unset($_SESSION['views']);

header("Location: session1.php");

?> -->




