@extends('admin.layouts.index')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="col-sm-12 col-xl-8">
        <div class="bg-secondary rounded-top p-4" style="margin-left: 20%">
            <div class="row">
                <div class="col-md-12">
                    <h6 class="mb-4" align="center">Update Units</h6>
                    <form role="form" method="POST" action={{ route('stock.update' , $blood_group->id) }}>
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <!--BLOOD GROUP-->
                            <div class="col-md-6">
                                <div class="form-group mt-4">
                                    <label for="example-text-input" class="form-control-label">Blood Group</label>
                                    <select class="form-select mt-2" aria-label="Default select example" name="blood">
                                        <option value="{{$blood_group->blood->id}}">{{ $blood_group->blood->name }}</option>
                                    </select>

                                </div>
                            </div>

                            <!--Unit-->
                            <div class="col-md-6">
                                <div class="form-group mt-4" style="margin-left:30%">
                                    <label for="example-text-input" class="form-control-label">Units</label>
                                    <input class="form-control mt-2" type="number" name="unit" value="{{ $blood_group->unit}}">
                                    @if($errors->has('unit'))
                                    <span class=" text-danger">{{$errors->first('unit')}}</span>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="form-group text-center mt-4">
                            <a href="{{ route('stock.index') }}" class="btn btn-info">Back</a>
                            <button type="submit" class="btn btn-warning">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



    @endsection
