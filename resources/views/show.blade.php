@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
         <div class="col-md-12" style="margin-bottom: 2em;">
         <center><h1>ทำเนียบ CIS</h1><br> <div>
    </div>
        <?php $i = 0; ?>
        @foreach($member as $ls)
        <?php $i++ ?>
        <div><a href="#"><h2>ปี : {{$ls->year}} จำนวน : {{$ls->count}}</h2></a></div><br>
        @endforeach
        </center>
</div>
@endsection
