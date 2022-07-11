<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="section-body">
        <div class="main-content">
            <section class="section">
              <div class="section-header">
                <h1>Product</h1>
                <div class="section-header-breadcrumb">
                  </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table table-bordered mb-5">
                            <thead>
                                <tr class="table-primary">
                                    <th scope="col">#</th>
                                    <th scope="col">Produk</th>
                                    <th scope="col">Pelanggan</th>
                                    <th scope="col">No Invoice</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Diskon</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($report as $item)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $item->Products->name }}</td>
                                    <td>{{ $item->Customer->name }}</td>
                                    <td>{{ $item->no_invoice }}</td>
                                    <td>{{ $item->created_at}}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ $item->Products->discount }}</td>
                                    <td>{{ $item->subtotal }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </div>
</body>
</html>
