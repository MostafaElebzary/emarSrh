

<link rel="stylesheet" href="{{asset('dashboard/dropify/dist/css/dropify.min.css')}}">



<form class="px-10" novalidate="novalidate" id="kt_form2"  method="post" action='{{url('Update_Owners')}}' enctype="multipart/form-data">
    <!--begin: Wizard Step 1-->
    @csrf
    <div class="form-group">
        <label>{{__('lang.name')}} </label>
        <input type="text" class="form-control form-control-solid" value="{{$User->name}}" name="name" required placeholder="{{__('lang.name')}}" >
        <input type="hidden" class="form-control form-control-solid" value="{{$User->id}}" name="id" required placeholder="{{__('lang.name')}}" >
    </div>

    <div class="form-group">
        <label>{{__('lang.phone')}} </label>
        <input type="text" class="form-control form-control-solid" value="{{$User->phone}}" name="phone" required placeholder="{{__('lang.phone')}}" >
    </div>
    <div class="form-group">
        <label>{{__('lang.id_num')}} </label>
        <input type="text" class="form-control form-control-solid" name="id_num"   value="{{$User->id_num}}" required placeholder="{{__('lang.id_num')}}" >
    </div>

    <div class="form-group">
        <label>{{__('lang.email')}} </label>
        <input type="email" class="form-control" name="email" value="{{$User->email}}"  >
    </div>


    <div class="form-group">
        <label>{{__('lang.owner_id_expire')}} </label>
        <input type="date" class="form-control" name="id_num_expired" value="{{$User->id_num_expired}}"   >
    </div>

    <div class="form-group">
        <label>{{__('lang.owner_id_source')}} </label>
        <input type="text" class="form-control" name="id_num_export" value="{{$User->id_num_export}}"   >
    </div>

    <div class="form-group">
        <label>{{__('lang.District')}} </label>
        <input type="text" class="form-control" name="district"   value="{{$User->district}}" >
    </div>
    <div class="form-group">
        <label>{{__('lang.owner_nationality')}} </label>
        <input type="text" class="form-control" name="nationality"   value="{{$User->nationality}}" >
    </div>
    <div class="form-group">
        <label>{{__('lang.tax_num')}} </label>
        <input type="text" class="form-control" name="tax_num"   value="{{$User->tax_num}}" >
    </div>
    <div class="form-group row">
        <label class="col-xl-3 col-lg-3 col-form-label">{{trans('lang.Image')}}</label>
        <div class="col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title"></h4>
                    <div class="controls">
                        <input type="file" id="input-file-now" class="dropify"  name="image" data-default-file="{{$User->image}}" data-validation-required-message="{{trans('word.This field is required')}}"/>
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

        //initHijrDatePickerDefaul
