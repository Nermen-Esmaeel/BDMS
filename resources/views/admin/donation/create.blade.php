@extends('admin.layouts.index')

@section('content')

<div class="container-fluid pt-4 px-4 ">
    <div class="col-sm-12 col-xl-8 ">
        <div class="bg-secondary rounded-top p-4" style="margin-left: 20%">
            <div class="row ">
                <div class="col-md-12">
                    <h6 class="mb-4" align="center">Donations List</h6>
                    <form role="form" method="POST" action={{ route('donation.store') }}>
                        @csrf

                        <!--Doner Name-->
                        <div class="col-md-9">
                            <div class="form-group mt-4 " style="margin-left:30%">
                                <label for="example-text-input" class="form-control-label">Doner</label>
                                <select class="form-select mt-2" aria-label="Default select example" name="doner">
                                    <option disabled selected>Select Doner</option>
                                    @foreach ($doners as $doner)
                                    <option value="{{$doner->id}}">{{$doner->userName}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('doner'))
                                <span class="text-danger">{{$errors->first('doner')}}</span>
                                @endif

                            </div>
                        </div>

                        <!--Unit-->
                        <div class="col-md-9">
                            <div class="form-group mt-4" style="margin-left:30%">
                                <label for="example-text-input" class="form-control-label">Units</label>
                                <input class="form-control mt-2" type="number" name="unit">
                                @if($errors->has('unit'))
                                <span class="text-danger">{{$errors->first('unit')}}</span>
                                @endif
                            </div>
                        </div>

                        <!--Last time Donated-->
                        <div class="col-md-9">
                            <div class="form-group mt-4" style="margin-left:30%">
                                <label for="example-text-input" class="form-control-label">Last Date You Donated</label>
                                <input class="form-control mt-2" type="date" name="date" value="{{ old('date') }}" placeholder="dd/mm/YYYY">
                                @if($errors->has('date'))
                                <span class="text-danger">{{$errors->first('date')}}</span>
                                @endif
                            </div>
                        </div>
                        <!--Feedback-->
                        <div class="col-md-9">
                            <div class="form-group mt-4" style="margin-left:30%">
                                <label class="form-label">Feedback</label>
                                <textarea type="text" name="feedback" class="form-control border border-2 p-2" id="body-texterea"></textarea>
                                @if($errors->has('feedback'))
                                <span class="text-danger">{{$errors->first('feedback')}}</span>
                                @endif
                            </div>
                        </div>

                        <!--diseases-->
                        <div class="col-md-10">
                            <div class="form-group mt-4" style="margin-left:27%">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="hidden" role="switch" name="diseases" value="0" id="flexSwitchCheckDefault">
                                    <input class="form-check-input" type="checkbox" role="switch" name="diseases" value="1" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Do You Suffer Of Any Diseases ?</label>
                                    @if($errors->has('diseases'))
                                    <span class="text-danger">{{$errors->first('diseases')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('donation.index') }}" class="btn btn-info">Back</a>
                <button type="submit" class="btn btn-success">Create</button>
            </div>

            </form>

        </div>
    </div>
</div>



@endsection
