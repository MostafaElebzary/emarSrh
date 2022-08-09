<link rel="stylesheet" href="{{asset('dashboard/dropify/dist/css/dropify.min.css')}}">



<form class="px-10" novalidate="novalidate" id="kt_form2"  method="post" action='{{url('Update_Catgories')}}' enctype="multipart/form-data">
    <!--begin: Wizard Step 1-->
    @csrf
    <div class="form-group">
        <label>{{__('lang.name_ar')}} </label>
        <input type="text" class="form-control form-control-solid"  value="{{$User->ar_title}}" name="ar_title" required placeholder="{{__('lang.name_ar')}}" >
        <input type="hidden" class="form-control form-control-solid"  value="{{$User->id}}" name="id" required placeholder="{{__('lang.name_ar')}}" >
    </div>
    <div class="form-group">
        <label>{{__('lang.name_en')}} </label>
        <input type="text" class="form-control form-control-solid" value="{{$User->en_title}}"  name="en_title" required placeholder="{{__('lang.name_en')}}" >
    </div>
    <div class="form-group">
        <label>{{__('lang.active')}} </label>
        <select name="is_visible" class="form-control">
            <option   @if($User->is_visible == 1) selected @endif value="0">{{__('lang.inActive')}}</option>
            <option @if($User->is_visible == 1) selected @endif value="1">{{__('lang.active')}}</option>
        </select>
    </div>

    <div class="form-group row">
        <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.image')}}</label>
        <div class="col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title"></h4>
                    <div class="controls">
                        <input type="file" id="input-file-now" class="dropify"  data-default-file="{{$User->image}}" name="image" required data-validation-required-message="{{trans('word.This field is required')}}"/>
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


<script src="{{asset('dashboard/assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
<script src="{{asset('dashboard/assets/js/pages/features/miscellaneous/dropify.min.js')}}"></script>

<!--begin::Page scripts(used by this page) -->
<script>
    $('.iconSelected2').on('click , change',function () {
        var value = $(this).val();

        $('#Icon2').val(value);
    })
    $('#kt_select4').select2({
        placeholder: ""
    });
    $('#kt_select5').select2({
        placeholder: ""
    });
</script>
<!--begin::Page scripts(used by this page) -->
<script type="text/javascript">
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });


    $(function () {

        initHijrDatePicker();

        //initHijrDatePickerDefault();

        $('.disable-date').hijriDatePicker({

            minDate:"2020-01-01",
            maxDate:"2021-01-01",
            viewMode:"years",
            hijri:true,
            debug:true
        });

    });

    function initHijrDatePicker() {

        $(".hijri-date-input").hijriDatePicker({
            locale: "ar-sa",
            format: "DD-MM-YYYY",
            hijriFormat:"iYYYY-iMM-iDD",
            dayViewHeaderFormat: "MMMM YYYY",
            hijriDayViewHeaderFormat: "iMMMM iYYYY",
            showSwitcher: true,
            allowInputToggle: true,
            showTodayButton: false,
            useCurrent: true,
            isRTL: false,
            viewMode:'months',
            keepOpen: false,
            hijri: false,
            debug: true,
            showClear: true,
            showTodayButton: true,
            showClose: true
        });
    }

    function initHijrDatePickerDefault() {

        $(".hijri-date-input").hijriDatePicker();
    }


</script>
