<?php

require("class.user2.php");
require("class.pdofactory.php");

// Establecer la conexión PDO
$strDSN = "pgsql:dbname=usuaris;host=localhost;port=5432";
$objPDO = PDOFactory::GetPDO($strDSN, "postgres", "postgres", array());
$objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Crear el primer usuario y establecer sus datos
$objUser1 = new User($objPDO);

$objUser1->setFirstName("Aaron");
$objUser1->setLastName("Vidana");
$objUser1->setUsername("aaronvl31");
$objUser1->setPassword("98urfe9f9rejfr9eh");
$objUser1->setEmailAddress("vidanaloraaaron@fpllefia.com");
$objUser1->setDateAccountCreated(date("Y-m-d"));
$objUser1->setDateLastLogin(date("Y-m-d"));
$objUser1->setTimeLastLogin(date("H:i:s"));
$objUser1->setTimeAccountCreated(date("H:i:s"));


// Crear el segundo usuario
$objUser2 = new User($objPDO);
$objUser2->setFirstName("John");
$objUser2->setLastName("Doe");
$objUser2->setUsername("johndoe");
$objUser2->setPassword("password123");
$objUser2->setEmailAddress("john.doe@example.com");
$objUser2->setDateAccountCreated(date("Y-m-d"));
$objUser2->setDateLastLogin(date("Y-m-d"));
$objUser2->setTimeLastLogin(date("H:i:s"));
$objUser2->setTimeAccountCreated(date("H:i:s"));

// Crear el tercer usuario
$objUser3 = new User($objPDO);
$objUser3->setFirstName("Jane");
$objUser3->setLastName("Doe");
$objUser3->setUsername("janedoe");
$objUser3->setPassword("password456");
$objUser3->setEmailAddress("jane.doe@example.com");
$objUser3->setDateAccountCreated(date("Y-m-d"));
$objUser3->setDateLastLogin(date("Y-m-d"));
$objUser3->setTimeLastLogin(date("H:i:s"));
$objUser3->setTimeAccountCreated(date("H:i:s"));



// Mostrar los detalles del primer usuario
echo "Detalles del primer usuario:<br />";
echo "ID: " . $objUser1->getID() . "<br />";
echo "El nombre es " . $objUser1->getFirstName() . "<br />";
echo "El apellido es " . $objUser1->getLastName() . "<br />";
echo "El nombre de usuario es " . $objUser1->getUsername() . "<br />";
echo "La contraseña MD5 es " . $objUser1->getPassword() . "<br />";
echo "La dirección de correo electrónico es " . $objUser1->getEmailAddress() . "<br />";
echo "La fecha del último inicio de sesión es " . $objUser1->getDateLastLogin() . "<br />";
echo "La hora del último inicio de sesión es " . $objUser1->getTimeLastLogin() . "<br />";
echo "La fecha de creación de la cuenta es " . $objUser1->getDateAccountCreated() . "<br />";
echo "La hora de creación de la cuenta es " . $objUser1->getTimeAccountCreated() . "<br />";
echo "<br />";

// Mostrar los detalles del segundo usuario
echo "Detalles del segundo usuario:<br />";
echo "ID: " . $objUser2->getID() . "<br />";
echo "El nombre es " . $objUser2->getFirstName() . "<br />";
echo "El apellido es " . $objUser2->getLastName() . "<br />";
echo "El nombre de usuario es " . $objUser2->getUsername() . "<br />";
echo "La contraseña MD5 es " . $objUser2->getPassword() . "<br />";
echo "La dirección de correo electrónico es " . $objUser2->getEmailAddress() . "<br />";
echo "La fecha del último inicio de sesión es " . $objUser2->getDateLastLogin() . "<br />";
echo "La hora del último inicio de sesión es " . $objUser2->getTimeLastLogin() . "<br />";
echo "La fecha de creación de la cuenta es " . $objUser2->getDateAccountCreated() . "<br />";
echo "La hora de creación de la cuenta es " . $objUser2->getTimeAccountCreated() . "<br />";
echo "<br />";

// Mostrar los detalles del tercer usuario
echo "Detalles del tercer usuario:<br />";
echo "ID: " . $objUser3->getID() . "<br />";
echo "El nombre es " . $objUser3->getFirstName() . "<br />";
echo "El apellido es " . $objUser3->getLastName() . "<br />";
echo "El nombre de usuario es " . $objUser3->getUsername() . "<br />";
echo "La contraseña MD5 es " . $objUser3->getPassword() . "<br />";
echo "La dirección de correo electrónico es " . $objUser3->getEmailAddress() . "<br />";
echo "La fecha del último inicio de sesión es " . $objUser3->getDateLastLogin() . "<br />";
echo "La hora del último inicio de sesión es " . $objUser3->getTimeLastLogin() . "<br />";
echo "La fecha de creación de la cuenta es " . $objUser3->getDateAccountCreated() . "<br />";
echo "La hora de creación de la cuenta es " . $objUser3->getTimeAccountCreated() . "<br />";
echo "<br />";


// Modificar los usuarios con ID 11, 12 y 13
$objUser11 = new User($objPDO, 11);
$objUser11->setFirstName("Juan");
$objUser11->setLastName("Pérez");
$objUser11->setUsername("juanperez");
$objUser11->setPassword("newpassword123");
$objUser11->setEmailAddress("juan.perez@example.com");
$objUser11->setDateAccountCreated(date("Y-m-d"));
$objUser11->setDateLastLogin(date("Y-m-d"));
$objUser11->setTimeLastLogin(date("H:i:s"));
$objUser11->setTimeAccountCreated(date("H:i:s"));
$objUser11->Save();

$objUser12 = new User($objPDO, 12);
$objUser12->setFirstName("María");
$objUser12->setLastName("García");
$objUser12->setUsername("mariagarcia");
$objUser12->setPassword("newpassword456");
$objUser12->setEmailAddress("maria.garcia@example.com");
$objUser12->setDateAccountCreated(date("Y-m-d"));
$objUser12->setDateLastLogin(date("Y-m-d"));
$objUser12->setTimeLastLogin(date("H:i:s"));
$objUser12->setTimeAccountCreated(date("H:i:s"));
$objUser12->Save();

$objUser13 = new User($objPDO, 13);
$objUser13->setFirstName("Luis");
$objUser13->setLastName("Martínez");
$objUser13->setUsername("luismartinez");
$objUser13->setPassword("newpassword789");
$objUser13->setEmailAddress("luis.martinez@example.com");
$objUser13->setDateAccountCreated(date("Y-m-d"));
$objUser13->setDateLastLogin(date("Y-m-d"));
$objUser13->setTimeLastLogin(date("H:i:s"));
$objUser13->setTimeAccountCreated(date("H:i:s"));
$objUser13->Save();


$objUser11->MarkForDeletion();
unset($objUser11);

$objUser12->MarkForDeletion();
unset($objUser12);

$objUser13->MarkForDeletion();
unset($objUser13);
?>
