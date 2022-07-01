@extends('sb-user/app')
 @section('content')
   <section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Payment</h3>
              <p>
                Payment
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <div class="row">
        <div class="container">
            <h6>Cara Pembayaran 1 :</h6>
            <ol>
                <li>Melakukan Pembayaran ke Kredensial yang Tersedia Pada Table dibawah.</li>
                <li>ScreenShot atau Foto Bukti Transaksi.</li>
                <li>Upload Bukti Transaksi ke Form <b>Upload Bukti Pembayaran</b></li>
            </ol>
            <h6>Cara Pembayaran 2 :</h6>
            <ol>
                <li>Menekan Tombol <b>BAYAR DI TEMPAT</b>.</li>
                <li>Datang Ke Klinik SA Beauty Center.</li>
                <li>Melakukan Pembayaran Kepada Customer Service.</li>
            </ol>
            <br><br>
            <h6>Daftar Metode Pembayaran :</h6>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Penyedia</th>
                        <th>Kredensial Akun</th>
                        <th>Atas Nama Akun</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($channel as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->credential }}</td>
                            <td>{{ $item->atas_nama }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Qty</th>
                        <th>Total Bayar</th>
                        <th>Invoce</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $booking->Customer->name }}</td>
                        <td>{{ $booking->date }}</td>
                        <td>{{ $booking->qty }}</td>
                        <td>{{ $booking->subtotal }}</td>
                        <td>{{ $booking->no_invoice }}</td>
                    </tr>
                </tbody>
            </table>
            <br><br>
            <div class="tabbable"> <!-- Only required for left/right tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Bayar Sekarang</a></li>
                    <li><a href="#tab2" data-toggle="tab">Bayar Di Tempat</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <form action="{{ route('payment', $booking->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="control-group">
                                <label for="upload_bukti" class="control-label">Upload Bukti Pembayaran</label>
                                <input type="file" class="controls" name="bukti" id="upload_bukti" required>
                            </div>
                            <div class="control-group">
                                <input type="submit" value="Submit" class="btn btn-color">
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="tab2">
                    <form action="{{ route('payment', $booking->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="control-group">
                            <input type="submit" value="Bayar Di Tempat" class="btn btn-color">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

 @endsection
