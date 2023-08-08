@extends('frontend.layouts.master');

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6 mt-4 " style="margin-left:25%">
                <!-- Input addon -->
                <form role="form" method="POST" action={{ route('request.store') }}>
                    @csrf
                    <div class="card card-primary">
                        <div class="card-header" style="background-color:rgb(236, 172, 9)">
                            <h3 class="card-title" align="center">Donation Form</h3>
                        </div>
                        <div class="card-body">
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" name="doner" placeholder="Doner Name" value={{Auth::user()->userName}} @readonly(true)>
                                @if($errors->has('doner'))
                                <span class="text-danger">{{$errors->first('doner')}}</span>
                                @endif
                            </div>



                            <div class="input-group mb-4">
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fas fa-ambulance fa-2x"></i>
                                    </div>
                                </div>
                                <input type="number" name="unit" placeholder="Enter Units" class="form-control">
                                @if($errors->has('unit'))
                                <span class="text-danger">{{$errors->first('unit')}}</span>
                                @endif
                            </div>


                            <div class="form-group mb-4">
                                <label for="example-text-input" class="form-control-label">Last Date You Donated</label>
                                <input class="form-control mt-2" type="date" name="date" value="{{ old('date') }}" placeholder="dd/mm/YYYY">
                                @if($errors->has('date'))
                                <span class="text-danger">{{$errors->first('date')}}</span>
                                @endif

                            </div>


                            <div class="form-group mb-4">
                                <label>Feedback</label>
                                <textarea class="form-control" rows="3" name="feedback" placeholder="Enter ..."></textarea>
                                @if($errors->has('feedback'))
                                <span class="text-danger">{{$errors->first('feedback')}}</span>
                                @endif
                            </div>

                            <div class="form-group mb-4">
                                <div class="custom-control custom-switch">
                                    <input class="form-check-input" type="hidden" role="switch" name="diseases" value="0" id="flexSwitchCheckDefault">
                                    <input class="form-check-input" type="checkbox" role="switch" name="diseases" value="1" id="flexSwitchCheckDefault">
                                    <label class="custom-control-label" for="customSwitch1">Do You Suffer Of Any Diseases ?</label>
                                    @if($errors->has('diseases'))
                                    <span class="text-danger">{{$errors->first('diseases')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="input-group mb-4">
                                <button type="submit" class="btn btn-info btn-flat" style="margin-left:45%">Save</button>
                            </div>
                            <!-- /input-group -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                </form>
            </div>

        </div>
    </div>

</section>
@endsection
