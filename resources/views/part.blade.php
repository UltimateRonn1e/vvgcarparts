@extends('layouts.app')
@section('title-block')
{{$currentPart->part_name}} {{$currentPart->autos->auto_name}} {{$currentPart->autos->auto_model}}, {{$currentPart->autos->auto_fueltype}} {{$currentPart->autos->auto_bodytype}}
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
@endsection
@section('content')
<div class="part_view">
  <div class="part_direction">
    <h1>{{$currentPart->part_name}} {{$currentPart->autos->auto_name}} {{$currentPart->autos->auto_model}}, {{$currentPart->autos->auto_fueltype}} {{$currentPart->autos->auto_bodytype}}</h1>
  </div>
  <hr class="underline">
  <div class="route">
    <div class="">
      <a href="{{route('homepage')}}">Главная</a> / <a href="{{route('parts')}}">Запчасти</a> / <a href="{{route('part')}}?part_id={{$currentPart->part_id}}&car_id={{$currentPart->car_id}}&category_id={{$currentPart->cat_id}}">{{$currentPart->part_name}} {{$currentPart->autos->auto_name}} {{$currentPart->autos->auto_model}} {{$currentPart->autos->auto_year}} {{$currentPart->autos->auto_fueltype}} {{$currentPart->autos->auto_fuelvolume}}</a>
    </div>
  </div>
  <div class="part_view_all">
    <div class="part_image_view">
      <div class="fotorama" data-nav="thumbs" data-allowfullscreen="native">
        @if(count($part_photos) > 0)
        @foreach($part_photos as $photo)
        <img src="{{$photo->photo_url}}">
        @endforeach
        @else
        <img src="/vvg/public/images/nophoto.jpg">
        @endif
      </div>
    </div>
    <div class="part_text_view">
      <div class="category_name">
        <h3>{{ $currentPart->part_name }}</h3>
        <hr>
        <br>
      </div>
      <div class="car_part_name">
        <h2>{{ $currentPart->autos->auto_name }} {{ $currentPart->autos->auto_model }} {{ $currentPart->autos->auto_year }}</h2>
      </div>
      <h4>Категория - {{ $currentPart->categories->category_name }}</h4>
      <h4>{{ $currentPart->autos->auto_fueltype }} {{ $currentPart->autos->auto_fuelvolume }}, {{ $currentPart->autos->auto_transmissiotype }}, {{ $currentPart->autos->auto_bodytype }}</h4>
      <h4>Маркировка - {{ $currentPart->part_code }}</h4>
      <h4>Описание - {{ $currentPart->part_description }}</h4>
      <div class="haveit_view">
        <img src="/vvg/public/images/tick.png" alt="">
        <h3>В наличии</h3>
      </div>
      <h4 style="font-size: 1rem;">Для заказа звоните по номеру: +375 (29) 197-25-97 (MTC)</h4>
      <div class="part_cost_view">
        <div class="part_cost_money">
          <img src="/vvg/public/images/money.png" alt="">
          <h2>{{$currentPart->part_cost}} р.</h2>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="mini_parts_view">
  <div class="about">
    <h2>Ещё запчасти для {{ $currentPart->autos->auto_name }} {{ $currentPart->autos->auto_model }} {{ $currentPart->autos->auto_year }}</h2>
  </div>
  <hr class="underline">
  <div class="mini_performance">
    @foreach($miniparts as $advpart)
    @include('minipart',compact('advpart'))
    @endforeach
  </div>

</div>

@endsection