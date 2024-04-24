<?php

function addNewsEventArticle($mysqli, $type)
{

    try {

        $title = $_POST['title'];
        $body = $_POST['body'];
        $datePosted = $_POST['datePosted'];
        $author = $_POST['author'];
        $status = $_POST['status'];
        $type = $type;


        $sql = "INSERT INTO publications (title, body, datePosted, author, status, type) VALUES (:title, :body, :datePosted, :author, :status, :type)";

        $stmt = $mysqli->prepare($sql);

        $stmt->execute([
            'title' => $title,
            'body' => $body,
            'datePosted' => $datePosted,
            'author' => $author,
            'status' => $status,
            'type' => $type
        ]);

        return $type == "news" ? "News and Events added successfully" : "Articles added successfully";
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}


function addPhotoRelease($mysqli)
{
    try {

        $title = $_POST['title'];
        $imagepath = $_POST['imagepath'];
        $datePosted = $_POST['datePosted'];
        $author = $_POST['author'];
        $status = $_POST['status'];


        $sql = "INSERT INTO publications (title, image_path, datePosted, author, status, type) VALUES (:title, :imagepath, :datePosted, :author, :status, :type)";

        $stmt = $mysqli->prepare($sql);

        $stmt->execute([
            'title' => $title,
            'imagepath' => $imagepath,
            'datePosted' => $datePosted,
            'author' => $author,
            'status' => $status,
            'type' => 'photorelease'
        ]);

        return true;
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function addCareers($mysqli)
{

    try {
        $title = $_POST['title'];

        $attachment = Attachment::constructStatement($mysqli, 'attachments', $_FILES['attachment'], 1);
        $attachment->execute();
        $attachment_id = $mysqli->lastInsertId();

        Attachment::Upload($_FILES['attachment'], STORAGE_PATH, 'careers', $attachment_id);


        $datePosted = $_POST['datePosted'];
        $status = $_POST['status'];


        $sql = "INSERT INTO publications (title, attachment, datePosted, status, type) VALUES (:title, :attachment, :datePosted, :status,:type)";


        $stmt = $mysqli->prepare($sql);

        $stmt->execute([
            'title' => $title,
            'attachment' => $attachment_id,
            'datePosted' => $datePosted,
            'status' => $status,
            'type' => 'careers'
        ]);

        return  true;
    } catch (PDOException $e) {
        return false;
    }
}
