@extends('admin.layouts.index')
@section('content')


<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        @foreach ($stocks as $stock)
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fas fa-tint fa-3x text-primary"></i>
                <div class="ms-3">
                    <h3 class="mb-2">{{$stock->blood->name}}</h3>
                    <h6 class="mb-8">{{$stock->unit}} (ml)</h6>
                    <h4><a class="link-warning  " href="{{ route('stock.edit', $stock->id) }} ">edit</a></h4>
                </div>



            </div>
        </div>
        @endforeach





    </div>
</div>



@endsection
