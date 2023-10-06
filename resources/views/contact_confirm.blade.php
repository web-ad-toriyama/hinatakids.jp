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

        {{-- 🍆フォームのスタイルの修正をお願いします --}}
        {{ Form::open(['route'=>config('custom.page.contact_send.route')]) }}

        <div class="item">
          <label class="label" for="name">お名前</label>
          <div>
            {{ $validated['contact_name'] }}
            {{ Form::hidden('contact_name', $validated['contact_name']) }}
          </div>
        </div>

        <div class="item">
            <label class="label" for="age">お子様のご年齢</label>
            <div>
                {{ $validated['contact_age'] }}
                {{ Form::hidden('contact_age', $validated['contact_age']) }}
            </div>
        </div>

        <div class="item">
          <label class="label" for="email">メールアドレス</label>
          <div>
            {{ $validated['contact_email'] }}
            {{ Form::hidden('contact_email', $validated['contact_email']) }}
          </div>
        </div>

        <div class="item">
          <label class="label" for="tel">電話番号</label>
          <div>
            {{ $validated['contact_tel'] }}
            {{ Form::hidden('contact_tel', $validated['contact_tel']) }}
          </div>
        </div>

        <div class="item">
            <label class="label" for="tel">ひなたキッズ体操教室を知ったきっかけ</label>
            <div>
                {{ $validated['contact_chance'] }}
                {{ Form::hidden('contact_chance', $validated['contact_chance']) }}
            </div>
        </div>

        <div class="item">
          <label class="label" for="comment">お問い合わせ<br>内容</label>
          <div>
            {{-- 🍆<br>が改行されないので修正をお願いします --}}
            {!! nl2br(e($validated['contact_contents'])) !!}
            {{ Form::hidden('contact_contents', $validated['contact_contents']) }}
          </div>
        </div>

        <div class="btn_area">
          <input type="submit" value="送信する">
          {{-- 🍆確認画面なのでリセットすることはできません --}}
          <input type="reset" value="戻る" onclick="history.back();">
        </div>

      {{ Form::close() }}
    </section>
  <!-- //ここまでページによって異なるコンテンツ部分 -->
  </div>

</main>
<!-- //ここまでmain ********************************************************************************-->
@endsection
