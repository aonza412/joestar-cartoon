@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
         <div class="col-md-12" style="margin-bottom: 2em;">
        รายชื่อนักศึกษา <br>
    </div>
        <div class="col-md-10">
            <?php $i = 0; ?>
            @foreach($member as $ls)
            <?php $i++ ?>
            <div class="card" style="margin-bottom: 2em;">
                <div class="card-header">{{$i}}. {{$ls->first_name}}  {{$ls->last_name}} ({{$ls->nick_name}})</div>
                <div class="card-body">
                    {{$ls->phone}} <br>
                    {{$ls->email}} <br>
                    <img src="{{$ls->img_url}}" alt="">
                   <div class="rigth" style="text-align: right!important;">
                   <a href="member{{$ls->member_id}}" class="btn btn-primary" >รายละเอียด</a>
                   </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
