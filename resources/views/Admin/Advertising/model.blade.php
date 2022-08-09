@extends('layout.layout')

@section('title')
    {{__('lang.AdvertisingSettings')}}
@endsection
@section('css')
    <link href="{{asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>

    <link rel="stylesheet" href="{{asset('dashboard/dropify/dist/css/dropify.min.css')}}">
    <style>
        .pac-container {
            a z-index: 100000 !important;
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
                                <h5 class="text-dark font-weight-bold my-1 mr-5 ">{{trans('lang.AdvertisingSettings')}}</h5>
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
                        <h3 class="card-label">تعديل </h3>
                    </div>
                </div>
                    <link rel="stylesheet" href="{{asset('dashboard/dropify/dist/css/dropify.min.css')}}">


<form class="px-10" novalidate="novalidate" id="kt_form2" method="post" action="{{url('Update_Advertising')}}"
      enctype="multipart/form-data">
    <!--begin: Wizard Step 1-->
    @csrf

    <div class="form-group">
        <label>{{__('lang.name_ar')}} <span style="color: red"> *</span>  </label>
        <input type="text" class="form-control form-control-solid" name="ar_title" value="{{$User->ar_title}}"
               placeholder="{{__('lang.name_ar')}}">
        <input type="hidden" class="form-control form-control-solid" name="id" value="{{$User->id}}"
               placeholder="{{__('lang.name_ar')}}">
    </div>
    <div class="form-group">
        <label>{{__('lang.name_en')}} <span style="color: red"> *</span>   </label>
        <input type="text" class="form-control form-control-solid" name="en_title" value="{{$User->en_title}}"
               placeholder="{{__('lang.name_en')}}">
    </div>

    <div class="form-group">
        <label>{{__('lang.Owner')}} </label>
        @inject('owner','App\Models\Owner')
        <select name="owner_id" id="owner" class="form-control">
            @foreach($owner->all() as $b)
                <option @if($User->owner_id == $b->id) selected @endif  value="{{$b->id}}">{{$b->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>{{__('lang.MainCategory')}} <span style="color: red"> *</span>   </label>
        @inject('mainCategory','App\Models\MainCategory')
        <select name="main_category_id" id="MainCategory2" class="form-control">
            @foreach($mainCategory->all() as $b)
                <option @if($User->main_category_id == $b->id) selected @endif value="{{$b->id}}">{{$b->title}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>{{__('lang.SubCategory')}}  <span style="color: red"> *</span>  </label>
        <select name="sub_category_id" class="form-control" id="SubCategory2">
            @inject('subCat','App\Models\SubCategory')
            @foreach($subCat->where('main_category_id',$User->main_category_id)->get() as $sub)
                <option @if($User->sub_category_id == $sub->id) selected
                        @endif  value="{{$sub->id}}">{{$sub->title}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>{{__('lang.City')}}  <span style="color: red"> *</span>  </label>
        @inject('City','App\Models\City')
        <select name="city_id" id="City2" class="form-control">
            @foreach($City->all() as $b)
                <option @if($User->city_id == $b->id) selected @endif  value="{{$b->id}}">{{$b->title}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>{{__('lang.District')}} <span style="color: red"> *</span>   </label>
        <select name="district_id" class="form-control" id="district2">
            @inject('District','App\Models\District')
            @foreach($District->where('city_id',$User->city_id)->get() as $sub)
                <option @if($User->district_id == $sub->id) selected
                        @endif  value="{{$sub->id}}">{{$sub->title}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>{{__('lang.district_area')}}</label>
        <select name="district_area" class="form-control" required>
            <option @if($User->district_area == 'east') selected @endif value="east">{{__('lang.east')}}</option>
            <option  @if($User->district_area == 'west') selected @endif value="west">{{__('lang.west')}}</option>
            <option  @if($User->district_area == 'north') selected @endif value="north">{{__('lang.north')}}</option>
            <option   @if($User->district_area == 'south') selected @endifvalue="south">{{__('lang.south')}}</option>
        </select>
    </div>

    <div class="form-group">
        <label>{{__('lang.favorite')}} </label>
        <select name="is_favorite" class="form-control">
            <option @if($User->is_favorite == 1) selected @endif value="1">{{__('lang.active')}}</option>
            <option @if($User->is_favorite == 0) selected @endif value="0">{{__('lang.inActive')}}</option>
        </select>
    </div>
    <div class="form-group">
        <label>{{__('lang.active')}} </label>
        <select name="is_active" class="form-control">
            <option @if($User->is_visible == 1) selected @endif value="1">{{__('lang.active')}}</option>
            <option @if($User->is_visible == 0) selected @endif value="0">{{__('lang.inActive')}}</option>
        </select>
    </div>
    <div class="form-group">
        <label>{{__('lang.status')}} </label>
        <select name="status" class="form-control">
            <option value="1" @if($User->status == 1) selected @endif >{{__('lang.available')}}</option>
            <option value="0" @if($User->status == 0) selected @endif >{{__('lang.unavailable')}}</option>
        </select>
    </div>
    <div class="form-group">
        <label>{{__('lang.price')}} </label>
        <input type="text" class="form-control form-control-solid" value="{{$User->price}}" name="price" required
               placeholder="{{__('lang.price')}}">
    </div>
    <div class="form-group">
        <label>{{__('lang.space')}} </label>
        <input type="text" class="form-control form-control-solid" value="{{$User->space}}" name="space" required
               placeholder="{{__('lang.space')}}">
    </div>
    <div class="form-group">
        <label>{{__('lang.soom')}} </label>
        <input type="text" class="form-control form-control-solid" value="{{$User->soom}}" name="soom" required
               placeholder="{{__('lang.soom')}}">
    </div>
    <div class="form-group">
        <label>{{__('lang.peace_number')}} </label>
        <input type="text" class="form-control form-control-solid" value="{{$User->peace_number}}" name="peace_number"
               required placeholder="{{__('lang.peace_number')}}">
    </div>
    <div class="form-group">
        <label>{{__('lang.plate_number')}} </label>
        <input type="text" class="form-control form-control-solid" value="{{$User->plate_number}}"  name="plate_number"
               placeholder="{{__('lang.plate_number')}}">
    </div>

{{--    <div class="form-group">--}}
{{--        <label>{{__('lang.rooms_count')}} </label>--}}
{{--        <input type="text" class="form-control form-control-solid" value="{{$User->rooms_count}}" name="rooms_count"--}}
{{--               required placeholder="{{__('lang.rooms_count')}}">--}}
{{--    </div>--}}

    <div class="form-group">
        <label>{{__('lang.video_link')}} </label>
        <input type="text" class="form-control form-control-solid" value="{{$User->video_link}}" name="video_link" required
               placeholder="{{__('lang.video_link')}}">
    </div>
    <div class="form-group">
        <label>{{__('lang.build_area')}} </label>
        <input type="text" class="form-control form-control-solid" value="{{$User->build_area}}" name="build_area" required
               placeholder="{{__('lang.build_area')}}">
    </div>
    <div class="form-group">
        <label>{{__('lang.build_age')}} </label>
        <input type="text" class="form-control form-control-solid" value="{{$User->build_age}}" name="build_age" required
               placeholder="{{__('lang.build_age')}}">
    </div>
    <div class="form-group">
        <label>{{__('lang.key')}} {{__('lang.Private')}} </label>
        <input type="text" class="form-control form-control-solid" value="{{$User->key}}"  name="key" required
               placeholder="{{__('lang.key')}}">
    </div>

    <div class="form-group">
        <label>{{__('lang.information')}} {{__('lang.Private')}} </label>
        <textarea rows="5" class="form-control" name="information">{{$User->information}}</textarea>
    </div>


    <div class="form-group">
        <label>{{__('lang.description_ar')}} </label>
        <textarea rows="5" class="form-control" value=""  id="editor5" name="ar_description">{{$User->ar_description}}</textarea>
    </div>

    <div class="form-group">
        <label>{{__('lang.description_en')}} </label>
        <textarea rows="5" class="form-control" value=""  id="editor6" name="en_description">{{$User->en_description}}</textarea>
    </div>

    <div class="form-group">
        <label>@if(session('lang') == 'en')   Location@else  موقع الفرع على الخريطة @endif </label>
        <input type="text" id="search_input2" placeholder=" أبحث  بالمكان او اضغط على الخريطه"/>
        <input type="hidden" id="information2"/>
        <div id="us2" style="width: 100%; height: 400px;"></div>

    </div>
<?php


$lat = !empty($User->lat) ? $User->lat : '24.69670448385797';
$lng = !empty($User->lng) ? $User->lng : '46.690517596875';

?>
<!--begin::Form Group-->

    <input type="hidden" value="{{$lat}}" id="lat2" name="lat">
    <input type="hidden" value="{{$lng}}" id="lng2" name="lng">
    <div class="form-group">
        <label>{{__('lang.activelocation')}} </label>
        <select name="active_location" class="form-control">
            <option @if($User->active_location == 'active')  selected @endif value="active">{{__('lang.active')}}</option>
            <option @if($User->active_location == 'inactive')  selected @endif  value="inactive">{{__('lang.inActive')}}</option>
        </select>
    </div>
    <div class="form-group row">
        <label class="col-xl-3 col-lg-3 col-form-label">@if(session('lang') == 'en')   image @else
                الصورة @endif <span style="color: red"> *</span>  </label>
        <div class="col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title"></h4>
                    <div class="controls">
                        <input type="file" id="input-file-now" class="dropify" name="image"
                               data-default-file="{{$User->image}}" required
                               data-validation-required-message="{{trans('word.This field is required')}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end: Wizard Actions-->
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('lang.Jobs_Close')}}</button>
        <button type="submit" class="btn btn-primary">{{__('lang.save')}}</button>
    </div>
</form>
            </div>
        </div>
    </div>

@endsection
@section('js')

    <script src="{{asset('dashboard/assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
<script src="{{asset('dashboard/assets/js/pages/features/miscellaneous/dropify.min.js')}}"></script>
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor5' );
    CKEDITOR.replace( 'editor6' );
</script>

<!--begin::Page scripts(used by this page) -->
<script>
    $('#kt_select4').select2({
        placeholder: ""
    });
    $('#kt_select5').select2({
        placeholder: ""
    });
</script>

    <script type="text/javascript"
            src='https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyAIcQUxj9rT_a3_5GhMp-i6xVqMrtasqws&language=ar'></script>
    <script src="{{asset('dashboard/locationpicker.jquery.js')}}"></script>


    <!--begin::Page scripts(used by this page) -->
<script>

    if (document.getElementById('us2')) {
        var content;
            @if($User->lat== null && $User->lng == null)
        var latitude = 24.69670448385797;
        var longitude = 46.690517596875;
            @else
        var latitude = {{$User->lat}};
        var longitude = {{$User->lng}};
            @endif
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
            map = new google.maps.Map(document.getElementById("us2"), mapOptions);
            var oldMarker = new google.maps.Marker({
                position: myLatlng,
                map,
            });
            content = document.getElementById('information2');

            function setMapOnAll(map) {
                oldMarker.setMap(map);
            }

            google.maps.event.addListener(map, 'click', function (e) {
                placeMarker(e.latLng);
                setMapOnAll(null);
            });


            var input = document.getElementById('search_input2');
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
        $("#lat2").val(location.lat());
        $("#lng2").val(location.lng());
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
            url: "{{url('UpdateStatusUser')}}",
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

<script type="text/javascript">
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
    $("#MainCategory2").click(function () {
        var wahda = $(this).val();

        if (wahda != '') {

            $.get("{{ URL::to('/GetSubCategory')}}" + '/' + wahda, function ($data) {
                console.log($data)

                var outs = "";
                $.each($data, function (name, id) {

                    outs += '<option value="' + id + '">' + name + '</option>'

                });
                $('#SubCategory2').html(outs);


            });
        }
    });
    $("#City2").click(function () {
        var wahda = $(this).val();

        if (wahda != '') {

            $.get("{{ URL::to('/GetDistricts')}}" + '/' + wahda, function ($data) {
                console.log($data)

                var outs = "";
                $.each($data, function (name, id) {

                    outs += '<option value="' + id + '">' + name + '</option>'

                });
                $('#district2').html(outs);


            });
        }
    });


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
