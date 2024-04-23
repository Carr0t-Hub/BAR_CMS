<?php
include('Schema/Migration.php');
include('Schema/Blueprint.php');


$migration = new Migration();

$migration->create('attachments', function (Blueprint $table) {
    $table->id();

    $table->string('fileName');
    $table->string('fileExtension', 15);
    $table->string('fileType', 15);


    $table->timestamps();
});
