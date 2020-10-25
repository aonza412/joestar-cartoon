@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">รายการสินค้า</div>
                    <table class="table">
                        <thead align="center">
                            <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">ชื่อสินค้า</th>
                            <th scope="col">ราคา</th>
                            <th scope="col">ประเภท</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody align="center">
                            @foreach($product as $product)
                            <tr>
                                <th scope="row">{{$product->pro_id}}</th>
                                <td>{{$product->pro_name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->type_name}}</td>
                                <td><a href="edit{{$product->pro_id}}" class="btn btn-danger">แก้ไข</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
