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

const RG_EMAIL = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
const RG_PASSWORD = '/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/';
const RG_PHONE = '/^[0-9\-\(\)\/\+\s]*$/';
const RG_NAME = '/^([a-zA-Z0-9" ]+)$/';

if (isset($_POST['click'])) {

    $array = array();
    var_dump($_POST);

    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $name = $_POST['name1'];

    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if (!preg_match(RG_EMAIL, $email)) {

        $emailErr = "Invalid email format";
        echo "<script>alert(\"l'email ou le mot de passe n'est pas correct\")</script>";
    } else if (!preg_match(RG_PASSWORD, $password)) {

        $passwordErr = "Invalid password format";
        echo "<script>alert(\"le mot de passe n'est pas correct\")</script>";
    } else if (!preg_match(RG_PHONE, $phone)) {

        $passwordErr = "Invalid phone format";
        echo "<script>alert(\"le phone numbre n'est pas correct\")</script>";
    } else if (!preg_match(RG_NAME, $name)) {

        $passwordErr = "Invalid name format";
        echo "<script>alert(\"le nome n'est pas correct\")</script>";
    }

    echo '<br>';

    // foreach ($_POST as $name => $val) {
    //     if (strpos($name, 'name') !== false) {
    //         array_push($array, [$name => $val]);
    //     }
    // }
    foreach ($_POST as $name => $val) {
        if (strpos($name, 'name') !== false) {
            array_push($array,  $val);
        }
    }
    var_dump($array);
}

$cars = array("Volvo", "BMW", "Toyota");

foreach ($cars as $c) {
    echo '<br>';
    echo $c;
    echo '<br>';
}


?>

<form method="post">
    <input type="text" name="name1" placeholder="name"><br>
    <input type="text" name="name2" placeholder="name"><br>
    <input type="password" name="password" placeholder="password"><br>

    <input type="text" name="option" placeholder="use"><br>
    <input type="text" name="phone" placeholder="phone"><br>
    <input type="text" name="email" placeholder="email"><br>
    <button name="click" type="submit">click</button>
</form>