<?php


function addUser($mysqli)
{

    try {
        $firstname = "John";
        $lastname = "Doe";
        $username = "jdoe";
        $password = "foobar";
        $role = 1;

        $sql = "INSERT INTO credentials (firstname, lastname, username, password, role) VALUES (:firstname, :lastname, :username, :password, :role)";

        $stmt = $mysqli->prepare($sql);

        $stmt->execute(
            array(
                ':firstname' => $firstname,
                ':lastname' => $lastname,
                ':username' => $username,
                ':password' => $password,
                ':role' => $role
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
        $username = "jposorio";
        $password = "barpassword";

        $sql = "SELECT * FROM credentials WHERE username = :username";

        $stmt = $mysqli->prepare($sql);

        $stmt->execute(
            array(
                ':username' => $username
            )
        );

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result['updatePassword'] == 0) {
            $dbpassword = $result['password'];

            if ($dbpassword == $password)
                return "success";
            else
                return "failed";
        } else {
            if (password_verify($password, $result['password']))
                return "success";
            else
                return "failed";
        }
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function updatePassword($mysqli, $id)
{

    try {

        $password = "barpassword";

        $sql = "UPDATE credentials SET password = :password, updatePassword = 1 WHERE id = :id";

        $stmt = $mysqli->prepare($sql);

        $stmt->execute(
            array(
                ':password' => password_hash($password, PASSWORD_DEFAULT),
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
        $sql = "SELECT * FROM credentials";

        $stmt = $mysqli->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function disableUsers($mysqli, $id)
{

    try {

        $sql = "UPDATE credentials SET disabled = 1 WHERE id = :id";

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


function resetUserPassword($mysqli, $id)
{
    try {
        $password = "foobar";

        $sql = "UPDATE credentials SET password = :password, updatePassword = 0 WHERE id = :id";

        $stmt = $mysqli->prepare($sql);

        $stmt->execute(
            array(
                ':password' => $password,
                ':id' => $id
            )
        );

        return "success";
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function updateUserInfo($mysqli, $id)
{
    try {
        $firstname = "Juan";
        $lastname = "Dela Cruz";
        $username = "jdelacruz";
        $role = 1;

        $sql = "UPDATE credentials SET firstname = :firstname, lastname = :lastname, username = :username, role = :role WHERE id = :id";

        $stmt = $mysqli->prepare($sql);

        $stmt->execute(
            array(
                ':firstname' => $firstname,
                ':lastname' => $lastname,
                ':username' => $username,
                ':role' => $role,
                ':id' => $id
            )
        );

        return "success";
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}
