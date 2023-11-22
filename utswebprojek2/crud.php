<?php

include 'db.php';

// Read
function getUsers()
{
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM users');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Create
function addUser($username, $email)
{
    global $pdo;
    $stmt = $pdo->prepare('INSERT INTO users (username, email) VALUES (?, ?)');
    $stmt->execute([$username, $email]);
}

// Update
function updateUser($id, $username, $email)
{
    global $pdo;
    $stmt = $pdo->prepare('UPDATE users SET username=?, email=? WHERE id=?');
    $stmt->execute([$username, $email, $id]);
}

// Delete
function deleteUser($id)
{
    global $pdo;
    $stmt = $pdo->prepare('DELETE FROM users WHERE id=?');
    $stmt->execute([$id]);
}
