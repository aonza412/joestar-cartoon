@extends('layouts.app')

@section('content')
<div class="container">
    <center>
        @foreach ($link as $link)
            <h2>{{$link->cartoon_name}} ตอนที่ {{$link->chapter}}</h2><br>
            <iframe src="{{$link->link}}" frameborder="1" height="570" width="1000"></iframe><br>
            {{-- <video controls="" autoplay="" name="media"><source src="{{$link->link}}" type="video/mp4"></video><br>      --}}
            <a href="playcartoon{{$link->link_id}}" class="btn btn-danger">กดหากวิดีโอไม่แสดง</a><br><br>
            <a href="chapter{{$link->cartoon_id}}" class="btn btn-danger">ย้อนกลับ</a>
        @endforeach
    </center>
</div>
@endsection