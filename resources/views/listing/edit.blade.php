@extends('layouts.app')
@section('content')
<div class="panel-body">
  <!-- バリデーションエラーの場合に表示 --> 
  @include('common.errors')
  <div class="container">
  　<form action="{{ url('/listing/edit')}}" method="POST" class="form-horizontal">
    {{csrf_field()}} 
      <div class="form-group"> 
        <label for="listing" class="col-sm-3 control-label">list</label> 
        <div class="col-sm-6"> 
          <!-- リスト名 --> 
          <input type="text" name="list_name" value="{{ old('list_name', $listing->title) }}" class="form-control"> 
        </div>
        <input type="hidden" name="id" value="{{ old('id', $listing->id) }}"> 
      </div>
      <div class="form-group"> 
        <div class="text-center"> 
          <button type="submit" class="btn btn-default">
          <input type="submit" name="commit" value="update" class="submitBtn" data-disable-with="update">
          </button> 
        </div>
      </div>
    </form>
　 </div>
</div>
@endsection

