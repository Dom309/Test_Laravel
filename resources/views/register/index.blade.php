@extends('layouts.base')

@section('title')
    Регистрация
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                        <x-card>
                            <div class="card-body">
                                <h4 class="mb-0">
                                    Регистрация
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('register.store')}}" method="POST">
                                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                    <div class="mb-3">
                                        <label class="mb-1">Имя</label>
                                        <input type="text" value="{{ request()->old('name') }}" name="name" class="form-control" autofocus>
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-1">Email</label>
                                        <input type="email" value="{{ request()->old('email') }}" name="email" class="form-control" autofocus>
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-1">Пароль</label>
                                        <input type="password" value="{{ request()->old('password') }}" name="password" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-1">Пароль повторно</label>
                                        <input type="password" value="{{ request()->old('password-confirmation') }}" name="password-confirmation" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" value="{{ request()->old('agreement') }}" type="checkbox" id="remember" name="agreement">
                                            
                                            <label class="form-check-label" for="remember">
                                              Согласен с политикой конфиденциальности
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-3">Зарегистрироваться</button>
                                </form>
                                <p>Уже зарегистрированны? <a href="{{ route('login') }}">Войти</a></p>
                            </div>
                        </x-card>
                </div>
            </div>
        </div>
    </section>
@endsection