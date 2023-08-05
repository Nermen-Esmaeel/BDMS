@extends('admin.layouts.index')

@section('content')

<div class="container-fluid pt-4 px-4">

    <div class="row g-4">
        <div class="col-12">
            <a href="{{route('donation.create')}}"><i class="fa fa-3x fa-plus" style="color: rgb(7, 141, 14) ; float:right; margin:6px 35px"></i></a>
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Doners List</h6>
                <div class="table-responsive ">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Doner Name</th>
                                <th scope="col">Units</th>
                                <th scope="col">Last Donation</th>
                                <th scope="col">Feedback</th>
                                <th scope="col">Diseases</th>
                                <th scope="col">Status</th>
                                <th scope="col">Approve/Reject</th>
                                <th scope="col">Action</th>
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
                                <td>{{ $donation->Unit }}</td>
                                <td>{{ $donation->last_date }}</td>
                                <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis;">{{ $donation->feedback }}</td>
                                @if($donation->diseases == '1')
                                <td>Yes</td>
                                @else
                                <td>No</td>
                                @endif
                                <td>{{ $donation->status }}</td>
                                @if($donation->status == 'Pending')
                                <td><a href="{{route('donation.approve', $donation->id)}}"><span class="badge bg-success">Approve</span></a>
                                    <a href="{{route('donation.reject', $donation->id)}}"><span class="badge bg-danger">Reject</span></a></td>
                                @else
                                <td align="center">{{$donation->status}}</td>
                                @endif
                                <td>

                                    <a href="{{ route('donation.edit', $donation->id) }} "><i class="fas fa-2x fa-edit" style="color: rgb(209, 209, 30)"></i></a>

                                    <form action="{{route('donation.destroy' , $donation->id)}}" method="post" class="d-inline">
                                        {{method_field('DELETE')}}
                                        @csrf
                                        <button type="submit" class="btn btn-danger" style="margin-bottom: 14%" onclick="return confirm('confirm delete?')"><i class="fas fa-1x fa-trash-alt"></i></button>
                                    </form>



                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
