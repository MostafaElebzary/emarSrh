


<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
 <script src="{{ URL::asset('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ URL::asset('assets/js/waves.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.scrollTo.min.js') }}"></script>
<!-- hijri  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
<script src="{{url('assets/hijri/js/bootstrap-hijri-datetimepickermin.js')}}"></script>
<script>
    // $('#language-list').on('click',function () {
    //     $('.language-switch').css('visibility','visible');
    //     $('.profile-dropdown').css('visibility','hidden');
    // })
    window.addEventListener('click', function(e){
        if (document.getElementById('language-list').contains(e.target)){
            $('.language-switch').css('visibility','visible');
            $('.profile-dropdown').css('visibility','hidden');
        } else if (document.getElementById('notification-list').contains(e.target)){
            $('.profile-dropdown').css('visibility','visible');
            $('.language-switch').css('visibility','hidden');
        }else{
            $('.language-switch').css('visibility','hidden');
            $('.profile-dropdown').css('visibility','hidden');
        }
    });
</script>

@yield('script')

<!-- App js -->

<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@yield('script-bottom')


