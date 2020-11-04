@extends('backend.app')

@section('content')

    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">


        <div class="row">
            <div class="col-lg-6">
                <!-- Form Basic -->
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Create</h6>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{url('category/store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                       placeholder="Enter Name">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>


        </div>
        <!--Row-->


    </div>
@stop
