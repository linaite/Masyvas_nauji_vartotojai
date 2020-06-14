<?php
//1. Sukurkite masyvą kuris atspindėtų vartotojų registraciją svetainėje:
//Vardas, emailas, slaptazodis,vartotojo_amzus, vartotojo_sukurimo_data,
// vartotojo_paskutinio_prisijungimo_data, vartotojo_role.

//2. Panaudojant 1 uzduoties masyva ir atitinkama cikla sukurkite lentele
//ir lenteleje atvaizduokite:
// vartotojo_vardas, emailas, paskutinio_prisijungimo_data, role.

$users = [
    [
        'user_id' => 1,
        'name' => 'Jonas',
        'email' => 'jonas@jonaitis.lt',
        'password' => 'labadiena',
        'user_age' => '18',
        'user_date' => '2020.01.20',
        'user_last_sign' => '2020.05.30',
        'role' => 1,
    ],
    [
        'user_id' => 2,
        'name' => 'Petras',
        'email' => 'Petras@petraitis.lt',
        'password' => 'labadiena',
        'user_age' => '20',
        'user_date' => '2020.01.20',
        'user_last_sign' => '2020.05.30',
        'role' => 1,
    ],
    [
        'user_id' => 3,
        'name' => 'Antanas',
        'email' => 'Antans@antanaitis.lt',
        'password' => 'labadiena',
        'user_age' => '21',
        'user_date' => '2020.01.20',
        'user_last_sign' => '2020.05.30',
        'role' => 2,
    ],
    [
        'user_id' => 4,
        'name' => 'Kazys',
        'email' => 'Kazys@kazytis.lt',
        'password' => 'labadiena',
        'user_age' => '30',
        'user_date' => '2020.01.20',
        'user_last_sign' => '2020.05.30',
        'role' => 2,
    ],
    [
        'user_id' => 5,
        'name' => 'Birute',
        'email' => 'Birute@biritaite.lt',
        'password' => 'labadiena',
        'user_age' => '50',
        'user_date' => '2020.01.20',
        'user_last_sign' => '2020.05.30',
        'role' => 2,
    ],
];

//3. Panaudojant 1 uzduoties masyva sukurkite nauja masyva kuriame
//butu i atskirus masyvus sudeti skirtingu roliu vartotojai.

$new_users = [];
$new_users_0 = [];
$new_users_1 = [];
foreach ($users as $key => $user) {
   if ($user['role'] === 1) {
       array_push($new_users_1, $user);
   } else {
       array_push($new_users_0, $user);
   }
}
array_push($new_users, $new_users_1, $new_users_0);
var_dump($new_users);

//4. panaudojus 1 uzduoties masyva sudeliokite vartotojus
//masyve nuo jauniausio iki vyriausio.

sort($users);
var_dump($users);

//5. panaudojus 1 uzduoties masyva naudojant for cikla suraskite jauniausia
//vartotoja ir atvaizduokite jo duomenis ekrane.

$min_age = 100; //nustatomas pradinio tasko kintamasis
foreach ($users as $user) { //paleidziame cikla masyvui, kad tikrintu jo masyvus
    if ($user['user_age'] < $min_age) { //tikriname salyga, jeigu user amzius yra mazesnis negu kintamasis amzius, tuomet salyga atitinka ir perrasomas naujas min amzius.
        //taip praeiname visus users, kol perrasoma iki minimalaus amziaus.
        $min_age = $user['user_age']; // kintamasis atitinka minimalu amziu;
    }
}
var_dump($min_age); //issiprintinam jauniausia amziu

//isprintinam norimus duomenis to asmens, kuris jauniausias
foreach ($users as $user) { // paimame is masyvo userius ir tikriname kuris atitinka minimalu user amziu
    if ($user['user_age'] === $min_age) {
        print $user['name'] . ', ' . $user['email']. ', ' . $user['user_age'];
        print '<br><br>';
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<table>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php print $user['name'];?></td>
            <td><?php print $user['email'];?></td>
            <td><?php print $user['user_last_sign'];?></td>
            <td><?php print $user['role'];?></td>
        </tr>
    <?php endforeach;?>
</table>
</body>
</html>
