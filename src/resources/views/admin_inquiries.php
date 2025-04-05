@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')


<div class="admin__inquiries">
　<div class="admin_inquiries-form">
        <h2>FashionablyLate</h2>
　</div>
　<div class="admin_search-form">
        <h2>Admin</h2>
　</div>
<form class="serch-form" action="/category/search" method="get">
        @csrf
        <div class="search-form__item">
            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="名前やメールアドレスを入力してください"  required>
        </div>
        <div class="search-form__item">
        <label for="male"><input type="radio" id="male" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}> 男性</label>
        <label for="female"><input type="radio" id="female" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}> 女性</label>
        <label for="other"><input type="radio" id="other" name="gender" value="other" {{ old('gender') == 'other' ? 'checked' : '' }}> その他</label>
        </div>
        <div class="search-form__item">
            <select id="inquiry_type" name="inquiry_type" required>
            <option value="">選択してください</option>
            <option value="product" {{ old('inquiry_type') == 'product' ? 'selected' : '' }}>商品に関するお問合せ</option>
            <option value="service" {{ old('inquiry_type') == 'service' ? 'selected' : '' }}>サービスに関するお問合せ</option>
            <option value="other" {{ old('inquiry_type') == 'other' ? 'selected' : '' }}>その他</option>
        </select>
    </div>
            <label for="inquiry-type"></label>
            <select id="inquiry-type" name="inquiry-type">
                <option value="">お問い合わせの種類</option>
                <option value="exchange">商品の交換について</option>
                <option value="return">返品について</option>
                <option value="other">その他</option>
            </select>
            <label for="date"></label>
            <input type="date" id="date" name="date">

            <button type="submit">検索</button>
            <button type="reset" class="reset-button">リセット</button>
        </div>
</div>
@endsection
