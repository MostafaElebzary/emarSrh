@extends('layout.layout')

@section('title')
    {{__('lang.Actions')}}
@endsection
@section('css')
    <link href="{{asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>

    <link rel="stylesheet" href="{{asset('dashboard/dropify/dist/css/dropify.min.css')}}">
    <style>
        .pac-container {a
        z-index: 100000 !important;
        }
    </style>
@endsection

@section('content')

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <!--begin::Container-->
        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Mobile Toggle-->
                    <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none"
                            id="kt_subheader_mobile_toggle">
                        <span></span>
                    </button>
                    <!--end::Mobile Toggle-->
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->

                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            {{--                            <li class="breadcrumb-item">--}}
                            {{--                                <a href="{{url('resources')}}" class="text-muted">{{trans('lang.HR')}}</a>--}}
                            {{--                            </li>--}}
                            {{--                            <li class="breadcrumb-item">--}}
                            {{--                                <a href="" class="text-muted">Profile</a>--}}
                            {{--                            </li>--}}

                            <li class="breadcrumb-item">
                                <h5 class="text-dark font-weight-bold my-1 mr-5 ">{{trans('lang.Actions')}}</h5>
                            </li>
                        </ul>

                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
            </div>
        </div>

        <div class="container">
            <!--begin::Card--><br><br><br>            <!--begin::Card-->
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-header flex-wrap py-3">
                    <div class="card-title">
                        <h3 class="card-label">{{__('lang.Actions')}}
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
{{--                        <button style="margin: 6px" type="button" data-toggle="modal" data-toggle="modal"--}}
{{--                                data-target="#kt_modal_5" class="btn btn-success font-weight-bolder">--}}
{{--                            &nbsp;&nbsp;<i class="flaticon2-magnifier-tool"></i>--}}

{{--                            {{__('lang.search')}}</button>--}}


