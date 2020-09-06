<div class="mini_part">
    <a href="{{ route('part') }}/?part_id={{$advpart->part_id}}&car_id={{$advpart->autos->id}}&category_id={{$advpart->cat_id}}">
    <div class="mini_part_image">
      @if(isset($advpart->getPhoto()->photo_url))
      <img src="{{$advpart->getPhoto()->photo_url}}" alt="">
      @else
      <img src="/vvg/public/images/nophoto.jpg" alt="">
      @endif
    </div>
    <div class="mini_part_text">
      <h4>{{$advpart->autos->auto_name}} {{$advpart->autos->auto_model}} {{$advpart->autos->auto_year}}</h4>
      <h4>{{$advpart->part_name}}</h4>
      <div class="mini_part_cost">
        <img src="/vvg/public/images/money.png" alt="">
        <h4>{{$advpart->part_cost}} р.</h4>
      </div>
      <div class="mini_part_haveit">
        <img src="/vvg/public/images/tick.png" alt="">
        <h4>В наличии</h4>
      </div>
    </div>
  </a>
</div>
