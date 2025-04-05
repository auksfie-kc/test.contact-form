
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/index.css') }}">
@endsection

@section('content')

    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>

      <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="last_name" placeholder="例）山田" />
            </div>
            <div class="form__input--text">
              <input type="text" name="first_name" placeholder="例）太郎" />
            </div>
            <div class="form__error">
              @error('last_name')
              {{ $message }}
              @enderror
            </div>
            <div class="form__error">
              @error('first_name')
              {{ $message }}
              @enderror
            </div>
          </div>
          <div class="form__group-content">
            <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">必須</span>
          </div>
            <div class="form__input--text">
              <input type="radio" name="gender" value="男性" >男性</div>
            
            <div class="form__input--text">
              <input type="radio" name="gender" value="女性" >女性</div>
            <div class="form__input--text">
              <input type="radio" name="gender" value="その他" >その他</div>
            </div>
            <div class="form__error">
              @error('gender')
              {{ $message }} 
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" />
            </div>
            <div class="form__error">
              @error('email')
              {{ $message }} 
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="area_code" placeholder="090" />
            </div>
            <div class="form__input--text">
              <input type="tel" name="first_part" placeholder="1234" />
            </div>
            <div class="form__input--text">
              <input type="tel" name="second_part" placeholder="5678" />
            </div>
            <div class="form__error">
              @error('tel')
              {{ $message }} 
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">必須</span>
          </div>
        　<div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例）東京都渋谷区千駄ヶ谷１−２−３" />
            </div>
            <div class="form__error">
              @error('address')
              {{ $message }} 
              @enderror
            </div>
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例）千駄ヶ谷マンション１２３" />
            </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問合せの種類</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            
             <select name="select">
             <option value="" disabled selected>選択してください</option>
             <option value="商品のお届けについて">商品のお届けについて</option>
             <option value="商品の交換について">商品の交換について</option>
             <option value="商品トラブル">商品トラブル</option>
             <option value="ショップへのお問合せ">ショップへのお問合せ</option>
             <option value="その他">その他</option>
  　　　　　　 </select>
            <div class="form__error">
              @error('select')
              {{ $message }} 
              @enderror
            </div>
           </div>
          </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
            <div class="form__error">
              @error('content')
              {{ $message }} 
              @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認</button>
        </div>
      </form>
    </div>

@endsection
