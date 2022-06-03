<?php

require_once("./loginManager.php");

if (isset($_POST['email'])&&isset($_POST['pass'])){
    authUser();
}
