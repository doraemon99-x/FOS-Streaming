<?php
include('config.php');
logincheck();
/**
 * Created by Tyfix 2015
 */
$message = [];

if(isset($_GET['delete'])) {
    $user = User::find($_GET['delete']);
    $user->delete();

    $message['type'] = "success";
    $message['message'] = "User deleted";
}

$users = User::all();

echo $template->view()->make('users')->with('users',  $users)->with('message', $message)->render();
?>