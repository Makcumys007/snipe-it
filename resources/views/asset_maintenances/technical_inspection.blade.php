@extends('layouts/default')

{{-- Page title --}}
@section('title')
  @if ($item->id)
    {{ trans('admin/asset_maintenances/form.update') }}
  @else
    {{ trans('admin/asset_maintenances/form.asset_maintenances') }}
  @endif
  @parent
@stop


@section('header_right')
<a href="{{ URL::previous() }}" class="btn btn-primary pull-right">
  {{ trans('general.back') }}</a>
@stop


{{-- Page content --}}
@section('content')

<div class="row">
  <div class="col-md-9">
    @if ($item->id)
      <form class="form-horizontal" method="post" action="{{ route('maintenances.update', $item->id) }}" autocomplete="off">
      {{ method_field('PUT') }}
    @else
      <form class="form-horizontal" method="post" action="{{ route('maintenances.store') }}" autocomplete="off">
    @endif
    <!-- CSRF Token -->
    {{ csrf_field() }}

    <div class="box box-default">
      <div class="box-header with-border">
        <h2 class="box-title">
          @if ($item)
          {{ $item->name }}
          @endif
        </h2>
      </div><!-- /.box-header -->

      <div class="box-body">
        <!-- Asset ID -->
        <div class="form-group">
          <label for="asset_id" class="col-md-3 control-label">
            {{ trans('admin/hardware/table.asset_tag') }}
          </label>
          <div class="col-md-7">
            <input class="form-control" type="text" value="{{ $asset->asset_tag }}" readonly/>
            <input type="hidden" name="asset_id" value="{{ $asset->id }}">
          </div>
        </div>
        

        <!-- Supplier ID -->
        <input type="hidden" name="supplier_id" value="0">
        <!-- asset_maintenance_type -->
        <input type="hidden" name="asset_maintenance_type" value="{{ trans('admin/asset_maintenances/form.asset_maintenances') }}">

        <!-- Title -->
        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
          <label for="title" class="col-md-3 control-label">
           {{ trans('admin/asset_maintenances/form.title') }}
          </label>
          <div class="col-md-7{{  (Helper::checkIfRequired($item, 'title')) ? ' required' : '' }}">
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $item->title) }}" />
            {!! $errors->first('title', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
          </div>
        </div>

        <!-- Start Date -->
        <div class="form-group {{ $errors->has('start_date') ? ' has-error' : '' }}">
          <label for="start_date" class="col-md-3 control-label">{{ trans('admin/asset_maintenances/form.start_date') }}</label>

          <div class="input-group col-md-3{{  (Helper::checkIfRequired($item, 'start_date')) ? ' required' : '' }}">
            <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd"  data-autoclose="true" data-date-clear-btn="true">
              <input type="text" class="form-control" placeholder="{{ trans('general.select_date') }}" name="start_date" id="start_date" value="{{ old('start_date', $item->start_date) }}">
              <span class="input-group-addon"><x-icon type="calendar" /></span>
            </div>
            {!! $errors->first('start_date', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
          </div>
        </div>



       

        


        <!-- Notes -->
        <div class="form-group {{ $errors->has('notes') ? ' has-error' : '' }}">
          <label for="notes" class="col-md-3 control-label">{{ trans('admin/asset_maintenances/form.notes') }}</label>
          <div class="col-md-7">
            <textarea class="col-md-6 form-control" id="notes" name="notes">{{ old('notes', $item->notes) }}</textarea>
            {!! $errors->first('notes', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
          </div>
        </div>
      </div> <!-- .box-body -->

      <div class="box-footer text-right">
        <button type="submit" class="btn btn-success"><x-icon type="checkmark" /> {{ trans('general.save') }}</button>
      </div>
    </div> <!-- .box-default -->
    </form>
  </div>
</div>

@stop
