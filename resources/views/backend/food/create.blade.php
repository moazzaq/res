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
                        <form method="post" action="{{url('food/store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Food Name</label>
                                <input type="text" name="name" class="form-control"
                                       placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <select name="category_id" class="form-control">
                                    <option value="">Choose</option>
                                    @foreach($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
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
