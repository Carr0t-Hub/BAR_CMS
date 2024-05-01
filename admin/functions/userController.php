<?php

function addUser($mysqli)
{
    try {
        $sql = "INSERT INTO `credentials` 
        (`firstName`, `lastName`, `email`, `username`, `password`, `role`) 
            VALUES 
        (:firstName, :lastName, :email, :username, :password, :role)";

        $stmt = $mysqli->prepare($sql);
        $stmt->execute(
            array(
                ':firstName' => $_POST['firstName'],
                ':lastName' => $_POST['lastName'],
                ':email' => $_POST['email'],
                ':username' => $_POST['username'],
                ':password' => $_POST['password'],
                ':role' => 1
            )
        );
        return "success";
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function userLogin($mysqli)
{
    try {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM credentials WHERE username = :username";

        $stmt = $mysqli->prepare($sql);

        $stmt->execute(
            array(
                ':username' => $username
            )
        );

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() == 0) {
            return "User not found";
        } else {
            if (!$result['disabled']) {

                if ($result['updatePassword'] == 0) {
                    $dbpassword = $result['password'];

                    if ($dbpassword == $password) {
                        $_SESSION['id'] = $result['id'];
                        $_SESSION['username'] = $result['username'];
                        $_SESSION['role'] = $result['role'];
                        $_SESSION['name'] = $result['firstName'] . " " . $result['lastName'];

                        userLastLogin($mysqli, $result['id']);

                        return "success";
                    } else {
                        return "Password is incorrect";
                    }
                } else {
                    if (password_verify($password, $result['password'])) {

                        $_SESSION['id'] = $result['id'];
                        $_SESSION['username'] = $result['username'];
                        $_SESSION['role'] = $result['role'];
                        $_SESSION['name'] = $result['firstName'] . " " . $result['lastName'];


                        userLastLogin($mysqli, $result['id']);

                        return "success";
                    } else {
                        return "Password is incorrect";
                    }
                }
            } else {
                return "User is disabled";
            }
        }
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function userLastLogin($mysqli, $id)
{
    try {
        $sql = "UPDATE credentials SET last_login = NOW() WHERE id = :id";

        $stmt = $mysqli->prepare($sql);

        $stmt->execute(
            array(
                ':id' => $id
            )
        );

        return "success";
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function updatePassword($mysqli, $id)
{

    try {
        $sql = "UPDATE credentials SET password = :password, updatePassword = 1 WHERE id = :id";

        $stmt = $mysqli->prepare($sql);

        $stmt->execute(
            array(
                ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                ':id' => $id
            )
        );

        return "success";
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function getAllUsers($mysqli)
{
    try {
        $sql = "SELECT id, firstName, lastName, email, username, last_login, disabled FROM credentials";

        $stmt = $mysqli->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function disableUsers($mysqli)
{
    try {
        $sql = "UPDATE credentials SET disabled = :disabled WHERE id = :id";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute([
            ':disabled' => $_POST['disabled'],
            ':id' => $_POST['id']
        ]);

        return "success";
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}


function resetUserPassword($mysqli)
{
    try {
        $sql = "UPDATE credentials SET password = :password, updatePassword = 0 WHERE id = :id";

        $stmt = $mysqli->prepare($sql);

        $stmt->execute([
            ':password' => $_POST['password'],
            ':id' => $_POST['id']
        ]);

        return "success";
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function getUserInfoById($mysqli, $id)
{
    try {
        $sql = "SELECT * FROM credentials WHERE id = :id";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute([
            'id' => $id
            ]);
        return $stmt->fetch();
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function editUser($mysqli)
{
    try {
        $sql = "UPDATE `credentials` SET 
        firstName = :firstName, 
        lastName = :lastName, 
        email = :email, 
        username = :username
        WHERE id = :id";

        $stmt = $mysqli->prepare($sql);

        $stmt->execute([
            ':firstName' => $_POST['firstName'],
            ':lastName' => $_POST['lastName'],
            ':email' => $_POST['email'],
            ':username' => $_POST['username'],
            ':id' => $_POST['id']
        ]);

        return "success";
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}