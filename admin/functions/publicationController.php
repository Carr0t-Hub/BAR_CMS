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
        $datePosted = $_POST['datePosted'];
        $status = $_POST['status'];


        $imagearray = Attachment::UploadMultiple($_FILES['images'], STORAGE_PATH, 'photo_releases', $mysqli, $_SESSION['id']);




        $sql = "INSERT INTO publications (title, image_array, datePosted, status, type) VALUES (:title, :imagearray, :datePosted, :status, :type)";

        $stmt = $mysqli->prepare($sql);

        $stmt->execute([
            'title' => $title,
            'imagearray' => json_encode($imagearray),
            'datePosted' => $datePosted,
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

function getPublications($mysqli, $type = null)
{

    try {

        if ($type == null) {
            $sql = "SELECT pubs.*, att.id as attachment_id, att.size, att.fileName, att.fileExtension 
            FROM publications as pubs
            LEFT JOIN attachments as att ON pubs.attachment = att.id
            WHERE pubs.isDeleted = 0 ORDER BY id DESC";

            $stmt = $mysqli->prepare($sql);
            $stmt->execute();
        } else {
            $sql = "SELECT pubs.*, att.id as attachment_id, att.size, att.fileName, att.fileExtension 
            FROM publications as pubs
            LEFT JOIN attachments as att ON pubs.attachment = att.id
            WHERE pubs.type = :type AND pubs.isDeleted = 0 ORDER BY id DESC";
            $stmt = $mysqli->prepare($sql);

            $stmt->execute([
                'type' => $type
            ]);
        }



        return $stmt->fetchAll();
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function getPhotoReleases($mysqli, $page_number = 1, $limit = 6)
{
    try {
        $offset = ($page_number - 1) * $limit;


        $sql = "SELECT COUNT(*) as total FROM publications WHERE type= 'photorelease' AND isDeleted = 0";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();


        $total = $stmt->fetch()['total'];
        $total_page = ceil($total / $limit);



        $sql = "SELECT * FROM publications WHERE type = 'photorelease' AND isDeleted = 0 ORDER BY id DESC LIMIT $offset, $limit";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();



        $photorelease = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $sql = "SELECT * FROM attachments WHERE id = :id";
        $stmt = $mysqli->prepare($sql);


        foreach ($photorelease as $key => $value) {
            foreach (json_decode($value['image_array']) as $key2 => $value2) {
                $stmt->execute([
                    'id' => $value2
                ]);
                $photorelease[$key]['images'][] = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        }


        return [
            'total_page' => $total_page,
            'current_page' => $page_number,
            'total_items' => $total,
            'photoreleases' => $photorelease
        ];
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function getPublicationsWithPage($mysqli, $page_number = 1, $limit = 6)
{
    try {

        $offset = ($page_number - 1) * $limit;

        $sql = "SELECT COUNT(*) as total FROM publications WHERE isDeleted = 0";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();


        $total = $stmt->fetch()['total'];
        $total_page = ceil($total / $limit);


        $sql = "SELECT * FROM publications WHERE isDeleted = 0 ORDER BY id DESC LIMIT $offset, $limit";

        $stmt = $mysqli->prepare($sql);


        $stmt->execute();


        return [
            'total_page' => $total_page,
            'current_page' => $page_number,
            'total_items' => $total,
            'publications' => $stmt->fetchAll(PDO::FETCH_ASSOC)
        ];


        // $sql = "SELECT * FROM publications WHERE isDeleted = 0 ORDER BY id DESC LIMIT :limit OFFSET :offset";
        // $stmt = $mysqli->prepare($sql);
        // $stmt->execute();

        // return $stmt->fetchAll();
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}


function getPublicationById($mysqli, $id)
{

    try {

        $sql = "SELECT * FROM publications WHERE id = :id";


        $stmt = $mysqli->prepare($sql);

        $stmt->execute([
            'id' => $id
        ]);

        return $stmt->fetch();
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}


function editNewsEventArticle($mysqli)
{

    try {

        $sql = "UPDATE publications SET title = :title, body = :body, datePosted = :datePosted, author = :author, status = :status WHERE id = :id";

        $stmt = $mysqli->prepare($sql);

        $stmt->execute([
            'title' => $_POST['title'],
            'body' => $_POST['body'],
            'datePosted' => $_POST['datePosted'],
            'author' => $_POST['author'],
            'status' => $_POST['status'],
            'id' => $_POST['id']
        ]);

        return true;
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function getAuthors($mysqli)
{
    try {
        $sql = "SELECT * FROM authors";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function getAuthorsById($mysqli, $id)
{
    try {
        $sql = "SELECT * FROM authors WHERE id = :id";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch();
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}
