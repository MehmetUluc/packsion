<!DOCTYPE html>
<html>

<!-- meta contains meta taga, css and fontawesome icons etc -->
@include('admin.common.meta')
<!-- ./end of meta -->

<body class=" hold-transition skin-blue sidebar-mini">
	<!-- wrapper -->
    <div class="wrapper">
    @if(request()->segment('5') != 'text')
   		<!-- header contains top navbar -->
        @include('admin.common.header')
        <!-- ./end of header -->
        
        <!-- left sidebar -->
        @include('admin.common.sidebar')
        <!-- ./end of left sidebar -->
    @endif
        <!-- dynamic content -->
        @yield('content')
        <!-- ./end of dynamic content -->
        
    @if(request()->segment('5') != 'text')    <!-- right sidebar -->
        @include('admin.common.controlsidebar')
        <!-- ./right sidebar -->
    	@include('admin.common.footer')
    @endif
    </div>
	<!-- ./wrapper -->
    @if(request()->segment('5') != 'text') 
	<!-- all js scripts including custom js -->
	@include('admin.common.scripts')
    <!-- ./end of js scripts -->

    @yield('script')
    @endif
    
	</body>
</html>
