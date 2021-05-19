<?php
global $wpdb;
$users=$wpdb->get_results('select * from wp_users');
var_dump($users)
?>

<div class='wrap'>
  <h1>کاربران ویژه</h1>
  <table class="widefat">
   <thead>
   <tr>
   <th>
   شناسه
   </th>
   <th>
   نام کاربری
   </th>
   </tr>
   </thead> 
   <tr>
   <th>
   <?php foreach( $users as $user):
echo $user->user_pass ?>
   </th>
   </tr>
   <?php endforeach?>
   </table>