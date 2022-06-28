
<!DOCTYPE html>
<html lang="en">

    @include('sb-client/head')

<body data-spy="scroll" data-target=".bs-docs-sidebar">


    @include('sb-client/navbar')

  <!-- Subhead
================================================== -->

{{-- @include('sb-client/header') --}}


@yield('content')
  <!-- Footer
 ================================================== -->
 @include('sb-client/footer')

  <!-- JavaScript Library Files -->
  @include('sb-client/javascript')

</body>

</html>
