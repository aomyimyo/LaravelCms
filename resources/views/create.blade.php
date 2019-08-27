@extends('master')
@section('title','Edit Database')
@section('content')
<div class="container">
        <div class="row">
                <div class="col-md-12">
                    <br>
                    <h3 align ="center">เพิ่มข้อมูล</h3><br>
                <form action="{{url('user')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="text" name="fname" class="form-control" placeholder="ป้อนชื่อ">
                </div>
                <div class="form-group">
                    <input type="text" name="lname" class="form-control" placeholder="ป้อนนามสกุล">
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary">
                  </div>
                </form>
                </div>      
                </div> 
</div>
    
   
@endsection