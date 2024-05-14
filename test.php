<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "examdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to insert a new user
function insertUser($name, $email, $age)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users (name, email, age) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $name, $email, $age);
    $stmt->execute();
    $stmt->close();
}

// Function to update an existing user
function updateUser($id, $name, $email, $age)
{
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET name = ?, email = ?, age = ? WHERE id = ?");
    $stmt->bind_param("ssii", $name, $email, $age, $id);
    $stmt->execute();
    $stmt->close();
}

// Function to delete a user
function deleteUser($id)
{
    global $conn;
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Function to retrieve all users
function getAllUsers()
{
    global $conn;
    $result = $conn->query("SELECT * FROM users");
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Age</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No users found.";
    }
}

// Example usage
insertUser("John Doe", "john@example.com", 25);
insertUser("Juan Dela Cruz", "jdelacruz@example.com", 22);
updateUser(1, "Jane Smith", "jane@example.com", 30);
deleteUser(2);
getAllUsers();

$conn->close();
