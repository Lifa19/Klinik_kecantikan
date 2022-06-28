
<!DOCTYPE html>
<html lang="en">
    @if  (session('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Warning!</strong> Best check yo self, you're not looking too good.
        </div>
    @endif
    @if  (session('error'))
        <div class="alert alert-error">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Warning!</strong> Best check yo self, you're not looking too good.
        </div>
    @endif
    @include('sb-user/head')

<body data-spy="scroll" data-target=".bs-docs-sidebar">


    @include('sb-user/navbar')

  <!-- Subhead
================================================== -->

{{-- @include('sb-user/header') --}}


@yield('content')
  <!-- Footer
 ================================================== -->
 @include('sb-user/footer')

  <!-- JavaScript Library Files -->
  @include('sb-user/javascript')

</body>

</html>
