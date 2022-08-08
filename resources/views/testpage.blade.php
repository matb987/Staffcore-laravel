<?php $onlineuuid = file_get_contents('https://api.mojang.com/users/profiles/minecraft/mbdevmatthew');
      $onlineuuid = json_decode($onlineuuid);
      $onlineuuid = $onlineuuid->id;
  ?>

  {{$onlineuuid}}
