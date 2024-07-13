 {{-- yajra data table --}}
 <script src="{{ asset('dashboard/dataTable/dataTables.min.js') }}"></script>
 <script src="{{ asset('dashboard/dataTable/tables.js') }}"></script>


 <!-- Plugin scripts -->
 <script src="{{ asset('dashboard') }}/demos/vendors/bundle.js"></script>


 <!-- Tagsinput -->
 <script src="{{ asset('dashboard') }}/demos/vendors/tagsinput/bootstrap-tagsinput.js"></script>
 <script src="{{ asset('dashboard') }}/demos/assets/js/examples/tagsinput.js"></script>

 <!-- quill -->
 <script src="{{ asset('dashboard') }}/demos/vendors/quill/quill.js"></script>

 <!-- Clockpicker -->
 <script src="{{ asset('dashboard') }}/demos/vendors/clockpicker/bootstrap-clockpicker.min.js"></script>
 <script src="{{ asset('dashboard') }}/demos/assets/js/examples/clockpicker.js"></script>

 <!-- Select2 -->
 <script src="{{ asset('dashboard') }}/demos/vendors/select2/js/select2.min.js"></script>
 <script src="{{ asset('dashboard') }}/demos/assets/js/examples/select2.js"></script>

 <!-- Datepicker -->
 <script src="{{ asset('dashboard') }}/demos/vendors/datepicker/daterangepicker.js"></script>
 <script src="{{ asset('dashboard') }}/demos/assets/js/examples/datepicker.js"></script>

 <script>
     new Quill('.reply-email-quill-editor', {
         modules: {
             toolbar: ".reply-email-quill-toolbar"
         },
         placeholder: "Type something... ",
         theme: "snow"
     });

     $(function() {
         $(document).on('click', '.app-block .app-content .app-action .action-left input[type="checkbox"]',
             function() {
                 $('.app-lists ul li input[type="checkbox"]').prop('checked', $(this).prop('checked'));
                 if ($(this).prop('checked')) {
                     $('.app-lists ul li input[type="checkbox"]').closest('li').addClass('active');
                 } else {
                     $('.app-lists ul li input[type="checkbox"]').closest('li').removeClass('active');
                 }
             });

         $(document).on('click', '.app-lists ul li input[type="checkbox"]', function() {
             if ($(this).prop('checked')) {
                 $(this).closest('li').addClass('active');
             } else {
                 $(this).closest('li').removeClass('active');
             }
         });

         $(document).on('click',
             '.app-block .app-content .app-content-body .app-lists ul.list-group li.list-group-item',
             function(e) {
                 if (!$(e.target).is('.custom-control, .custom-control *, a, a *')) {
                     $('.app-detail').addClass('show').one(
                         'webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',
                         function() {
                             $('.app-block .app-content .app-content-body .app-detail .app-detail-article')
                                 .niceScroll().resize();
                         });
                 }
             });

         $(document).on('click', 'a.app-detail-close-button', function() {
             $('.app-detail').removeClass('show');
             return false;
         });

         $(document).on('click', '.app-sidebar-menu-button', function() {
             $('.app-block .app-sidebar, .app-content-overlay').addClass('show');
             // $('.app-block .app-sidebar .app-sidebar-menu').niceScroll().resize();
             return false;
         });

         $(document).on('click', '.app-content-overlay', function() {
             $('.app-block .app-sidebar, .app-content-overlay').removeClass('show');
             return false;
         });

         $('.app-block .app-content .app-content-body .app-lists ul').sortable({
             axis: "y",
             cursor: "move",
             handle: '.app-sortable-handle'
         }).disableSelection();
     });
 </script>
 <script src="{{ asset('dashboard') }}/demos/vendors/dataTable/datatables.min.js"></script>
 <script src="{{ asset('dashboard') }}/demos/assets/js/app.min.js"></script>
 @yield('script')
