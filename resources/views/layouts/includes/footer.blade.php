<!-- BEGIN VENDOR JS-->
<script src="{{ asset('assets/backend/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{ asset('assets/backend/vendors/js/editors/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{ asset('assets/backend/js/core/app-menu.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/core/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/scripts/customizer.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/scripts/pages/timeline.js') }}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{ asset('assets/backend/js/scripts/editors/editor-ckeditor.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/vendors/js/extensions/datedropper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/vendors/js/extensions/timedropper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/scripts/extensions/date-time-dropper.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script  type="text/javascript" src="{{ asset('assets/backend/vendors/js/extensions/jquery.steps.min.js') }}"></script>
<script  type="text/javascript" src="{{ asset('assets/backend/js/scripts/forms/wizard-steps.js') }}"></script>
<script  type="text/javascript" src="{{ asset('assets/backend/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
<script  type="text/javascript" src="{{ asset('assets/backend/js/scripts/forms/form-repeater.js') }}"></script>
<script>
    $(function() {
    CKEDITOR.replace( '.ckeditor' );
        // setup the repeater
        $('.repeater').repeater();
        //get the values of the inputs as a formatted object
        $('.repeater').repeaterVal();
        $("#wizard").steps();
    });
</script>
@stack('js')


@if(Request::segment(3) !== null && Request::segment(3) !== 'user')
    <script>
        // This For Loading The Table
        $(document).ready(function() {
            var url = "{{ route('dashboard.'. Request::segment(3) .'.index') }}",
                search  = $('input[name=search]').val(),
                column  = $('.columns-names').val(),
                records = $('.records').val();


            function getRows(url, search, column, pagination) {
                $.ajax({
                    url: url,
                    type: "get",
                    data: {
                        "search":search, "column":column ,"records":records
                    },
                    success: function(data, textStatus, jqXHR) {
                        $('table #dataRows').html(data);
                    },
                });
            }
            // To Get The Rows Before The Page Loading
            getRows(url, search, column, records)

            $('input[name=search]').keyup(function(e) {
                if ( (e.keyCode >= 48 && e.keyCode <= 90) || (search != '' && e.keyCode == 8) ) {
                    search = $(this).val();
                    getRows(url, search, column, records);
                }
            });

            $("body").on("change", '.columns-names', function() {
                column = $(this).val();
                getRows(url, search, column, records)
            });

            $("body").on("change", '.records', function() {
                records = $(this).val();
                getRows(url, search, column, records)
            });

            $("body").on("click", ".pagination a", function(e) {
                e.preventDefault();
                var page = "?" + $(this).attr('href').split("?").pop();
                getRows(url+page, search, column, records);
            });
        });    // End of Loading The Table

        // This For Delete Recordes
        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            var rel = confirm('Ary you sure to delete this recourd?');
            if(rel) {
                $(this).closest('form').submit();
            }
        })   // End of Deleted
    </script>
@endif
</body>
</html>
