<?php

require_once 'test.php';

$users = [];
$community = [];

if (isset($data['User'])) {
    foreach ($data['User'] as $u) {
        $users[] = new User($u);
    }
}

if(isset($data['Community'])){
   foreach($data['Community'] as $u){
        $community[] = new Community($u);
   }
}

// ===============================================
// 4. TEST OUTPUT
// ===============================================

echo "<h3>Users</h3>";
foreach ($users as $u) {
    echo "ID: {$u->user_id}, Name: **{$u->name}**, Email: *{$u->email}*<br>";
}

echo "<h3>Community</h3>";
foreach($community as $u){
   echo "PostID : {$u->postID}<br>";
}
?>
