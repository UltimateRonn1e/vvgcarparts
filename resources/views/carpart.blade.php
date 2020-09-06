<div class="part">
  <a href="{{ route('part') }}/?part_id={{$part->part_id}}&car_id={{$part->autos->id}}&category_id={{$part->cat_id}}">
    <div class="part_image">
      @if(isset($part->getPhoto()->photo_url))
      <img src="{{$part->getPhoto()->photo_url}}" alt="{{$part->part_name}} {{$part->autos->auto_name}} {{ $part->autos->auto_model }}">
      @else
      <img src="/vvg/public/images/nophoto.jpg" alt="">
      @endif
    </div>
    <div class="part_unite">
      <div class="part_description">
        <h2>{{ $part->part_name }}</h2>
        <h1>{{$part->autos->auto_name}} {{ $part->autos->auto_model }} {{$part->autos->auto_year}}</h1>
        <div class="car_descr">
          <img src="/vvg/public/images/car_about.png" alt="">
          <h3>{{$part->autos->auto_fueltype}} {{$part->autos->auto_fuelvolume}}, {{$part->autos->auto_transmissiotype}}, {{$part->autos->auto_bodytype}}</h3>
        </div>
        <h4>Описание - {{$part->part_description}}</h4>
        <h4>Маркировка - {{$part->part_code}}</h4>
        <div class="car_descr">
          <img src="/vvg/public/images/tick.png" alt="">
          <h4>В наличии</h4>
        </div>
      </div>
      <div class="advanced_options">
        <div class="part_cost">
          <img src="/vvg/public/images/money.png" alt="">
          <h1>{{$part->part_cost}} р.</h1>
        </div>
      </div>
    </div>
  </a>
</div>