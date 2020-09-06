<?php

use App\Http\Controllers\FunctionController;
?>
@extends('layouts.app')
@section('title-block')
Запчасти
@endsection
@section('content')
<div class="parts">
  <div class="part_direction">
    <h1>ЗАПЧАСТИ
      @foreach(['category_name','car_mark','car_model','car_year','car_fuel','fuel_type','auto_year'] as $field)
      @if(request()->$field != null)
      {{FunctionController::translateCategory(request()->$field)}}
      @endif
      @endforeach
    </h1>
  </div>
  <div class="parts_info">
    <hr class="underline">
    <div class="route">
      @if(request()->filled('car_mark'))
      <a href="{{route('homepage')}}">Главная</a> / <a href="{{route('parts')}}">Запчасти</a> / <a href="{{route('parts')}}?car_mark={{request()->car_mark}}">{{request()->car_mark}} </a>
      @else
      <a href="{{route('homepage')}}">Главная</a> / <a href="{{route('parts')}}">Запчасти</a>
      @endif
    </div>
    <div class="parts_all">
      <div class="parts_main">
        <p>Список запчастей</p>
        @if(count($partsAll) > 0)
        @foreach($partsAll as $part)
        @include('carpart',compact('part'))
        @endforeach
        @else
        <div class="noparts">
          <h3>По вашему запросу ничего не найдено</h3>
          <img src="/vvg/public/images/noparts.png" alt="">
        </div>
        @endif
      </div>
      <div class="parts_categories">
        <p>Категории поиска</p>
        <form class="partsearch" action="{{ route('parts')}}" method="GET">
          <p>Критерии</p>
          <div class="findpart_inputs">
            <input type="text" data-dependent="auto_name" id="auto_name" class="auto_name form-control autoname" autocomplete="off" list="car_mark" placeholder="Марка авто" name="car_mark">
            <datalist id="car_mark">
              @foreach($carnames as $item)
              <option value="{{ $item->auto_name }}"></option>
              @endforeach
            </datalist>


            <input type="text" class="form-control autoname" id="auto_model" autocomplete="off" list="car_models" placeholder="Модель авто" name="car_model">
            <datalist class="car_model" id="car_models">
            </datalist>

            <input type="text" class="form-control autoname" id="auto_fuel" autocomplete="off" list="fuel_volume" placeholder="Объём: 1.5" name="car_fuel">
            <datalist id="fuel_volume">
              @foreach($carfuelvolume as $item)
              <option value="{{ $item->auto_fuelvolume }}"></option>
              @endforeach
            </datalist>

            <input type="text" class="form-control autoname" autocomplete="off" list="fuel_type" placeholder="Топливо" name="fuel_type">
            <datalist id="fuel_type">
              @foreach($carfueltype as $item)
              <option value="{{ $item->auto_fueltype }}"></option>
              @endforeach
            </datalist>

            <input type="text" class="form-control autopart" autocomplete="off" list="car_year" placeholder="Год выпуска" name="car_year">
            <datalist id="car_year">
              @foreach($caryear as $item)
              <option value="{{ $item->auto_year }}"></option>
              @endforeach
            </datalist>

            <input type="text" class="form-control autopart" autocomplete="off" list="part_name" placeholder="Запчасть" name="part_name">
            <datalist id="part_name">
              @foreach($partnames as $item)
              <option value="{{ $item->part_name }}"></option>
              @endforeach
            </datalist>

            <div class="">
              <h5 class="adv_searchbutton" onclick="ToggleSearch()">Расширенный поиск ☟</h5>
            </div>
            <div class="adv_search">
              <div class="findpart_inputs">
                <input type="text" class="form-control autopart" autocomplete="off" list="category_name" placeholder="Категория" name="category_name">
                <datalist id="category_name">
                  @foreach($categories as $item)
                  <option value="{{ $item->category_name }}"></option>
                  @endforeach
                </datalist>
                <input type="text" class="form-control autopart" autocomplete="off" list="autoname" placeholder="Маркировка" name="part_code">
                <input type="text" class="form-control autopart" autocomplete="off" list="car_transmission" placeholder="Тип КПП" name="car_transmission">
                <datalist id="car_transmission">
                  @foreach($cartransmiss as $item)
                  <option value="{{ $item->auto_transmissiotype }}"></option>
                  @endforeach
                </datalist>
                <input type="text" class="form-control autoname" autocomplete="off" list="autoname" placeholder="Цена от" name="price_low">
                <input type="text" class="form-control autoname" autocomplete="off" list="autoname" placeholder="Цена до" name="price_high">
              </div>
            </div>
          </div>
          <div class="findpart_button">
            <button type="submit" id="findpart" class="btn btn-primary findpart">Найти</button>
            <button type="reset" id="findpart" class="btn btn-primary findpart">Очистить</button>
          </div>
        </form>
      </div>
    </div>

  </div>
  <div class="mini_parts_view">
    <div class="pagination">
      {{$partsAll->links()}}
    </div>
    <div class="about">
      <h2>Возможно вам будет интересно</h2>
    </div>
    <hr class="underline">
    <div class="mini_performance">
      @foreach($miniparts as $advpart)
      @include('minipart',compact('advpart'))
      @endforeach
    </div>

  </div>
</div>
</div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {

    function AppendTo(str, block, item) {
      block.find('.' + str + '').innerHtml = "";
      block.find('.' + str + '').html(" ");
      block.find('.' + str + '').append(item);
    }

    $(document).on('change', '.auto_name', function() {
      var auto_name = $(this).val();
      var models = "";
      var div = $(this).parent();
      $.ajax({
        type: 'get',
        url: '{{route("getModels")}}',
        data: {
          'auto_name': auto_name
        },
        success: function(data) {
          if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
              models += '<option value="' + data[i].auto_model + '">' + data[i].auto_model + '</option>';
            }
          }
          AppendTo('car_model', div, models);
          localStorage.setItem('car_name', auto_name);
        }
      });
    });

    window.onload = function() {
      if (window.location.search.indexOf('car_mark=') != -1) {
        var auto_name = localStorage.getItem('car_name');
      }
      var models = "";
      var div = $(this).parent();
      $.ajax({
        type: 'get',
        url: '{{route("getModels")}}',
        data: {
          'auto_name': auto_name
        },
        success: function(data) {
          console.log('success');
          console.log(data);
          if (data.length > 0) {
            for (var i = 0; i < data.length; i++) {
              models += '<option value="' + data[i].auto_model + '">' + data[i].auto_model + '</option>';
            }
          }
          AppendTo('car_model', div, models);
        }
      });
    };
  });
</script>
@endsection