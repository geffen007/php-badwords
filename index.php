<?php
$stringa = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
$_GET["badword"];
$sub = str_replace($_GET, '***', $stringa);
echo $sub;
?>

<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="  crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>


        <button type="button">Vuoi cambiare una parola?</button>




        <script src="script.js" charset="utf-8"></script>

    </body>
</html> -->