{{--                        <button type="button" data-toggle="modal" data-toggle="modal" data-target="#kt_modal_4"--}}
{{--                                class="btn btn-primary font-weight-bolder">--}}
{{--            <span class="svg-icon svg-icon-md">--}}
{{--              <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->--}}
{{--              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"--}}
{{--                   height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--                  <rect x="0" y="0" width="24" height="24"/>--}}
{{--                  <circle fill="#000000" cx="9" cy="15" r="6"/>--}}
{{--                  <path--}}
{{--                      d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"--}}
{{--                      fill="#000000" opacity="0.3"/>--}}
{{--                </g>--}}
{{--              </svg>--}}
{{--                <!--end::Svg Icon-->--}}
{{--            </span> {{__('lang.Create')}}</button>--}}
                        &nbsp;&nbsp;
{{--                        <button id="delete" class="btn btn-danger font-weight-bolder"><span--}}
{{--                                class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\Trash.svg--><svg--}}
{{--                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--                    <rect x="0" y="0" width="24" height="24"/>--}}
{{--                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>--}}
{{--                    <path--}}
{{--                        d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z"--}}
{{--                        fill="#000000"/>--}}
{{--                </g>--}}
{{--            </svg><!--end::Svg Icon--></span>--}}
{{--                            {{__('lang.Delete')}}</button>--}}
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">

                    <!--begin: Datatable-->
                    <table class="table table-bordered table-hover table-checkable mt-10" id="kt_tdata">
                        <thead>
                        <tr>
                            <th style="display:none;">#</th>
                            <th class="headerr">#</th>
                            <th class="headerr">{{__('lang.date')}} </th>
                            <th class="headerr">{{__('lang.description_ar')}} </th>
                            <th class="headerr">{{__('lang.description_en')}} </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Users as $Key => $User)
                            <tr>

                                <td style="display:none;">{{$User->id}}</td>

                                <td>
                                    {{$Key + 1 }}
                                </td>
                                <td>{{\Carbon\Carbon::parse($User->updated_at)->format('Y-m-d')}}</td>
                                <td>{{$User->ar_description}}</td>
                                <td>{{$User->en_description}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-center mt-5">
                        <nav aria-label="Page navigation example">

                            @php
                                $paginator =$Users->appends(request()->input())->links()->paginator;
                                    if ($paginator->currentPage() < 2 ){
                                        $link = $paginator->currentPage();
                                    }else{
                                         $link = $paginator->currentPage() -1;
                                    }
                                    if($paginator->currentPage() == $paginator->lastPage()){
                                               $last_links = $paginator->currentPage();
                                    }else{
                                               $last_links = $paginator->currentPage() +1;

                                    }
                            @endphp
                            @if ($paginator->lastPage() > 1)
                                <ul class="pagination">
                                    <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }} page-item">
                                        <a class="page-link" href="{{ $paginator->url(1) }}">الاول </a>
                                    </li>
                                    @for ($i = $link; $i <= $last_links; $i++)
                                        <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }} page-item">
                                            <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }} page-item">
                                        <a class="page-link"
                                           href="{{ $paginator->url($paginator->lastPage()) }}">الاخير</a>
                                    </li>
                                </ul>
                            @endif

                        </nav>
                    </div>
                    <!--end: Datatable-->
                </div>

                {{--                <h3>اجمالي الموظفيين : @inject('AllUsers','App\Models\User') {{$AllUsers->count()}} </h3>--}}
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>

    <div class="modal fade" id="kt_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        {{__('lang.search')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form method="get" action="{{url('/AdvertisingSearch')}}">
                        <div class="col-xl-12">
                            <div class="kt-section__body">
                                <div class="form-group">
                                    <label>{{__('lang.name')}} </label>
                                    <input type="text" class="form-control form-control-solid" name="name"
                                           placeholder="{{__('lang.name')}}">
                                </div>

                                <div class="form-group">
                                    <label>{{__('lang.MainCategory')}} </label>
                                    <select class="form-control " name="main_category_id">
                                        <option value="0">الكل</option>
                                        @inject('Categories','App\Models\MainCategory')
                                        @foreach($Categories->all() as $data)
                                            <option value="{{$data->id}}">{{$data->title}}</option>
                                        @endforeach
                                    </select>
                                </div>


                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">{{__('lang.Jobs_Close')}}</button>
                            <button type="submit" class="btn btn-primary">{{__('lang.search')}}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="kt_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        {{__('lang.Users_Create')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form class="px-10" novalidate="novalidate" id="kt_form" method="post"
                          action="{{url('Create_Advertising')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>{{__('lang.name_ar')}} </label>
                            <input type="text" class="form-control form-control-solid" name="ar_title"
                                   placeholder="{{__('lang.name_ar')}}">
                        </div>
                        <div class="form-group">
                            <label>{{__('lang.name_en')}} </label>
                            <input type="text" class="form-control form-control-solid" name="en_title"
                                   placeholder="{{__('lang.name_en')}}">
                        </div>
                        <div class="form-group">
                            <label>{{__('lang.MainCategory')}} </label>
                            @inject('mainCategory','App\Models\MainCategory')
                            <select name="main_category_id" id="MainCategory" class="form-control">
                                @foreach($mainCategory->all() as $b)
                                    <option value="{{$b->id}}">{{$b->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>{{__('lang.SubCategory')}} </label>
                            <select name="sub_category_id" class="form-control" id="SubCategory">
                            </select>
                        </div>

                        <div class="form-group">
                            <label>{{__('lang.City')}} </label>
                            @inject('City','App\Models\City')
                            <select name="city_id" id="City" class="form-control">
                                @foreach($City->all() as $b)
                                    <option value="{{$b->id}}">{{$b->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>{{__('lang.District')}} </label>
                            <select name="district_id" class="form-control" id="district">

                            </select>
                        </div>
                        <div class="form-group">
                            <label>{{__('lang.active')}} </label>
                            <select name="is_active" class="form-control">
                                <option value="1">{{__('lang.active')}}</option>
                                <option value="0">{{__('lang.inActive')}}</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>{{__('lang.status')}} </label>
                            <select name="status" class="form-control">
                                <option value="1">{{__('lang.available')}}</option>
                                <option value="0">{{__('lang.unavailable')}}</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>{{__('lang.price')}} </label>
                            <input type="text" class="form-control form-control-solid" name="price" required
                                   placeholder="{{__('lang.price')}}">
                        </div>
                        <div class="form-group">
                            <label>{{__('lang.space')}} </label>
                            <input type="text" class="form-control form-control-solid" name="space" required
                                   placeholder="{{__('lang.space')}}">
                        </div>
                        <div class="form-group">
                            <label>{{__('lang.soom')}} </label>
                            <input type="text" class="form-control form-control-solid" name="soom" required
                                   placeholder="{{__('lang.soom')}}">
                        </div>
                        <div class="form-group">
                            <label>{{__('lang.peace_number')}} </label>
                            <input type="text" class="form-control form-control-solid" name="peace_number" required
                                   placeholder="{{__('lang.peace_number')}}">
                        </div>


                        <div class="form-group">
                            <label>{{__('lang.rooms_count')}} </label>
                            <input type="text" class="form-control form-control-solid" name="rooms_count" required
                                   placeholder="{{__('lang.rooms_count')}}">
                        </div>

                        <div class="form-group">
                            <label>{{__('lang.description_ar')}} </label>
                            <textarea rows="5" class="form-control" name="ar_description"></textarea>
                        </div>

                        <div class="form-group">
                            <label>{{__('lang.description_en')}} </label>
                            <textarea rows="5" class="form-control" name="en_description"></textarea>
                        </div>

                        <div class="form-group">
                            <label>@if(session('lang') == 'en')   Location@else  موقع الفرع على الخريطة @endif </label>
                            <input type="text" id="search_input" placeholder=" أبحث  بالمكان او اضغط على الخريطه"/>
                            <input type="hidden" id="information"/>
                            <div id="us1" style="width: 100%; height: 400px;"></div>

                        </div>
                    <?php


                    $lat = !empty(old('lat')) ? old('lat') : '24.69670448385797';
                    $lng = !empty(old('lng')) ? old('lng') : '46.690517596875';

                    ?>
                    <!--begin::Form Group-->

                        <input type="hidden" value="{{$lat}}" id="lat" name="lat">
                        <input type="hidden" value="{{$lng}}" id="lng" name="lng">

                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.image')}}</label>
                            <div class="col-lg-12 col-xl-12">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title"></h4>
                                        <div class="controls">
                                            <input type="file" required id="input-file-now" class="dropify" name="image"
                                                   required
                                                   data-validation-required-message="{{trans('word.This field is required')}}"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.Images')}}</label>
                            <div class="col-lg-12 col-xl-12">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title"></h4>
                                        <div class="controls">
                                            <input type="file" id="input-file-now" multiple class="dropify" name="ل[]"
                                                   required
                                                   data-validation-required-message="{{trans('word.This field is required')}}"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">{{__('lang.Close')}}</button>
                            <button type="submit" class="btn btn-primary">{{__('lang.save')}}</button>
                        </div>
                        <!--begin: Wizard Step 1-->
                        <!--end: Wizard Step 1-->
                        <!--begin: Wizard Step 2-->
                        <!--end: Wizard Step 2-->
                        <!--begin: Wizard Step 3-->
                        <!--end: Wizard Step 3-->
                        <!--begin: Wizard Actions-->
                        <!--end: Wizard Actions-->
                    </form>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade bs-edit-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content card card-outline-info">
                <div class="modal-header card-header">
                    <h3 class="modal-title" id="myLargeModalLabel">{{__('lang.Users_Edit')}}</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- /.modal -->

@section('js')
    <script src="{{asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/pages/crud/datatables/basic/basic.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/pages/crud/file-upload/image-input.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/pages/features/miscellaneous/sweetalert2.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/pages/features/miscellaneous/dropify.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/pages/crud/forms/widgets/select2.js')}}"></script>

    <script>
        //DataTable
        var table = $('#kt_tdata').DataTable({
            dom: 'Bfrtip',
            "ordering": false,
            buttons: [
                'copy', 'excel', 'print'
            ],
            @if(session('lang') != 'en')

            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Arabic.json"
            }
            @endif
        });

        $(document).ready(function () {

            $(".headerr").attr("style", 'font-weight: bold!important;');

        });

    </script>
    <!--begin::Page scripts(used by this page) -->
    <script type="text/javascript"
            src='https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyAIcQUxj9rT_a3_5GhMp-i6xVqMrtasqws&language=ar'></script>

    <script>

        if (document.getElementById('us1')) {
            var content;
            var latitude = 24.69670448385797;
            var longitude = 46.690517596875;
            var map;
            var marker;
            navigator.geolocation.getCurrentPosition(loadMap);

            function loadMap(location) {
                // if (location.coords) {
                //     latitude = location.coords.latitude;
                //     longitude = location.coords.longitude;
                // }
                var myLatlng = new google.maps.LatLng(latitude, longitude);

                var mapOptions = {
                    zoom: 12,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,

                };
                map = new google.maps.Map(document.getElementById("us1"), mapOptions);
                var oldMarker = new google.maps.Marker({
                    position: myLatlng,
                    map,
                });
                content = document.getElementById('information');

                function setMapOnAll(map) {
                    oldMarker.setMap(map);
                }

                google.maps.event.addListener(map, 'click', function (e) {
                    placeMarker(e.latLng);
                    setMapOnAll(null);
                });


                var input = document.getElementById('search_input');
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                var searchBox = new google.maps.places.SearchBox(input);

                google.maps.event.addListener(searchBox, 'places_changed', function () {
                    var places = searchBox.getPlaces();
                    placeMarker(places[0].geometry.location);
                    setMapOnAll(null);
                });


                marker = new google.maps.Marker({
                    map: map
                });


            }
        }

        function placeMarker(location) {
            marker.setPosition(location);
            map.panTo(location);
            //map.setCenter(location)
            content.innerHTML = "Lat: " + location.lat() + " / Long: " + location.lng();
            $("#lat").val(location.lat());
            $("#lng").val(location.lng());
            google.maps.event.addListener(marker, 'click', function (e) {
                new google.maps.InfoWindow({
                    content: "Lat: " + location.lat() + " / Long: " + location.lng()
                }).open(map, marker);

            });
        }

        $("#checker").click(function () {
            var items = document.getElementsByTagName("input");

            for (var i = 0; i < items.length; i++) {
                if (items[i].type == 'checkbox') {
                    if (items[i].checked == true) {
                        items[i].checked = false;
                    } else {
                        items[i].checked = true;
                    }
                }
            }

        });

        //Delete Row
        $("body").on("click", "#delete", function () {
            var dataList = [];
            dataList = $("#kt_datatable input:checkbox:checked").map(function () {
                return $(this).val();
            }).get();

            if (dataList.length > 0) {
                Swal.fire({
                    title: "{{trans('word.Are you sure?')}}",
                    text: "",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "{{trans('word.Yes, Sure it!')}}",
                    cancelButtonText: "{{trans('word.No')}}",
                    closeOnConfirm: false,
                    closeOnCancel: false
                }).then(function (result) {
                    if (result.value) {
                        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            url: '{{url("Delete_Language")}}',
                            type: "get",
                            data: {'id': dataList, _token: CSRF_TOKEN},
                            dataType: "JSON",
                            success: function (data) {
                                if (data.message == "Success") {
                                    $("#kt_datatable .selected").hide();
                                    @if( Request::segment(1) == "ar")
                                    $('#delete').text('حذف 0 سجل');
                                    @else
                                    $('#delete').text('Delete 0 row');
                                    @endif
                                    Swal.fire("{{trans('word.Deleted')}}", "{{trans('word.Message_Delete')}}", "success");
                                    location.reload();
                                } else {
                                    Swal.fire("{{trans('word.Sorry')}}", "{{trans('word.Message_Fail_Delete')}}", "error");
                                }
                            },
                            fail: function (xhrerrorThrown) {
                                Swal.fire("{{trans('word.Sorry')}}", "{{trans('word.Message_Fail_Delete')}}", "error");
                            }
                        });
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire("{{trans('word.Cancelled')}}", "{{trans('word.Message_Cancelled_Delete')}}", "error");
                    }
                });
            }
        });

        $(document).ready(function () {
            // Basic
            $('.dropify').dropify();

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function (event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function (event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function (event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function (e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });

        //End Delete Row
        $(".edit-Advert").click(function () {
            var id = $(this).data('id')
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "GET",
                url: "{{url('Edit_Language')}}",
                data: {"id": id},
                success: function (data) {
                    $(".bs-edit-modal-lg .modal-body").html(data)
                    $(".bs-edit-modal-lg").modal('show')
                    $(".bs-edit-modal-lg").on('hidden.bs.modal', function (e) {
                        //   $('.bs-edit-modal-lg').empty();
                        $('.bs-edit-modal-lg').hide();
                    })
                }
            })
        })

        $(".switchery-demo").click(function () {
            var id = $(this).data('id');
            console.log(id);
            $.ajax({
                type: "get",
                url: "{{url('UpdateStatusAdvertising')}}",
                data: {"id": id},
                success: function (data) {
                    Swal.fire({
                        icon: 'success',
                        title: "@if(Request::segment(1)=='ar')  نجاح @else success @endif",
                        text: "@if(Request::segment(1) == 'ar' ) تم التعديل بنجاح   @else Successfully changed @endif",
                        type: "success",
                        timer: 1000,
                        showConfirmButton: false
                    });


                }
            })
        })
        $(".switchery-demo1").click(function () {
            var id = $(this).data('id');
            console.log(id);
            $.ajax({
                type: "get",
                url: "{{url('UpdateFavoriteAdvertising')}}",
                data: {"id": id},
                success: function (data) {
                    Swal.fire({
                        icon: 'success',
                        title: "@if(Request::segment(1)=='ar')  نجاح @else success @endif",
                        text: "@if(Request::segment(1) == 'ar' ) تم التعديل بنجاح   @else Successfully changed @endif",
                        type: "success",
                        timer: 1000,
                        showConfirmButton: false
                    });


                }
            })
        })

    </script>

    <!--begin::Page scripts(used by this page) -->
    <script>

        $("#MainCategory").click(function () {
            var wahda = $(this).val();
            if (wahda != '') {

                $.get("{{ URL::to('/GetSubCategory')}}" + '/' + wahda, function ($data) {
                    console.log($data)
                    var outs = "";
                    $.each($data, function (name, id) {
                        outs += '<option value="' + id + '">' + name + '</option>'
                    });
                    $('#SubCategory').html(outs);


                });
            }
        });
        $("#City").click(function () {
            var wahda = $(this).val();

            if (wahda != '') {

                $.get("{{ URL::to('/GetDistricts')}}" + '/' + wahda, function ($data) {
                    console.log($data)

                    var outs = "";
                    $.each($data, function (name, id) {

                        outs += '<option value="' + id + '">' + name + '</option>'

                    });
                    $('#district').html(outs);


                });
            }
        });


        $('#kt_tdata tbody').on('click', 'tr', function () {
            if (event.ctrlKey) {
                $(this).toggleClass('selected');
                @if(session('lang') == 'en')
                $('#delete').text('Delete ' + table.rows('.selected').data().length + ' row');
                @else
                $('#delete').text('حذف ' + table.rows('.selected').data().length + ' سجل');
                @endif
            } else {
                var isselected = false
                var numSelected = table.rows('.selected').data().length
                if ($(this).hasClass('selected') && numSelected == 1) {
                    isselected = true
                }
                $('#myTable tbody tr').removeClass('selected');
                if (!isselected) {
                    $(this).toggleClass('selected');
                }
                @if(session('lang') == 'en')
                $('#delete').text('Delete ' + table.rows('.selected').data().length + ' row');
                @else
                $('#delete').text('حذف ' + table.rows('.selected').data().length + ' سجل');
                @endif            }
        });

        $('#kt_select2_101').select2({
            placeholder: ""
        });
        $('#kt_select2_11').select2({
            placeholder: ""
        });
        //Delete Row
        $("body").on("click", "#delete", function () {
            var dataList = [];
            $("#kt_tdata .selected").each(function (index) {
                dataList.push($(this).find('td:first').text())
            })

            if (dataList.length > 0) {
                Swal.fire({
                    title: "{{__('lang.warrning')}}",
                    text: "",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#f64e60",
                    confirmButtonText: "{{__('lang.btn_yes')}}",
                    cancelButtonText: "{{__('lang.btn_no')}}",
                    closeOnConfirm: false,
                    closeOnCancel: false
                }).then(function (result) {
                    if (result.value) {
                        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            url: '{{url("Delete_Advertising")}}',
                            type: "get",
                            data: {'id': dataList, _token: CSRF_TOKEN},
                            dataType: "JSON",
                            success: function (data) {
                                if (data.message == "Success") {
                                    $("#kt_datatable .selected").hide();
                                    @if(session('lang') == 'ar')

                                    $('#delete').text('حذف 0 سجل');
                                    @else
                                    $('#delete').text('Delete 0 row');
                                    @endif
                                    Swal.fire("{{__('lang.Success')}}", "{{__('lang.Success_text')}}", "success");
                                    location.reload();
                                } else {
                                    Swal.fire("{{__('lang.Sorry')}}", "{{__('lang.Message_Fail_Delete')}}", "error");
                                }
                            },
                            fail: function (xhrerrorThrown) {
                                Swal.fire("{{__('lang.Sorry')}}", "{{__('lang.Message_Fail_Delete')}}", "error");
                            }
                        });
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire("{{__('lang.Cancelled')}}", "{{__('lang.Message_Cancelled_Delete')}}", "error");
                    }
                });
            }
        });

        $(document).ready(function () {
            // Basic
            $('.dropify').dropify();

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function (event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function (event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function (event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function (e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });


        $(".edit-Advert").click(function () {
            var id = $(this).data('id')
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "GET",
                url: "{{url('Edit_Advertising')}}",
                data: {"id": id},
                success: function (data) {
                    $(".bs-edit-modal-lg .modal-body").html(data)
                    $(".bs-edit-modal-lg").modal('show')
                    $(".bs-edit-modal-lg").on('hidden.bs.modal', function (e) {
                        //   $('.bs-edit-modal-lg').empty();
                        $('.bs-edit-modal-lg').hide();
                    })
                }
            })
        })

        $(".switchery-demo").click(function () {
            var id = $(this).data('id')
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "get",
                url: "{{url('UpdateStatusAdvertising')}}",
                data: {"id": id, _token: CSRF_TOKEN},
                success: function (data) {
                    Swal.fire("@if(Request::segment(1) == 'ar' ) تم  @else Success @endif ", "@if(Request::segment(1) == 'ar' ) تم التعديل بنجاح   @else Successfully changed @endif", "success");

                }
            })
        })
    </script>

    <?php
    $message = session()->get("message");
    ?>

    @if( session()->has("message"))
        @if( $message == "Success")
            <script>
                Swal.fire({
                    icon: 'success',
                    title: "{{__('lang.Success')}}",
                    text: "{{__('lang.Success_text')}}",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });

            </script>
        @elseif ( $message == "Failed")
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: "{{__('lang.Sorry')}}",
                    text: "{{__('lang.operation_failed')}}",
                    type: "error",
                    timer: 2000,
                    showConfirmButton: false
                });
            </script>
        @endif

        @if( $message == "phone")
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: "{{__('lang.Sorry')}}",
                    text: "عفوا رقم الهاتف موجود بالفعل",
                    type: "error",
                    timer: 2000,
                    showConfirmButton: false
                });
            </script>
        @endif
        @if( $message == "email")
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: "{{__('lang.Sorry')}}",
                    text: "عفوا البريد الالكتروني موجود بالفعل",
                    type: "error",
                    timer: 2000,
                    showConfirmButton: false
                });
            </script>
        @endif
        @if( $message == "job_num")
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: "{{__('lang.Sorry')}}",
                    text: "عفوا رقم الوظيفة موجود بالفعل",
                    type: "error",
                    timer: 2000,
                    showConfirmButton: false
                });
            </script>
        @endif
        @if( $message == "contract_num")
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: "{{__('lang.Sorry')}}",
                    text: "عفوا رقم العقد موجود بالفعل",
                    type: "error",
                    timer: 2000,
                    showConfirmButton: false
                });
            </script>
        @endif
    @endif

@endsection

@endsection

