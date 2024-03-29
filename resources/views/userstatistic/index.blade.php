@extends('layouts.master')

@section('css')
    @if(session('lang')=='en')
        <!-- DataTables -->
        <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
              type="text/css"/>
        <link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet"
              type="text/css"/>
        <!-- Responsive datatable examples -->
        <link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
              type="text/css"/>

    @else
        <!-- DataTables -->
        <link href="{{ URL::asset('rtl/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
              type="text/css"/>
        <link href="{{ URL::asset('rtl/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet"
              type="text/css"/>
        <!-- Responsive datatable examples -->
        <link href="{{ URL::asset('rtl/assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
              type="text/css"/>

    @endif

@endsection

@section('breadcrumb')
    <!-- Page-Title -->
    <br>
    <div class="app-content content container-fluid">
        <div class="breadcrumb-wrapper col-xs-12">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"> {{trans('admin.userstatistics')}}
                </li>

            </ol>
        </div>
    </div>
    <!-- end page title end breadcrumb -->
@endsection

@section('content')


    @include('layouts.errors')




    <div class="row">


        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">
                    {{ Form::open( ['url' => ['userstatistics'],'method'=>'post'] ) }}
                    {{ csrf_field() }}
                    <div class="">
                        <div class="form-group col-sm-12 row">
                            <label for="example-text-input" class="col-sm-2">{{trans('admin.branchs')}}</label>

                            <div class="col-sm-10">

                                {{ Form::select('branch_id',App\Branch::pluck('name','id'),$branch_id
                             ,["class"=>"form-control branch_id " ,'placeholder'=>'كل الفروع']) }}

                            </div>
                        </div>
                        <div class="form-group col-sm-12 row">
                            <label for="example-text-input" class="col-sm-2">من تاريخ</label>

                            <div class="col-sm-10">
                                <input name="from" id="hijri-picker" class="form-control" type="text"
                                       value="{{old('from')}}"
                                       placeholder="من تاريخ">


                            </div>
                        </div>
                        <div class="form-group col-sm-12 row">
                            <label for="example-text-input" class="col-sm-2">الى تاريخ</label>

                            <div class="col-sm-10">
                                <input name="to" id="hijri-picker1" class="form-control" type="text"
                                       value="{{old('to')}}"
                                       placeholder="من تاريخ">


                            </div>
                        </div>
                    </div>
                    <div class="row">

                        {!! Form::submit( trans('admin.search') , ['class' => 'btn btn-info col-sm-6', 'name' => 'submitbutton', 'value' => 'search'])!!}
                        {!! Form::submit( trans('admin.inexcel'), ['class' => 'btn btn-success col-sm-6', 'name' => 'submitbutton', 'value' => 'inexcel'])!!}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    <div class="row">


        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="card-header" style="text-align: center;">
                        <strong>سندات القبض</strong>
                    </div>

                    <table id="datatable" class="table table-striped  table-bordered dt-responsive nowrap"
                           cellspacing="0" width="100%">
                        <thead style="font-family: Cairo;font-size: 18px;">
                        <tr style='text-align:center; font-family: Cairo;font-size: 18px;'>
                            <th>#</th>
                            <th>{{trans('admin.username')}}</th>
                            <th>{{trans('admin.countReciept')}}</th>
                            <th> اجمالى المبالغ بالضريبه</th>
                            <th>اجمالى المبالغ بدون الضريبه</th>
                            <th>الضريبه</th>

                        </tr>
                        </thead>


                        <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($users as $key=> $data)

                            <tr style='text-align:center'>
                                <td>{{$i}}</td>
                                <td>{{$data->name}}</td>
                                @if($from ==null || $to == null)
                                    <td>{{$data->Reciept->where('type', 'قبض')->count()}}</td>
                                    <td>{{$data->Reciept->where('type', 'قبض')->sum('amount')}}</td>
                                    <td>{{$data->Reciept->where('type', 'قبض')->sum('total')}}</td>
                                    <td>{{$data->Reciept->where('type', 'قبض')->sum('amount') - $data->Reciept->where('type', 'قبض')->sum('total')}}</td>
                                @else
                                    <td>{{$data->Reciept->where('type', 'قبض')->whereBetween('date', [$from, $to])->count()}}</td>
                                    <td>{{$data->Reciept->where('type', 'قبض')->whereBetween('date', [$from, $to])->sum('amount')}}</td>
                                    <td>{{$data->Reciept->where('type', 'قبض')->whereBetween('date', [$from, $to])->sum('total')}}</td>
                                    <td>{{$data->Reciept->where('type', 'قبض')->whereBetween('date', [$from, $to])->sum('amount') - $data->Reciept->where('type', 'قبض')->whereBetween('date', [$from, $to])->sum('total')}}</td>


                                @endif
                            </tr>

                            @php
                                $i++;
                            @endphp

                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


    <div class="row">


        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="card-header" style="text-align: center;">
                        <p>اجمالى تحصيل كل الموظفين بالضريبه </p>
                        <strong>{{ $reciept}}</strong>
                    </div>
                    <div class="card-header" style="text-align: center;">
                        <p>اجمالى تحصيل كل الموظفين بدون ضريبة </p>
                        <strong>{{ $reciept_total}}</strong>
                    </div>
                    <div class="card-header" style="text-align: center;">
                        <p>اجمالى ضريبه </p>
                        <strong>{{$reciept - $reciept_total}}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">


        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="card-header" style="text-align: center;">
                        <strong>سندات الصرف</strong>
                    </div>

                    <table id="datatable" class="table table-striped  table-bordered dt-responsive nowrap"
                           cellspacing="0" width="100%">
                        <thead style="font-family: Cairo;font-size: 18px;">
                        <tr style='text-align:center; font-family: Cairo;font-size: 18px;'>
                            <th>#</th>
                            <th>{{trans('admin.username')}}</th>
                            <th>{{trans('admin.countReciept')}}</th>
                            <th> اجمالى المبالغ بالضريبه</th>
                            <th>اجمالى المبالغ بدون الضريبه</th>
                            <th>الضريبه</th>
                        </tr>
                        </thead>


                        <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($users as $key=> $data)

                            <tr style='text-align:center'>
                                <td>{{$i}}</td>
                                <td>{{$data->name}}</td>
                                @if($from ==null || $to == null)
                                    <td>{{$data->Reciept->where('type', 'صرف')->count()}}</td>
                                    <td>{{$data->Reciept->where('type', 'صرف')->sum('amount')}}</td>
                                    <td>{{$data->Reciept->where('type', 'صرف')->sum('total')}}</td>
                                    <td>{{$data->Reciept->where('type', 'صرف')->sum('amount') - $data->Reciept->where('type', 'صرف')->sum('total')}}</td>
                                @else
                                    <td>{{$data->Reciept->where('type', 'صرف')->whereBetween('date', [$from, $to])->count()}}</td>
                                    <td>{{$data->Reciept->where('type', 'صرف')->whereBetween('date', [$from, $to])->sum('amount')}}</td>
                                    <td>{{$data->Reciept->where('type', 'صرف')->whereBetween('date', [$from, $to])->sum('total')}}</td>
                                    <td>{{$data->Reciept->where('type', 'صرف')->whereBetween('date', [$from, $to])->sum('amount') - $data->Reciept->where('type', 'صرف')->whereBetween('date', [$from, $to])->sum('total')}}</td>


                                @endif


                            </tr>

                            @php
                                $i++;
                            @endphp

                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>

    <div class="row">


        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="card-header" style="text-align: center;">
                        <p>اجمالى صرف كل الموظفين بالضريبه </p>
                        <strong>{{ $reciept_out}}</strong>
                    </div>
                    <div class="card-header" style="text-align: center;">
                        <p>اجمالى صرف كل الموظفين بدون ضريبة </p>
                        <strong>{{ $reciept_total_out}}</strong>
                    </div>
                    <div class="card-header" style="text-align: center;">
                        <p>اجمالى ضريبه </p>
                        <strong>{{$reciept_out - $reciept_total_out}}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Required datatable js -->
    <script type="text/javascript">


        $(function () {

            initDefault();

        });

        function initDefault() {
            $("#hijri-picker").hijriDatePicker({
                hijri: true,
                showSwitcher: false
            });
            $("#hijri-picker1").hijriDatePicker({
                hijri: true,
                showSwitcher: false
            });
        }


    </script>
    <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ URL::asset('assets/pages/datatables.init.js') }}"></script>
@endsection
