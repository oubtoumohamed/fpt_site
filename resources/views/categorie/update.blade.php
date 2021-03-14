@extends('standard')

@section('content')

  <form class="card" method="POST" enctype="multipart/form-data" action="@if($object->id){{ route('categorie_update',$object->id) }}@else{{ route('categorie_store') }}@endif">
    {{ csrf_field() }}
    <div class="card-body">
      <h3 class="card-title">
        @if($object->id)
          {{ __('categorie.categorie_edit') }}
        @else
          {{ __('categorie.categorie_create') }}
        @endif

      </h3>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="form-label">{{ __('categorie.label') }}</label>
            <textarea class="form-control" name="label" id="label" cols="30" rows="10">@if($object->id){{ $object->label }}@else{{ old('label') }}@endif</textarea>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer text-right">
      @include('layout.update-actions')
    </div>
  </form>

@endsection