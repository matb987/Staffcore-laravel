<?php
$player = DB::table('authme') ->orderBy('id', 'desc')->get();


?>

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}

    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="content">
            <div class="row">
                @foreach ($player as $p)

                <?php

                $onlineuuid = file_get_contents('https://api.mojang.com/users/profiles/minecraft/' . $p->username);

                if ($onlineuuid == null) {
                  $onlineuuid = '8667ba71b85a4004af54457a9734eed7';
                }
                else {
                  $onlineuuid = json_decode($onlineuuid)->id;
                }

                  ?>
                <div class="d-flex align-items-stretch bg-secondary card mx-auto " style="width: 200px;">
  <img class="card-img-top h-75"  src="https://crafatar.com/renders/body/{{$onlineuuid}}/" alt="Card image cap">
  <div class="card-body" >
    <p class="card-text text-center">{{$p->username}}<br>

    </p>
  </div>
</div>
                  @endforeach
</div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </x-app-layout>
