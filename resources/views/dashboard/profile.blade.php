@extends('dashboard.includes.core')
@section('title', 'Profile')

@section('content')
<div class="row mt-3">
    <div class="col-lg-4">
        <div class="card profile-card-2">
        <div class="card-img-block">
            @if (isset(auth()->user()->image))
                <img class="img-fluid" src="{{ asset('storage/uploads/avatar') . '/' . $user->image }}" alt="Card image cap">
            @else
                <img class="img-fluid" src="https://via.placeholder.com/800x500" alt="Card image cap">
            @endif
        </div>
        <div class="card-body pt-5">
            @if (isset(auth()->user()->image))
            <img src="{{ asset('storage/uploads/avatar') . '/' . $user->image }}" alt="profile-image" class="profile">
            @else
            <img src="https://via.placeholder.com/110x110" alt="profile-image" class="profile">
            @endif
            <br>
            <h5 class="card-title">{{ auth()->user()->fullname }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="icon-block">
                <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
                <a href="javascript:void();"> <i class="fa fa-twitter bg-twitter text-white"></i></a>
                <a href="javascript:void();"> <i class="fa fa-google-plus bg-google-plus text-white"></i></a>
            </div>
        </div>

        <div class="card-body border-top border-light">
            <div class="media align-items-center">
                <div>
                    <img src="https://seeklogo.com/images/G/grand-theft-auto-v-logo-5039B47914-seeklogo.com.png" class="skill-img" alt="skill img">
                </div>
                <div class="media-body text-left ml-3">
                    <div class="progress-wrapper">
                        <p>GTA5 <span class="float-right">90%</span></p>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar" style="width:90%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="media align-items-center">
                    <div><img src="https://upload.wikimedia.org/wikipedia/en/f/f8/Scarlet_Nexus_cover.jpg" class="skill-img" alt="skill img"></div>
                        <div class="media-body text-left ml-3">
                            <div class="progress-wrapper">
                                <p>Scarlet Nexus <span class="float-right">100%</span></p>
                                <div class="progress" style="height: 5px;">
                                <div class="progress-bar" style="width:100%"></div>
                            </div>
                        </div>                   
                    </div>
                </div>
                <hr>
                <div class="media align-items-center">
                    <div><img src="https://play-lh.googleusercontent.com/3RsTIdcpIxIUDdCAHGr9HAZvCZKwij_GKlxiRIPjbjueOtG5O3ZL62tGXiD9VR3YVA=s48-rw" class="skill-img" alt="skill img"></div>
                        <div class="media-body text-left ml-3">
                            <div class="progress-wrapper">
                                <p>Tower of Fantasy <span class="float-right">70%</span></p>
                                <div class="progress" style="height: 5px;">
                                <div class="progress-bar" style="width:70%"></div>
                            </div>
                        </div>                   
                    </div>
                </div>
                <hr>
                <div class="media align-items-center">
                    <div><img src="https://seeklogo.com/images/C/csgo-logo-CAA0A4D48A-seeklogo.com.png" class="skill-img" alt="skill img"></div>
                        <div class="media-body text-left ml-3">
                            <div class="progress-wrapper">
                                <p>Counter Strike : Global Offensive <span class="float-right">95%</span></p>
                                <div class="progress" style="height: 5px;">
                                <div class="progress-bar" style="width:95%"></div>
                            </div>
                        </div>                   
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs">Messages</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/users?page=edit&uid={{auth()->user()->id}}" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                        </li>
                    </ul>
                <div class="tab-content p-3">
                    <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">User Profile</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Information</h6>
                            <p>{{ "Name : " . auth()->user()->fullname }}</p>
                            <p>{{ "Username : " . auth()->user()->username }}</p>
                            <p>{{ "Status : " . auth()->user()->roles->role }}</p>
                            <p>{{ "Email : " . auth()->user()->email }}</p>
                            <p>{{ "Ownership : " . auth()->user()->ownerships->ownership }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6>Recent badges</h6>
                            {{-- <a href="javascript:void();" class="badge badge-dark badge-pill">html5</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">react</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">codeply</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">angularjs</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">css3</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">jquery</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">bootstrap</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">responsive-design</a> --}}
                            <hr>
                            <span class="badge badge-primary"><i class="fa fa-user"></i> All Game Access</span>
                            <span class="badge badge-success"><i class="fa fa-cog"></i> {{ auth()->user()->ownerships->ownership }}</span>
                            <span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span>
                        </div>
                        <div class="col-md-12">
                            <h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <tbody>                                    
                                        <tr>
                                            <td>
                                                <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <!--/row-->
                </div>
            </div>
        </div>
    </div>
@endsection