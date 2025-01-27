<?php
include '../config/db.php';
include '../src/user.php';

$user = new User();
$user->setName($_POST['name']);
$user->setLastName($_POST['lastName']);

$name = $user->getName();
$lastName = $user->getLastName();

$stmt = $conn->prepare("INSERT INTO users (name, lastName) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $lastName);

if ($stmt->execute()) {
    echo "Usuario registrado correctamente.<br>";
} else {
    echo "Error al registrar el usuario: " . $stmt->error . "<br>";
}

$stmt->close();
$conn->close();

header("Location: ../templates/users.php");
exit();
?>