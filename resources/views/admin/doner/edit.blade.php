@extends('admin.layouts.index')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded-top p-4">
        <div class="row">
            <div class="col-md-12">

                <form role="form" method="POST" action={{ route('doner.update' , $doner->id) }}>
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">First name</label>
                                <input class="form-control  mt-2" type="text" name="first_name" required="" value="{{$doner->firsName}}">
                                @if($errors->has('first_name'))
                                <span class="text-danger">{{$errors->first('first_name')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Last name</label>
                                <input class="form-control mt-2" type="text" name="last_name" required="" value="{{$doner->lastName}}">
                                @if($errors->has('last_name'))
                                <span class="text-danger">{{$errors->first('last_name')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mt-3">
                                <label for="example-text-input" class="form-control-label">User Name</label>
                                <input class="form-control mt-2" type="text" name="user_name" required="" value="{{$doner->userName}}">
                                @if($errors->has('user_name'))
                                <span class="text-danger">{{$errors->first('user_name')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mt-3">
                                <label for="example-text-input" class="form-control-label">Email address</label>
                                <input class="form-control mt-2" type="email" name="email" required="" value="{{$doner->email}}">
                                @if($errors->has('email'))
                                <span class="text-danger">{{$errors->first('email')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group mt-3">
                                <label for="example-text-input" class="form-control-label">Password</label>
                                <input class="form-control mt-2" type="text" name="password" value="{{$doner->password}}">
                                @if($errors->has('password'))
                                <span class=" text-danger">{{$errors->first('password')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group mt-3">
                                <label for="example-text-input" class="form-control-label">Age</label>
                                <input class="form-control mt-2" type="number" name="age" required="" value="{{$doner->age}}">
                                @if($errors->has('age'))
                                <span class="text-danger">{{$errors->first('age')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mt-3">
                                <label for="example-text-input" class="form-control-label">Weight</label>
                                <input class="form-control mt-2" type="number" step="any" name="weight" required="" value="{{$doner->weight}}">
                                @if($errors->has('weight'))
                                <span class="text-danger">{{$errors->first('weight')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group mt-3">
                                <label for="example-text-input" class="form-control-label">Blood Group</label>
                                <select class="form-select mt-2" aria-label="Default select example" name="blood">
                                    <option value="{{$doner->blood->id}}">{{ $doner->blood->name }}</option>
                                    @foreach ($bloods as $blood)
                                    <option value="{{$blood->id}}">{{$blood->name}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="col-md-12">
                            <p class="text-uppercase text-sm mt-4">Contact Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Address</label>
                                        <input class="form-control mt-2" type="text" name="address" required="" value="{{$doner->address}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label for="example-text-input" class="form-control-label">City</label>
                                        <select class="form-select mt-2" aria-label="Default select example" name="city">
                                            <option value="{{$doner->city->id}}">{{ $doner->city->name }}</option>
                                            @foreach ($cities as $city)
                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group mt-4">
                                        <label for="example-text-input" class="form-control-label">Phone</label>
                                        <input class="form-control mt-2" type="text" name="phone" required="" value="{{$doner->phone}}">
                                        @if($errors->has('phone'))
                                        <span class="text-danger">{{$errors->first('phone')}}</span>
                                        @endif
                                    </div>

                                </div>


                            </div>


                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="{{ route('doner.index') }}" class="btn btn-info">Back</a>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>

                </form>

            </div>
        </div>
    </div>



    @endsection
