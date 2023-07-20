@extends('layouts.base')

@section('title')
    Вход
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                        <x-card>
                            <div class="card-body">
                                <h4 class="mb-0">
                                    Вход
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('login.store')}}" method="POST">
                                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                    <div class="mb-3">
                                        <label class="mb-1">Email</label>
                                        <input type="email" value="{{ old('email') }}" name="email" class="form-control" autofocus>
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-1">Пароль</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                            
                                            <label class="form-check-label" for="remember">
                                              Запомнить меня
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-3">Войти</button>
                                </form>
                                <p>Еще не зарегистрированны? <a href="{{ route('register') }}">Зарегистрироваться</a></p>
                            </div>
                        </x-card>
                </div>
            </div>
        </div>
    </section>
@endsection