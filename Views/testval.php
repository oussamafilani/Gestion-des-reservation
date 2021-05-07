<!-- <script>
    var res = "success";
</script> -->

<?php
// echo "<script>document.writeln(res);</script>";
?>




<?php
// if (isset($_POST['click'])) {
//     $name = $_POST['fname'];
//     $newname = explode(',', $name);
//     var_dump($newname);
// }
?>

<!-- <form method="post">
    <input type="hidden" name="fname" value="3,1" placeholder="firstname">
    <button name="click" type="submit">click</button>
</form> -->


<?php

// if(strpos($mystring, $word) !== false){
//     echo "Word Found!";
// } else{
//     echo "Word Not Found!";
// }

if (isset($_POST['click'])) {

    var_dump($_POST);

    echo '<br>';

    foreach ($_POST as $name => $val) {
        if (strpos($name, 'name') !== false) {
            echo $name;
            echo '<br>';
            echo $val;
            echo '<br>';
        }
    }
}
?>

<form method="post">
    <input type="text" name="name1" placeholder="name"><br>
    <input type="text" name="name2" placeholder="name"><br>
    <input type="text" name="name3" placeholder="name"><br>

    <input type="text" name="option" placeholder="use"><br>
    <input type="text" name="phone" placeholder="phone"><br>
    <input type="text" name="email" placeholder="email"><br>
    <button name="click" type="submit">click</button>
</form>