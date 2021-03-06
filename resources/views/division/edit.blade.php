@extends('layouts.master')

@section('title', trans('messages.Division'))

@section('sidebar')
    @parent

    <p>{{ trans('messages.Divisionrules') }}</p>
@endsection

@section('content')
  <h3>{{ trans('messages.Edit') }} {{ trans('messages.Division') }}:</h3>
  
  <form id="" action="" method="POST">
      <div class="container-fluid">
          <div class="row">
            <div  class="col-xs-12 col-md-6">{{ trans('messages.Name') }}: <input type="text" name="name" id="name" class="form-control" value="{{ $division->name }}" /></div>
          </div>

          <div class="row">
            <div  class="col-xs-12 col-md-6">{{ trans('messages.Desc') }}: <textarea name="description" id="description" class="form-control" rows="3">{{ $division->description }}</textarea></div>
          </div>

          <div class="row">
            <div  class="col-xs-12 col-md-6">{{ trans('messages.Created') }}: <input type="text" name="created" id="created" class="form-control" value="{{ $division->created }}" disabled /></div>
          </div>

          <div class="row">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="submit" class="btn btn-primary" value="{{ trans('messages.Submit') }}" />
            <a href="{{ url('/division') }}" class="btn btn-default" target="_self">{{ trans('messages.Cancel') }}</a>
          </div>
      </div>
  </form>
@endsection
