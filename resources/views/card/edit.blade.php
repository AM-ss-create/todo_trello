@extends('layouts.app')
@section('content')
<!-- バリデーションエラーの場合に表示 --> 
@include('common.errors')
<div class="cardeditPgae">
  <div class="container">
    <form class="cardeditForm" id="edit_card" action="/card/edit" accept-charset="UTF-8" method="post">
    {{csrf_field()}} 
    <input type="hidden" name="id" value="{{$card->id}}"> 
      <div class="cardeditForm_title">
        <label for="card_title">title</label>
        <input class="form-control" placeholder="card name" type="text" value="{{ old('card_title',$card->title) }}" name="card_title">
      </div>
      <div class="cardeditForm_memo">
        <label for="card_memo">memo</label>
        <textarea class="form-control" placeholder="detail" name="card_memo">{{ old('card_memo', $card->memo) }}</textarea>
      </div>
      <div class="cardeditForm_memo">
        <label>list</label>
        <select class="form-control" name="listing_id">
          @foreach($listings as $item)
            <option value="{{ $item->id }}" @if(old('listing_id', $listing->id) == $item->id)selected @endif>{{ $item->title }}</option>
          @endforeach
        </select>
      </div>
     <div class="text-center"><input type="submit" name="commit" value="update" class="submitBtn" data-disable-with="update"></div>
    </form>
  </div>
</div>
@endsection

