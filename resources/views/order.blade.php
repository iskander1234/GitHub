@extends('layouts.master')

@section('title', 'Оформить заказ')

@section('content')

        <h1>Подтвердите заказ:</h1>
        <div class="container">
            <div class="row justify-content-center">
                <p>Общая стоимость: <b>{{$order->getFullPrice()}} тг.</b></p>
                <form action="{{route('basket-confirm')}}" method="POST">
                    <div>
                        <p>Укажите свои имя и номер телефона, чтобы наш менеджер мог с вами связаться:</p>

                        <div class="container">
                            <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Имя: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="name" id="name" value="" class="form-control">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Номер телефона: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="phone" id="phone" value="" class="form-control">
                                </div>
                            </div>
                            <br>
                            <input type="hidden" name="_token" value="V82tWE6P378t3kEvkxfj7KzOY4IjiebZ8LvO3i8k">
                            <br>
                            @csrf
                            <input type="submit" class="btn btn-success" value="Подтвердите заказ">
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection
