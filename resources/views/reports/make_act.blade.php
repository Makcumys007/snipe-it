@extends('layouts/default')

{{-- Page Title --}}
@section('title')
{{ trans('general.custom_report') }}
@parent
@stop

@section('header_right')
<a href="{{ URL::previous() }}" class="btn btn-primary pull-right">
  {{ trans('general.back') }}</a>
@stop


{{-- Page content --}}
@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2">

    {{ Form::open(['method' => 'post', 'class' => 'form-horizontal']) }}
    {{csrf_field()}}

    <!-- Horizontal Form -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h2 class="box-title">{{  trans('general.customize_report') }}</h2>
        </div><!-- /.box-header -->

        <div class="box-body">

            <div class="col-md-12">          

            

            <p>
                {!! trans('general.report_fields_info') !!}
            </p>

              <br>

            @include ('partials.forms.edit.company-select', ['translated_name' => trans('general.company'),'multiple' => 'true', 'fieldname' => 'by_company_id[]', 'hide_new' => 'true'])
      

        



        </div> <!-- /.box-body-->
        <div class="box-footer text-right">
          <button type="submit" class="btn btn-success">
            <i class="fas fa-download icon-white" aria-hidden="true"></i>
            {{ trans('general.generate') }}
          </button>
        </div>
      </div> <!--/.box.box-default-->
    {{ Form::close() }}
  </div>
</div>

@stop

@section('moar_scripts')
  <script>

      $('.purchase-range .input-daterange').datepicker({
          clearBtn: true,
          todayHighlight: true,
          endDate: '0d',
          format: 'yyyy-mm-dd'
      });
      $('.checkout-range .input-daterange').datepicker({
          clearBtn: true,
          todayHighlight: true,
          endDate: '0d',
          format: 'yyyy-mm-dd'
      });

      $('.checkin-range .input-daterange').datepicker({
          clearBtn: true,
          todayHighlight: true,
          endDate: '0d',
          format: 'yyyy-mm-dd'
      });

      $('.expected_checkin-range .input-daterange').datepicker({
          clearBtn: true,
          todayHighlight: true,
          format: 'yyyy-mm-dd'
      });

      $('.last_audit-range .input-daterange').datepicker({
          clearBtn: true,
          todayHighlight: true,
          endDate:'0d',
          format: 'yyyy-mm-dd'
      });

      $('.next_audit-range .input-daterange').datepicker({
          clearBtn: true,
          todayHighlight: true,
          format: 'yyyy-mm-dd'
      });

      $("#checkAll").change(function () {
        $("input:checkbox").prop('checked', $(this).prop("checked"));
      });

  </script>
@stop
