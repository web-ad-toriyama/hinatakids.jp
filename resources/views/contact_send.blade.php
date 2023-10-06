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

      @if (session('error_message'))
        <p>{{ session('error_message') }}</p>
      @else
        <p>送信が完了しました。</p>
      @endif

    </section>
  <!-- //ここまでページによって異なるコンテンツ部分 -->
  </div>


</main>
<!-- //ここまでmain ********************************************************************************-->
@endsection
