@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD Product') }}</div>

                <div class="card-body">
                    <form method="POST" action="add">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อสินค้า') }}</label>

                            <div class="col-md-6">
                                <input id="pro_name" type="text" class="form-control{{ $errors->has('pro_name') ? ' is-invalid' : '' }}" name="pro_name" value="" required autofocus>

                                <!-- @if ($errors->has('pro_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pro_name') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ราคา') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="" required>

                                <!-- @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('ประเภทสินค้า') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="type" type="text" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" required> -->
                                <select class="form-control" name="type" required>
                                    <option value="">เลือกชนิดสินค้า</option>
                                    @foreach($type as $type)
                                    <option value="{{$type->type_id}}">{{$type->type_name}}</option>
                                    @endforeach
                                </select>
                                <!-- @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('บึนทึก') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
