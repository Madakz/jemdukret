@extends('layouts.main')

@section('header')
    @include('land.header')
@stop

@section('content')
    <div class="col-md-12">
        <div class="col-md-8">
            <div class="widget">
                <header class="widget-header">
                    <h4 class="widget-title">Edit Land Details</h4>
                </header>
                <hr class="widget-separator">
                <div class="widget-body">
                    {{Form::open(['route' => ['update_land', $lands->id], 'method' => 'PUT'])}}
                       {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-md-7">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Location" name="location" value="{{ $lands->location }}">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="scope">Scope</label>
                                <input type="text" class="form-control" name="scope" value="Rent" readonly />
                                <!--<select class="form-control" name="scope">-->
                                <!--    <option>Scope</option>-->
                                <!--    <option value="Sale">Sale</option>-->
                                <!--    <option value="Rent">Rent</option>-->
                                <!--    <option value="Lease">Lease</option>-->
                                <!--</select>-->
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-7">
                                <label for="location">Description</label>
                                <textarea rows="4" cols="20" class="form-control" name="description" value="{{$lands->description}}">{{$lands->description}}</textarea>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="control-demo-6">Type</label>
                                <select class="form-control" name="type">
                                    <option>Type</option>
                                    <option value="one room selfcontain">one room self-contain </option>
                                    <option value="single room">single room</option>
                                    <option value="shared apartment">shared Apartment</option>
                                    <!--<option value="detached bungalow">Detached Bungalow</option>-->
                                    <!--<option value="semi-detached bungalow">Semi-detached Bungalow</option>-->
                                    <!--<option value="penthouse">Penthouse</option>-->
                                </select>
                            </div>
                        </div>
                        
                        <br/>
                        
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="size">Size</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="size" placeholder="Size of Land" value="{{ $lands->size }}">
                            </div>
                            <div class="col-md-4">
                                <label for="status">Status</label>
                                <select class="form-control" name="status">
                                    <option>Choose status</option>
                                    <option value="vacant">Vacant</option>
                                    <option value="occupied">Occupied</option>
                                </select>
                            </div>
                        </div>
                        
                        <br/>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="price" placeholder="Price of Land" value="{{ $lands->price }}">
                            </div>
                           
                            <!-- <div class="col-sm-4"> -->
                                <input type="hidden" class="form-control" id="exampleInputPassword1" name="property_type" value="land">
                            <!-- </div> -->
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary btn-md" style="margin-top:25px;">Submit</button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <div class="col-md-8">
                                <label for="picture">House photos (upload 3 pictures)</label>                                
                                <input type="file" class="form-control" id="exampleInputPassword1" name="picture[]" placeholder="Choose file" value="" multiple> -->
                                    <!-- <input type="file" class="form-control" id="exampleInputPassword1" name="picture" placeholder="Choose file" value=""> -->
                                                  
                            <!-- </div> -->
                            <!-- <div class="col-md-4">
                                <button type="submit" class="btn btn-primary btn-md" style="margin-top:25px;">Submit</button>
                            </div> -->
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            @include('layouts.sessions')
            @include('layouts.errors')
        </div>
    </div>
@stop