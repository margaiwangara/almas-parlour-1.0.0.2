<?php


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $number = $_POST['number_tester'];

    echo $number;
}
?>

<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <input type="number" name="number_tester" value="2" min="1"/>
    <button type="submit" name="submit_button">Submit</button>

</form>

