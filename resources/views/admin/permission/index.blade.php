@extends('m-admin.dashboard')
@section('title','Septi Beauty Center')
@section('content')

<div class="section-body">
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumd-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumd-item"><a href="#"> Boostrap Componen</a></div>
              <div class="breadcrumd-item"><a href="#"> Form</a></div>
            </div>
          </div>
          @if (session('success'))
              <div class="col-sm-12">
                  <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Success</span> {{session('success')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              </div>
          @endif
          
          @if (session('error'))
                <div class="col-sm-12">
                    <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-danger">Error !</span> {{session('error')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Sortable Table</h4>
                  <div class="card-header-action">
                    <form>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped" id="sortable-table">
                      <thead>
                        <tr>
                          <th class="text-center">
                            <i class="fas fa-th"></i>
                          </th>
                          <th>permission Name</th>
                          {{-- <th>Progress</th>
                          <th>Members</th>
                          <th>Due Date</th>
                          <th>Status</th>--}}
                          <th>Action</th> 
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($permissions as $permission)
                        <tr>
                          <td>
                            <div class="sort-handler">
                              <i class="fas fa-th"></i>
                            </div>
                          </td>
                          <td>{{ $permission->name }}</td>
                          <td>
                            <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-secondary">Edit</a>

                            <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST">
                              <input type="submit" class="btn btn-danger" value="delete">
                              @method('DELETE')
                              @csrf
                            </form>
                          </td>
                          {{-- <td class="align-middle">
                            <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                              <div class="progress-bar bg-success" data-width="100"></div>
                            </div>
                          </td> --}}
                          {{-- <td>
                            <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                          </td>
                          <td>2018-01-20</td>
                          <td><div class="badge badge-success">Completed</div></td>
                          <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="sort-handler">
                              <i class="fas fa-th"></i>
                            </div>
                          </td>
                          <td>Redesign homepage</td>
                          <td class="align-middle">
                            <div class="progress" data-height="4" data-toggle="tooltip" title="0%">
                              <div class="progress-bar" data-width="0"></div>
                            </div>
                          </td>
                          <td>
                            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Nur Alpiana">
                            <img alt="image" src="../assets/img/avatar/avatar-3.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hariono Yusup">
                            <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Bagus Dwi Cahya">
                          </td>
                          <td>2018-04-10</td>
                          <td><div class="badge badge-info">Todo</div></td>
                          <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="sort-handler">
                              <i class="fas fa-th"></i>
                            </div>
                          </td>
                          <td>Backup database</td>
                          <td class="align-middle">
                            <div class="progress" data-height="4" data-toggle="tooltip" title="70%">
                              <div class="progress-bar bg-warning" data-width="70"></div>
                            </div>
                          </td>
                          <td>
                            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Rizal Fakhri">
                            <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hasan Basri">
                          </td>
                          <td>2018-01-29</td>
                          <td><div class="badge badge-warning">In Progress</div></td>
                          <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="sort-handler">
                              <i class="fas fa-th"></i>
                            </div>
                          </td>
                          <td>Input data</td>
                          <td class="align-middle">
                            <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                              <div class="progress-bar bg-success" data-width="100"></div>
                            </div>
                          </td>
                          <td>
                            <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Rizal Fakhri">
                            <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Isnap Kiswandi">
                            <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Yudi Nawawi">
                            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Khaerul Anwar">
                          </td>
                          <td>2018-01-16</td>
                          <td><div class="badge badge-success">Completed</div></td>
                          <td><a href="#" class="btn btn-secondary">Detail</a></td> --}}
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
@endsection

@push('page-scripts')

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/jquery-ui-dist/jquery-ui.min.js"></script>

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="../assets/js/page/components-table.js"></script>
@endpush
    
