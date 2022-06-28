@extends('sb-user/app')
 @section('content')
   <section id="subintro">
    @if  (session('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Warning!</strong> Best check yo self, you're not looking too good.
    </div>
    @endif
    @if  (session('error'))
    <div class="alert alert-error">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Error !</strong> {{session('error')}}
    </div>
    @endif
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Keranjang</h3>
              <p>
                Keranjang
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <div class="row">
        <div class="container">
            <table class="table table-bordered-les">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Pesanan</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>p</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ( $baskets as $basket )
                            <tr>
                                <td>{{ $basket->Customer->name }}</td>
                                    {{-- <td>{!! DNS2D::getBarcodeHTML($basket->Customer->name, 'QRCODE') !!}</td> --}}
                                <td>{{ $basket->Product->name }}</td>
                                <td class="card">
                                    <img src="{{ Storage::url('public/images/').$basket->Product->picture }}" alt="Image">
                                </td>
                                <td>{{ $basket->Product->price }}</td>
                                <form action="{{ route('booking.store', $basket->Product->id) }}" method="POST">
                                    @csrf
                                <td>
                                    <input type="number" name="quota" class="form-control form-sm">
                                </td>
                                <td>
                                        <input type="hidden" name="customer_id" class="form-control form-sm" value="{{ $basket->customer_id }}">
                                        <button class="btn btn-color" type="submit">Check Out</button>
                                </td>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
    {{-- @section('script')
        <script type="text/javascript">
            $(document).ready(function(){
                $('#check-all').click(function(event) {
                    if (this.checked) {
                        $(".checkBox").attr("checked", true);
                    } else {
                        $(".checkBox").attr("checked", false);
                    }
                });
            })
        </script> --}}

{{-- <script>
    $(document).ready(function(){

      $("button").click(function(){
        var dataCount = $('#curr_pair').val();
        var var_data = "";
                         $.ajax({
                             url: "{{ route('booking.store') }}",
                             type: 'POST',
                              data: ({  dataNewCount: dataCount }),
                              dataType: 'json',
                              success: function(data) {
                                  console.log(data);
                                  $("#customer_id").val(data[0]);
                                  $("#customer_id").val(data[1]);
                              }
                          });



                        $("#comments").load("{{ route('booking.store') }}", {
                            dataNewCount: dataCount
                            });




                        });

                        });



      </script> --}}

    {{-- @endsection --}}

  <!-- Footer
 ================================================== -->

 @endsection
