<?php 
include 'conall.php';

//Fetching a record example
$account = $db->query('SELECT * FROM users WHERE username = ? AND account_status = ?', 'status', 'Active')->fetchArray();
echo $account['refferal_code'];

//Get number of rows from a query
$accounts = $db->query('SELECT * FROM users');
#echo $accounts->numRows();

//Get the last inserted ID
#echo $db->lastInsertID();

//Get Total number of queries
#echo $db->query_count;

//Insert records and get number of affected rows
//$insert = $db->query('INSERT INTO accounts (username,password,email,name) VALUES (?,?,?,?)', 'test', 'test', 'test@gmail.com', 'Test');
#echo $insert->affectedRows();

//FETCH MULTIPLE RECORDS FROM THE DATABASE
$accounts = $db->query('SELECT * FROM accounts')->fetchAll();

foreach ($accounts as $account) {
   // echo $account['name'] . '<br>';
}


 ?>