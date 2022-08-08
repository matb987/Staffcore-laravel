<?php
$user = Auth::user();
$stats = DB::table('ReportSystem_playerdb')->where('uuid', '=' , $user->uuid)->get();
$stats = $stats[0];
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
          <div class="container-fluid">
            <div class="card card-widget widget-user">

                    <div class="widget-user-header bg-danger">
                      <h3 class="widget-user-username">

{{$user->username}} <span class="text-info text-bold" title="Admin-Account"></span>                      </h3>
                      <h5 class="widget-user-desc">
{{$user->uuid}}</h5>
                    </div>
                    <div class="widget-user-image">
                      <img style="border: none!important;"class="" src="https://minotar.net/armor/bust/{{$user->username}}/190.png" alt="User Avatar">
                    </div>
                    <div class="card-footer">
                      <div class="row">
                        <div class="col-sm-3 border-right">
                          <div class="description-block">
                            <h5 class="description-header">{{$stats->BANS}}</h5>
                            <span class="description-text">BANS</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 border-right">
                          <div class="description-block">
                            <h5 class="description-header">{{$stats->MUTES}}</h5>
                            <span class="description-text">MUTES</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <div class="col-sm-3 border-right">
                          <div class="description-block">
                            <h5 class="description-header">{{$stats->REPORTS}}</h5>
                            <span class="description-text">REPORTS</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3">
                          <div class="description-block">
                            <h5 class="description-header">0</h5>
                            <span class="description-text">WARNS</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                                </div>







                <div class="content-header">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <h1 class="m-0 text-dark">Your Tasks</h1>
                    </div>
                  </div>
                </div>

                <div class="d-flex flex-wrap w-100">
                  <div class="card card-outline card-danger w-100">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#-ID</th>
                            <th scope="col">Assigned by</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                                                        <tr>
                                <th scope="row" colspan="4">
                                  <div class="alert alert-success" role="alert">
                                    All set! You dont have any tasks for now!
                                  </div>
                                </th>
                              </tr>
                                                      </tbody>
                      </table>
                    </div>
                  </div>
                </div>

            
          </div><!-- /.container-fluid -->
        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
