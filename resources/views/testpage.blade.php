<?php
$user = Auth::user();
$reported =DB::table('authme')->where('uuid', '=' , $user->uuid)->get();
$reported = $reported->username;

echo $reported

?>
