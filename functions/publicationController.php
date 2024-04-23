<?php


function addNewsEvent($mysqli)
{

    try {

        $title = "This is a title";
        $body = "This is the content of the news event";
        $datePosted = date('Y-m-d');
        $author = "John Doe";
        $status = "news";
        $type = "published";


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

        return "News event added successfully";
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
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}
