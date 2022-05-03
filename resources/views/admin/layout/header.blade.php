<!-- Header start -->
<header class="header">
    <div class="container-fluid">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                <a href="index.html" class="logo">Royal <span>Hospitals</span></a>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">

                <!-- Header actions start -->
                <ul class="header-actions">
                    <li class="dropdown d-none d-sm-block">
                        <a href="#" class="contact">
                            <i class="icon-phone"></i> 012 345 6789
                        </a>
                    </li>
                    <li class="dropdown d-none d-sm-block">
                        <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                            <i class="icon-bell"></i>
                            <span class="count-label"></span>
                        </a>
                        <div class="dropdown-menu lrg" aria-labelledby="notifications">
                            <div class="dropdown-menu-header">
                                <h5>Notifications</h5>
                                <p class="m-0 sub-title">You have 5 unread notifications</p>
                            </div>
                            <ul class="header-notifications">
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="avatar">
                                            <img src="{{ asset('assetsAdmin/img/user24.png') }}" alt="avatar" />
                                            <span class="notify-iocn icon-drafts text-danger"></span>
                                        </div>
                                        <div class="details">
                                            <h6>Dr. Clive</h6>
                                            <p>Appointed as a new President 2019-2020</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="avatar">
                                            <img src="{{ asset('assetsAdmin/img/user21.png') }}" alt="avatar" />
                                            <span class="notify-iocn icon-layers text-info"></span>
                                        </div>
                                        <div class="details">
                                            <h6>Dr. G. Levsmia</h6>
                                            <p>Will be on leave on October 2nd week.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="avatar">
                                            <img src="{{ asset('assetsAdmin/img/user19.png') }}" alt="avatar" />
                                            <span class="notify-iocn icon-person_add text-success"></span>
                                        </div>
                                        <div class="details">
                                            <h6>Dr. George S</h6>
                                            <p>Sent new applointments list</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                            <span class="user-name">{{Auth::user()->name}}</</span>
                            <span class="avatar">NR<span class="status busy"></span></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                            <div class="header-profile-actions">
                                <div class="header-user-profile">
                                    <div class="header-user">
                                        <img src="{{ asset('assetsAdmin/img/user11.png') }}" alt="Royal Hospitals Admin Template" />
                                    </div>
                                    <h5>{{Auth::user()->name}}</h5>
                                    <p>{{Auth::user()->role}}</</p>
                                </div>
                                <a href="hospital-add-doctor.html"><i class="icon-user1"></i> My Profile</a>
                                <a href="account-settings.html"><i class="icon-settings1"></i> Account Settings</a>
                                <a href="hospital-reviews.html"><i class="icon-activity"></i> Activity Logs</a>
                                 <form method="post" action="{{route('admin.logout')}}">
                                     @csrf
                                 <button class="btn btn-m" tybe= submit>
                                       <i class="icon-log-out1 mr-3 ml-1"></i>
                                 Sign Out
                                  </button>
                                 </form>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- Header actions end -->

            </div>
        </div>
        <!-- Row end -->

    </div>
</header>
<!-- Header end -->
