@extends('layouts.master')

@section('title', trans('messages.Role'))

@section('sidebar')
    @parent

    <p>{{ trans('messages.Rolerules') }}</p>
@endsection

@section('content')
  <h3>{{ trans('messages.NewRole') }}:</h3>

  <form id="" action="" method="POST">
      <div class="container-fluid">
          <div class="row">
            <div  class="col-xs-12 col-md-6">{{ trans('messages.Name') }}: <input type="text" name="name" id="name" class="form-control" value="" /></div>
          </div>

          <div class="row">
            <div  class="col-xs-12 col-md-6">{{ trans('messages.Desc') }}: <textarea name="description" id="description" class="form-control" rows="3"></textarea></div>
          </div>

          <div class="row">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="submit" class="btn btn-primary" value="{{ trans('messages.Submit') }}" />
            <a href="{{ url('/role') }}" class="btn btn-default" target="_self">{{ trans('messages.Cancel') }}</a>
          </div>
      </div>
  </form>
@endsection

