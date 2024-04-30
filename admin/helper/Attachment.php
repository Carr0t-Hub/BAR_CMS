<?php
class Attachment
{

    public static function constructStatement($pdoObject, $tableName, $file, $userID)
    {
        //this function is still in progress don't use it
        $fullFileName = $file['name'];
        $fileSize = $file['size'];
        $fileError  = $file['error'];
        $fileType = $file['type'];

        $fileExtension  = strtolower(pathinfo($fullFileName, PATHINFO_EXTENSION));
        $fileName =  pathinfo($fullFileName, PATHINFO_FILENAME);

        $sql = "INSERT INTO $tableName (`fileName`,`fileExtension`,`fileType`,`size`,`uploadedBy`,`uploadDateTime`) VALUES(:myfilename, :myfileextension, :myfiletype, :myfilesize, :uploadedby, NOW())";

        //Prepare our PDO statement.
        $pdoStatement = $pdoObject->prepare($sql);


        // $params = [
        //     ':myfilename' => $fileName,
        //     ':myfileextension' => $fileExtension,
        //     ':myfiletype' => $fileType,
        //     ':myfilesize' => $fileSize,
        //     ':uploadedby' => $userID,
        // ];

        //another option to use for binding data, use an array of parameter like above with key-value then loop through it like what i did below.
        // foreach ($params as $key => $value) {
        //     $pdoStatement->bindValue($key, $value);
        // }

        $pdoStatement->bindValue(':myfilename', $fileName);
        $pdoStatement->bindValue(':myfileextension', $fileExtension);
        $pdoStatement->bindValue(':myfiletype', $fileType);
        $pdoStatement->bindValue(':myfilesize', $fileSize);
        $pdoStatement->bindValue(':uploadedby', $userID);


        return $pdoStatement;
    }

    /**
     * A custom function for uploading a single file.
     * 
     * @param $_FILES $file the file we want to upload
     * @param string $destination path where you want to store the file (e.g. '../uploads/accomplisshment/') path which should already exist.
     * @param string $folder name of the specific sub folder where you want to store the file, if the folder doesn't exist this will be created.
     * @return bool returns true on success false on failure
     */
    public static function Upload($file, $destination, $folder, $attachmentID)
    {
        //TODO: there's an issue here where the file fails to upload but no error/warnings
        //TODO: add checking function to confirm is the file is really uploaded in the server
        //https://stackoverflow.com/questions/946418/how-to-check-whether-the-user-uploaded-a-file-in-php/42833866

        //I could use an optional parameter for the $allowedTypes, so anyone who uses this upload can choose their own types to allow.
        //I can also use an optional parameter for file size

        $fullFileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError  = $file['error'];
        $fileType = $file['type'];

        // $fileExtension  = explode('.', $fullFileName);
        //read more about pathInfo https://bit.ly/3sWSCHf and https://bit.ly/3eQYwor
        $fileExtension  = strtolower(pathinfo($fullFileName, PATHINFO_EXTENSION));
        $fileName =  pathinfo($fullFileName, PATHINFO_FILENAME);

        $allowedTypes = array('jpg', 'jpeg', 'png', 'bmp', 'xlsx', 'xlsm', 'pdf', 'mp3', 'mp4', 'doc', 'docx', 'pptx', 'php', 'sql');

        if (in_array($fileExtension, $allowedTypes)) {
            //error codes: https://www.php.net/manual/en/features.file-upload.errors.php
            if ($fileError === 0) {
                //file size must not exceed 10mb
                if ($fileSize < 30000000) {
                    if (!file_exists($destination . $folder)) {
                        //i'm using an error control operator '@' https://www.php.net/manual/en/language.operators.errorcontrol.php
                        //mkdir will produce an error if the initial folders are missing (e.g. uploads/wfh_request/99 - if the wfh_request folder is missing this will throw an exception)
                        //We can use the third parameter of mkdir() as stated here: https://www.php.net/mkdir and also here: https://bit.ly/3f7ZpcS
                        if (!@mkdir($destination . $folder)) {
                            throw new Exception("Error creating directory. " . $destination . $folder);
                        }
                    }
                    $newFullFileName = $fileName . "_" . $fileSize . $attachmentID  . "." . $fileExtension;
                    $fileDestination = $destination . $folder . "/" . $newFullFileName;

                    //another function i could possibly use is copy function more here: https://www.php.net/manual/en/function.copy.php
                    // if (!copy($fileTmpName, $fileDestination)) {
                    //     throw new Exception("Error uploading file to directory. " . $destination . $folder);
                    // }

                    if (!@move_uploaded_file($fileTmpName, $fileDestination)) {
                        throw new Exception("Error uploading file to directory. " . $destination . $folder);
                    }
                    //check if the file is actually uploaded in the server.
                    if (!file_exists($fileDestination)) {
                        throw new Exception("File upload failed.");
                    }

                    return $newFullFileName;
                } else {
                    throw new Exception("File size exceeds set limit.");
                }
            } else {
                throw new Exception("There was an error uploading your file.");
            }
        } else {
            throw new Exception("You cannot upload files of this type. " . $fileExtension);
        }
    }

    //TODO: Research how to produce an encrypted download link (so the users can't see which server directory the files are coming from check php urlencode)
}
