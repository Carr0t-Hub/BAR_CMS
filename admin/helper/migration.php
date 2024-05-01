<?php
include('../Schema/Migration.php');
include('../Schema/Blueprint.php');
include('../functions/db.config.php');


$migration = new Migration($db);

$migration->create('attachments', function (Blueprint $table) {
    $table->id();
    $table->string('fileName');
    $table->string('fileExtension', 15);
    $table->string('fileType', 20);
    $table->biginteger('size');
    $table->integer('uploadedBy')->nullable();
    $table->timestamps();
});

$migration->alter('attachments', function (Blueprint $table) {
    $table->addColumn('uploadDateTime', 'datetime', 'size');
});



$migration->create('credentials', function (Blueprint $table) {
    $table->id();
    $table->string('firstName', 100);
    $table->string('lastName', 100);
    $table->string('email', 100);
    $table->string('username', 100);
    $table->text('password');
    $table->boolean('updatePassword')->default('0');
    $table->tinyint('role', 2);
    $table->boolean('disabled')->default('0');
    $table->timestamps();
});

$migration->alter('credentials', function (Blueprint $table) {
    $table->rawQuery('ADD last_login TIMESTAMP NULL');
});


$migration->create('directories', function (Blueprint $table) {
    $table->id();
    $table->string('firstName', 100);
    $table->string('middleName', 100);
    $table->string('lastName', 100);
    $table->string('division', 100);
    $table->string('section', 100);
    $table->string('position', 100);
    $table->string('designation', 100);
    $table->string('email');
    $table->string('telephone', 100);
    $table->integer('attachment');
    $table->boolean('isDeleted')->default('0');
    $table->timestamps();
});

$migration->create('local_partners', function (Blueprint $table) {
    $table->id();
    $table->string('regionalOffice', 100)->nullable();
    $table->string('agencyName', 100);
    $table->text('officeAddress');
    $table->string('fullName');
    $table->string('designation', 100);
    $table->string('position', 100)->nullable();
    $table->string('emailAddress', 100)->nullable();
    $table->string('telephone', 100)->nullable();
    $table->string('type', 50);
    $table->boolean('isDeleted')->default('0');
    $table->timestamps();
});

$migration->create('publications', function (Blueprint $table) {
    $table->id();
    $table->text('title');
    $table->text('body');
    $table->integer('attachment')->nullable();
    $table->string('image_path')->nullable();
    $table->date('datePosted');
    $table->string('author');
    $table->string('status', 50); // published, unpublished
    $table->string('type', 50);
    $table->boolean('isDeleted')->default('0');
    $table->timestamps();
});

$migration->alter('publications', function (Blueprint $table) {
    $table->addNullColumn('image_path', 'varchar(255)', 'body');
});


$migration->create('user_logs', function (Blueprint $table) {
    $table->id();
    $table->integer('userID');
    $table->string('action', 100);
    $table->text('description');
    $table->string('module', 100);
    $table->string('ipAddress', 50);
    $table->text('userAgent');
    $table->text('sessionInfo');
    $table->timestamps();
});

$migration->create('lddap', function (Blueprint $table) {
    $table->id();
    $table->string('lddap_month', 11)->nullable();
    $table->string('lddap_year', 5)->nullable();
    $table->string('lddap_no', 18)->nullable();
    $table->string('lddap_post', 18)->nullable();
    $table->boolean('isDeleted')->default('0');
    $table->integer('uploadedBy')->nullable();
    $table->timestamps();
});

$migration->create('mvvm', function (Blueprint $table) {
    $table->id();
    $table->text('bar_mission');
    $table->text('bar_vision');
    $table->text('bar_values');
    $table->text('bar_mandates');
    $table->integer('updatedBy')->nullable();
    $table->timestamps();
});

$migration->create('value_focus', function (Blueprint $table) {
    $table->id();
    $table->text('weekNum');
    $table->text('valueTitle');
    $table->text('valueDescription');
    $table->text('actionPlan');
    $table->text('prayer');
    $table->integer('updatedBy')->nullable();
    $table->timestamps();
});

$migration->create('laws_issuances', function (Blueprint $table) {
    $table->id();
    $table->text('codeNo');
    $table->text('title');
    $table->text('description');
    $table->text('datePosted');
    $table->text('type');
    $table->integer('updatedBy')->nullable();
    $table->timestamps();
});

$migration->create('authors', function (Blueprint $table) {
    $table->id();
    $table->string('firstName', 100);
    $table->string('middleName', 100);
    $table->string('lastName', 100);
    $table->string('email');
    $table->string('telephone', 100);
    $table->boolean('isDeleted')->default('0');
    $table->timestamps();
});

$migration->create('sliders', function (Blueprint $table) {
    $table->id();
    $table->integer('attachment');
    $table->text('description');
    $table->boolean('isDeleted')->default('0');
    $table->timestamps();
});

$migration->create('procurement', function (Blueprint $table) {
    $table->id();
    $table->text('title');
    $table->integer('attachment')->nullable();
    $table->date('datePosted');
    $table->string('type', 50);
    $table->boolean('isDeleted')->default('0');
    $table->timestamps();
});