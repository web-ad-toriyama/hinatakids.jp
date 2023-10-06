@extends('common.contact_layout')

@section('main')
<!-- ここからmain ********************************************************************************-->
<main class="index_9">

    <div class="inner spacing">
    <!-- ここからページによって異なるコンテンツ部分 -->
      <section class="sec">

        <div class="secondary_title">
          <h3>
            h:3見出しが入ります
          </h3>
        </div>

        {{-- 🍆エラーはここでまとめて出力しているのでエラー表示の装飾をお願いします --}}
        @if ($errors->any())
        <ul class="error">
            @foreach ($errors->all() as $error)
                <li>※{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        {{-- 🍆フォームのスタイルの修正をお願いします --}}
        {{ Form::open(['route'=>config('custom.page.contact_confirm.route')]) }}

          <div class="item">
            <label class="label" for="name">お子様のお名前</label>
            <div>
              {{ Form::text('contact_name', null, ['class'=>'inputs']) }}
            </div>
          </div>
          <div class="item">
              <label class="label" for="name">お子様のご年齢</label>
              <div>
                  <select class="form-control" name="contact_age">
                      <option selected="selected" value="">選択してください</option>
                      @for ($i = env('CONTACT_AGE_MIN'); $i <= env('CONTACT_AGE_MAX'); $i++)
                      <option value="{{$i}}歳">{{$i}}歳</option>
                      @endfor
                      <option value="その他">その他</option>
                  </select>
              </div>
          </div>
          <div class="item">
            <label class="label" for="email">メールアドレス</label>
            <div>
              {{ Form::email('contact_email', null, ['class'=>'inputs']) }}
            </div>
          </div>

          <div class="item">
            <label class="label" for="tel">電話番号</label>
            <div>
              {{ Form::tel('contact_tel', null, ['class'=>'inputs']) }}
            </div>
          </div>
          <div class="item">
              <label class="label" for="name">ひなたキッズ体操教室を知ったきっかけ</label>
              <div>
                  <select class="form-control" name="contact_chance">
                  <option selected="selected" value="">選択してください</option>
                    @foreach (config('custom.contact_chance') as $value)
                          <option value="{{$value}}">{{$value}}</option>
                    @endforeach
                    </select>
                    </div>
                    </div>
{{--          <div class="item">--}}
{{--            <label class="label">お問い合わせ<br>用件</label>--}}
{{--            <div class="inputs">--}}
{{--            @foreach (config('custom.icon.requirement') as $key => $value)--}}
{{--            <div class="contact_item">--}}
{{--            {{ Form::radio('contact_requirement', $key, null, ['id'=>'requirement_'.$key]) }}--}}
{{--            <label for="requirement_{{ $key }}">{{ $value }}</label><br>--}}
{{--            </div>--}}
{{--            @endforeach--}}
{{--            </div>--}}
{{--          </div>--}}

<div class="item">
<label class="label" for="comment">お問い合わせ<br>内容</label>
<div>
{{ Form::textarea('contact_contents', null, ['class'=>'inputs', 'rows'=>8]) }}
</div>
</div>

{{Form::checkbox('contact_check', '1', false, ['class'=>'custom-control-input','id'=>'checkSkill1'])}}個人情報の取り扱いについて同意します。

<div class="btn_area">
<input type="submit" value="送信内容を確認する"><input type="reset" value="リセット">
</div>

{{ Form::close() }}
</section>
<!-- //ここまでページによって異なるコンテンツ部分 -->
</div>


</main>
<!-- //ここまでmain ********************************************************************************-->

@endsection
