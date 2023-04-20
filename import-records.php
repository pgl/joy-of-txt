#!/usr/bin/php
<?php

// Open the file containing the lines
$filename = './csv-records.csv';
$file = fopen($filename, 'r');

// open database connection
$db = new SQLite3('db.txt-records.sqlite3');

// prepare insert statement with placeholders
$stmt = $db->prepare('INSERT INTO records (domain, record) VALUES (:domain, :record)');

while (!feof($file)) {
    $line = fgets($file);

    $line = trim($line);

    // extract domain and record from line
    $data = explode(',', $line);

    $domain = trim($data[0], '"');
    $record = trim($data[1], '"');

    echo "binding for domain: $domain, record: $record\n";

    // bind parameters to placeholders and execute statement
    $stmt->bindValue(':domain', $domain, SQLITE3_TEXT);
    $stmt->bindValue(':record', $record, SQLITE3_TEXT);

    $stmt->execute();
}

// close statement and database connection
$stmt->close();
$db->close();
