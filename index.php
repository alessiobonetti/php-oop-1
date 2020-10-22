<?php 

class User {
    public $name;
    public $lastname;
    public $eta;
    public $email;
    public $password;
    public $username;

    public function __construct($_email, $_password, $_username){
        $this->email = $_email;
        $this->password = $_password;
        $this->username = $_username;
    }
}

$user1 = new User ("alesine87@gmail.com" , "ale87" , "sibert");
$user2 = new User ("afro@gmail.com", "africboy", "blackmanrule");
$user3 = new User ("caradelevingne@gmail.com", "caradln145", "delevingne");
$user4 = new User ("aldo@gmail.com" , "aldorius", "aldiux");

$users = [$user1,$user2,$user3,$user4] ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php foreach($users as $user) { ?>

        <div class="user">
            <ul>
                <li>
                    <h2>Username</h2>
                    <p> <?php echo $user->username ?> </p>
                </li>

                <li>
                    <h2>Email</h2>
                    <p> <?php echo $user->email ?> </p>
                </li>

                <li>
                    <h2>Password</h2>
                    <p> <?php echo $user->password ?> </p>
                </li>
            </ul>
        </div>

    <?php } ?>
</body>
</html>