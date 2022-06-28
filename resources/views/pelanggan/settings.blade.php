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
            {{-- <div class="row">
                <div class="span12">
                <ul class="filter">
                    <li class="all active"><a href="#" class="btn btn-color">Profile</a></li>
                    <li class="web"><a href="#" class="btn btn-color">Pengaturan Profile</a></li>
                </ul>
                </div>
            </div> --}}
            <div class="row">
                <div class="span3 bs-docs-sidebar">
                <ul class="nav nav-list bs-docs-sidenav">
                    <li class="active"><a href="#general-template" class="btn btn-color"><i></i> Pesanan Saya </a></li>
                    <li><a href="#file-structure"><i class="icon-chevron-right"></i> Pengaturan Akun</a></li>
                </ul>
                </div>
                <div class="span9">
                <!-- Download
                ================================================== -->
                <section id="general-template" class="doc">
                    <div class="page-header">
                    <h3>Pesanan Saya</h3>
                        <div class="row">
                            <main class="main">


                                <div class="content">
                                    <h1></h1>

                                    <div class="card">
                                        <div class="card-header">
                                            <b>Avatar</b>
                                            <div style="display: flex; gap: 1em">
                                                <a href="#" class="txt-red">Remove Avatar</a>
                                                <a href="#">Change Avatar</a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <img src="" height="80" width="80">
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <b>Profile Settings</b>
                                            <a href="">Edit Profile</a>
                                        </div>
                                        <div class="card-body">
                                            Name: <span class="text-gray"></span>
                                            <br>
                                            Email: <span class="text-gray"></span>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <b>Security & Password</b>
                                            <a href="#">Edit Password</a>
                                        </div>
                                        <div class="card-body">
                                            Your Password: <span class="text-gray">******</span>
                                            <br>
                                            Last Changed: <span class="text-gray">22-08-2020</span>
                                        </div>
                                    </div>

                                </div>
                            </main>
                        </div>
                </div>
        </section>
     </section>
        </div>
  <!-- Footer
 ================================================== -->


 @endsection
