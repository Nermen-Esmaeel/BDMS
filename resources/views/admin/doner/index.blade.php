@extends('admin.layouts.index')

@section('content')

<div class="container-fluid pt-4 px-4">

    <div class="row g-4">
        <div class="col-12">
            <a href="{{route('doner.create')}}"><i class="fa fa-3x fa-plus" style="color: rgb(7, 141, 14) ; float:right; margin:6px 35px"></i></a>
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Doners List</h6>
                <div class="table-responsive ">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">City</th>
                                <th scope="col">Address</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Age</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Blood Group</th>
                                <th style="width: 10%" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ( $doners as $doner)
                            <tr>

                                <th scope="row">{{ $i++}}</th>
                                <td>{{ $doner->firsName }}</td>
                                <td>{{ $doner->lastName }}</td>
                                <td>{{ $doner->userName }}</td>
                                <td>{{ $doner->email }}</td>
                                <td>{{ $doner->city->name }}</td>
                                <td>{{ $doner->address }}</td>
                                <td>{{ $doner->phone }}</td>
                                <td>{{ $doner->age }}</td>
                                <td>{{ $doner->weight }}</td>
                                <td>{{ $doner->blood->name }}</td>
                                <td>

                                    <a href="{{ route('doner.edit', $doner->id) }} "><i class="fas fa-2x fa-edit" style="color: rgb(209, 209, 30)"></i></a>

                                    <form action="{{route('doner.destroy' , $doner->id)}}" method="post" class="d-inline">
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
