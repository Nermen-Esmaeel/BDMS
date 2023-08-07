@extends('admin.layouts.index')
@section('content')


<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <!--Stock-->
        <h3 class="ml-2 " align="center" style="color: rgb(241, 241, 16)">Blood Group</h3>
        @foreach ($stocks as $stock)
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fas fa-tint fa-3x text-primary"> </i>
                <div class="ms-3">

                    <h3 class="mb-2">{{$stock->blood->name}}</h3>
                    <h6 class="mb-8">{{$stock->unit}} (ml)</h6>
                </div>
            </div>
        </div>
        @endforeach

        <hr class="mb-0" style="height: 2px ; width:100%; border-width:0;color:yellow;background-color: yellow">
        <div class="row g-2">
            <!--All Doners-->
            <div class="col-sm-8 col-xl-4" style="margin-left: 10%">
                <h3 class=" ml-2 " align=" center" style="color: rgb(18, 187, 187)">Doners</h3>
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fas fa-users fa-3x text-info"> </i>
                    <div class="ms-3">

                        <h2 class="mb-4">{{ $doners}}</h2>
                        <h4><a class="link-warning  " href="{{ route('doner.index')}} ">view</a></h4>

                    </div>
                </div>
            </div>

            <!--Donation-->
            <div class="col-sm-8 col-xl-4" style="margin-left: 10%">
                <h3 class=" ml-2 " align=" center" style="color: rgb(18, 187, 187)">Donation Count</h3>
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4 ">
                    <i class="fas fa-file-alt fa-3x text-info"> </i>
                    <div class="ms-3">
                        <h2 class="mb-4">{{ $donations}}</h2>
                        <h4><a class="link-warning  " href="{{ route('donation.index')}} ">view</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mb-0" style="height: 2px ; width:100%; border-width:0;color:yellow;background-color: yellow">


        <!--Status-->

        <h3 class="ml-2 " align="center" style="color: rgb(22, 121, 9)">Dontion Status</h3>
        <!--Status Approved-->
        <div class="col-sm-6 col-xl-4 mb-4 mt-4">
            <h3 class=" ml-2 " align=" center" style="color: rgb(22, 121, 9)">Approve</h3>
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="far fa-calendar-check fa-3x text-success"> </i>
                <div class="ms-3">
                    <h2 class="mb-4">{{ $approve}}</h2>
                </div>
            </div>
        </div>

        <!--Status Rejected-->
        <div class="col-sm-6 col-xl-4 mb-4 mt-4">
            <h3 class=" ml-2 " align=" center" style="color: rgb(197, 17, 4)">Reject</h3>
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="far fa-calendar-times fa-3x text-danger"> </i>
                <div class="ms-3">
                    <h2 class="mb-4">{{ $reject}}</h2>
                </div>
            </div>
        </div>

        <!--Status Pending-->
        <div class="col-sm-6 col-xl-4 mb-4 mt-4">
            <h3 class=" ml-2 " align=" center" style="color:yellow">Pending</h3>
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="far fa-clock fa-3x text-warning"> </i>
                <div class="ms-3">
                    <h2 class="mb-4">{{ $pending}}</h2>
                </div>
            </div>
        </div>

    </div>
</div>



@endsection
