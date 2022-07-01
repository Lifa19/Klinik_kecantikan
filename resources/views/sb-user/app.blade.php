
<!DOCTYPE html>
<html lang="en">

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
