@extends('layouts.app')
@section('content')
<div class="panel-body">
<!-- バリデーションエラーの場合に表示 --> 
@include('common.errors')
  <!-- リスト作成フォーム -->
  <div class="container">
   <form action="{{ url('listings')}}" method="POST" class="form-horizontal">
   {{csrf_field()}} 
    <div class="form-group"> 
      <label for="listing" class="col-sm-3 control-label">list</label> 
      <div class="col-sm-6"> 
        <input type="text" name="list_name" class="form-control" value="{{ old('list_name') }}">
      </div>
    </div>
    <div class="form-group"> 
      <div class="text-center"> 
        <button type="submit" class=".btn">
        <i class="glyphicon glyphicon-plus"></i> add </button> 
      </div>
    </div>
   </form>
  </div>
</div> 
@endsection

