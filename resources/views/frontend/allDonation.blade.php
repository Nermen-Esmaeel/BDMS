@extends('frontend.layouts.master')

@section('content')



<div class="row">
    <div class="col-12">
        <!-- Main content -->
        <form action="{{route('request.filter')}}" method="GET">
            @csrf
            <div class="col-md-6">
                <div class="form-group mt-4" style="margin-left:30%">
                    <label for="example-text-input" class="form-control-label">Start Date</label>
                    <input class="form-control mt-2" type="date" name="start_date" value="{{ old('date') }}" placeholder="dd/mm/YYYY">
                </div>

            </div>

            <div class="col-md-6">
                <div class="form-group mt-4" style="margin-left:30%">
                    <label for="example-text-input" class="form-control-label">End Date</label>
                    <input class="form-control mt-2" type="date" name="end_date" value="{{ old('date') }}" placeholder="dd/mm/YYYY">

                </div>
            </div>
            <div class="col-md-5">
                <div class="text-center mt-4">

                    <button type="submit" class="btn btn-success">Search</button>
                </div>
            </div>
        </form>


        <div class="card mt-4" style="margin-left:5% ;margin-right:5%">
            <div class="card">
                <div class="card-header " style="background-color:rgb(236, 172, 9)">
                    <h3 class=" card-title" align="center">All Donation</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Doner Name</th>
                                <th scope="col">Units</th>
                                <th scope="col">Last Donation</th>
                                <th scope="col">Feedback</th>
                                <th scope="col">Diseases</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ( $donations as $donation)
                            <tr>

                                <th scope="row">{{ $i++}}</th>
                                <td>{{ $donation->user->userName }}</td>
                                <td align="center">{{ $donation->Unit }}</td>
                                <td>{{ $donation->last_date }}</td>
                                <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis;">{{ $donation->feedback }}</td>
                                @if($donation->diseases == '1')
                                <td align="center">Yes</td>
                                @else
                                <td align="center">No</td>
                                @endif



                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->


@endsection
