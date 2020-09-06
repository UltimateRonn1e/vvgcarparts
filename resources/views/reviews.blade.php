@extends('layouts.app')
@section('title-block')
Отзывы
@endsection
@section('content')
<div class="reviews_page">
  <div id="review_blocks" class="part_direction">
    <h1>ОТЗЫВЫ ПОКУПАТЕЛЕЙ</h1>
  </div>
  <hr class="underline">
  <div class="review_blocks">
    @if(count($reviews) > 0)
    @foreach($reviews as $review)
      @include('review',compact('review'))
    @endforeach
    @else
    <h2>Оставьте ваш отзыв, он будет первым!</h2>
    @endif
  </div>
  <div id="review_form" class="review_form">
    <form method="post" action="{{route('addReview')}}#review_form" id="reviewform">
      <h2>Оставьте ваш отзыв</h2>
      @if(count($errors) > 0)
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" name="button">x</button>
        <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      @if($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert" name="button">x</button>
        <strong>{{ $message }}</strong>
      </div>
      @endif
      <div class="form-group">
        <input type="text" class="form-control inputtext" aria-describedby="emailHelp" name="ReviewerName" placeholder="Ваше имя">
        <textarea class="form-control inputtext bigtext" id="exampleFormControlTextarea1" name="ReviewMessage" placeholder="Введите сообщение здесь.." rows="3"></textarea>
      </div>
      @csrf
      <input type="submit" value="Отправить отзыв" id="sendfeedback" class="btn btn-primary findpart" />
    </form>
  </div>
</div>
@endsection
