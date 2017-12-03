<?php

//declare variables for db connection
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'almas_parlour';

/*These are the variables for the host db
$host = 'hpone.hostpoa.com';
$username = 'almaspar_margai';
$password = 'Washiali6564';
$dbname = 'almaspar_almas_parlour';
*/

$conn = mysqli_connect($host, $username,$password,$dbname);
if($conn)
{
    function clean_input($data)
    {
        global $conn;
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);
        $data = mysqli_real_escape_string($conn, $data);

        return $data;
    }
}
else
    echo "<div style='color: red;'>Connection to database failed</div>";
?>