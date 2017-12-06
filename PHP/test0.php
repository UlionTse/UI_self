<?php
if (isset($_POST['action']) && $_POST['action'] == 'submitted') {
    echo '<pre>';

    print_r($_POST);
    echo '<a href="'. $_SERVER['PHP_SELF'] .'">Please try again</a>';

    echo '</pre>';
} else {
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Name:  <input type="text" name="personal[name]"><br />
    Email: <input type="text" name="personal[email]"><br />
    Beer: <br>
    <select multiple name="beer[]">
        <option value="warthog">Warthog</option>
        <option value="guinness">Guinness</option>
        <option value="stuttgarter">Stuttgarter Schwabenbr</option>
    </select><br />
    <input type="hidden" name="action" value="submitted" />
    <input type="submit" name="submit" value="submit me!" />
</form>
<?php
}

#$url = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];  
#echo  $url;

// $name = 'Ulion';
// function test1()
// {
//    global $name;
//    echo "$name is a good person. ";
//    return 23;
// }
// echo 'He is '.test1().'.';


// $m = 0;
// function sum_gaosi()
// {
//     global $m;
//     $m++;
//     echo $m;
//     if ($m < 10)
//     {
//         sum_gaosi();
//     }

// }

// sum_gaosi();
?>
