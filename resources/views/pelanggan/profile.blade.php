@extends('sb-user/app')
 @section('content')
    <section id="subintro">
        <div class="jumbotron subhead" id="overview">
        <div class="container">
            <div class="row">
            <div class="span12">
                <div class="centered">
                <h3>Profile</h3>
                <p>
                    Profile
                </p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <div class="container">
        <section id="maincontent">
            <div class="container">
            <div class="row">
                <div class="span3 bs-docs-sidebar">
                    <ul class="nav nav-list bs-docs-sidenav">
                        <li class="active"><a href="#general-template" class="btn btn-color"><i></i> Pengaturan Akun </a></li>
                        <li><a href="{{ route('editprofile') }}"><i class="icon-chevron-right"></i> Edit Profil</a></li>
                        <li><a href="{{ route('member.index') }}"><i class="icon-chevron-right"></i> Member</a></li>
                    </ul>
                </div>
                <div class="span9">
                <!-- Download
                ================================================== -->
                <section id="general-template" class="doc">
                    <div class="page-header">
                        <h3>Profil Saya</h3>
                            <div class="row">
                                <main class="main">
                                    <div class="content">
                                        <h1></h1>
                                        <div class="card">
                                            <div class="card-header">
                                                {{-- <b>Avatar</b> --}}
                                                <div style="display: flex; gap: 1em">
                                                {{-- <button class="btn btn-color"><a href="#" class="txt-red">Remove Avatar</a></button>
                                                <button class="btn btn-color"><a href="#">Change Avatar</a></button> --}}
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <br>
                                                <img src="" height="80" width="80">
                                            </div>
                                        </div>
                                        {{-- &emsp; --}}
                                        <div class="card" style="width:200px;">
                                            <div class="card-header">
                                                {{-- <b>Profil</b> --}}
                                            </div>
                                            <div class="card-body">
                                            <div class="form-group col-md-7 col-30">
                                            <table>
                                                <label for="">
                                                Nama : <span class="text-gray">{{ auth()->user()->name }}</span>
                                                </label>
                                                <br>
                                                Alamat: <span class="text-gray">{{ auth()->user()->address }}</span>
                                                <br>
                                                Jenis Kelamin: <span class="text-gray"></span>
                                                <br>
                                                Nomer HP : <span class="text-gray"></span>
                                                <br>
                                                Tanggal Lahir: <span class="text-gray"></span>
                                            </table>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                            </main>
                        </div>
                    </div>
                    </section>
                </div>
             </div>
        </section>
     </section>
        </div>
  <!-- Footer
 ================================================== -->


 @endsection
