<?php
$chat = DB::table('ReportSystem_messages') ->orderBy('reg_date', 'desc')->take(50)->get();
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

            <table class="table table-hover">
              <thead>
                <tr>

                  <th scope="col">User</th>
                  <th scope="col">message</th>
                  <th scope="col">time</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($chat as $chat)
                <?php $username = DB::table('authme')->where('uuid', '=' , $chat->SENDER_UUID)->pluck('username'); ?>
                <tr>
                  <th scope="row">{{$username}}</th>
                  <td>
                    {{$chat->MESSAGE}}
                    </td>
                    <td>{{$chat->reg_date}}</td>

                  </tr>
                  @endforeach
                </tbody>
              </table>


            </div>
          </div>
        </div>
      </div>
    </div>
  </x-app-layout>
