<?php


function addNewsEventArticle($mysqli, $type)
{

    try {

        $title = "This is a title";
        $body = "This is the content of the news event";
        $datePosted = date('Y-m-d');
        $author = "John Doe";
        $status = "published";
        $type = $type;


        $sql = "INSERT INTO (title, body, datePosted, author, status, type) VALUES (:title, :body, :datePosted, :author, :status, :type)";

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

        $title = "This is a title";
        $imagepath = "path/to/image.jpg";
        $datePosted = date('Y-m-d');
        $author = "John Doe";
        $status = "published";


        $sql = "INSERT INTO (title, imagepath, datePosted, author, status) VALUES (:title, :imagepath, :datePosted, :author, :status)";

        $stmt = $mysqli->prepare($sql);

        $stmt->execute([
            'title' => $title,
            'imagepath' => $imagepath,
            'datePosted' => $datePosted,
            'author' => $author,
            'status' => $status
        ]);

        return "Photo release added successfully";
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

        Attachment::Upload($_FILES['attachment'], '../../storage/', 'careers', $attachment_id);


        $datePosted = $_POST['datePosted'];
        $status = $_POST['status'];


        $sql = "INSERT INTO (title, attachment, datePosted, status) VALUES (:title, :attachment, :datePosted, :status)";


        $stmt = $mysqli->prepare($sql);

        $stmt->execute([
            'title' => $title,
            'attachment' => $attachment_id,
            'datePosted' => $datePosted,
            'status' => $status
        ]);

        return  true;
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}
