@extends('master')

@section('title')
    İletişim
@endsection('title')


@section('content')
<div class="container py-4">
    <h1 class="text-center  py-4">İletişim Formu</h1>
    <form method="post" action= "{{route('iletisim.store')}}">
        {{ csrf_field() }}
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="ContactName">İsim:</label>
                <input type="text" class="form-control" required id="ContactName" name="name" placeholder="">
            </div>
        </div>
            <div class="col">
            <div class="form-group">
                <label for="ContactSurname">Soyisim:</label>
                <input type="text" class="form-control" required id="ContactSurname" name="surname" placeholder="">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="ContactEmail">E-mail Adresi:</label>
        <input type="email" class="form-control" required id="ContactEmail" name="email" placeholder="name@example.com">
        @if($errors->has('email'))
            <small class="form-text invalid-feedback">{{ $errors->first('email')}}</small>
        @endif
    </div>
    <div class="form-group">
        <label for="ContactNo">Numara:</label>
        <input type="tel" class="form-control" required id="ContactNo" name="phoneNumber" placeholder="555 555 55 55">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Seçtiğiniz E-Ticaret Paketi</label>
        <select class="form-control" id="exampleFormControlSelect1" name="package">
        <option>Small</option>
        <option>Medium</option>
        <option>Large</option>
        </select>
    </div>
    <div class="form-group">
        <label for="ContactMessage">Mesajınız:</label>
        <textarea class="form-control" id="ContactMessage" required rows="5" name="message"></textarea>
    </div>
    <button class="btn btn-danger">Gönder</button>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    </form>
</div>

@endsection("content")
