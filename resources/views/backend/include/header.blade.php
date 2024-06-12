<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                <div class="header-button">
                    <div class="noti-wrap">
                        <div class="noti__item js-item-menu">


                            @isset(auth()->user()->attendence_notification)
                            <i class="zmdi zmdi-notifications"></i>
                            <span class="quantity">3</span>
                            <div class="notifi-dropdown js-dropdown">
                                <div class="notifi__title">
                                    <p>You have 1 Notifications</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>{{auth()->user()->attendence_notification}}</p>
                                        <span class="date">{{date('d M Y h:i a',strtotime(auth()->user()->created_at))}}</span>
                                    </div>
                                </div>
                            </div>

                            @endisset

                        </div>
                    </div>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="{{ asset('asset/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{auth()->user()->name}}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{{ asset('asset/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{auth()->user()->name}}</a>
                                        </h5>
                                        <span class="email">{{auth()->user()->email}}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a onclick="document.getElementById('logout').submit();">
                                        <i class="zmdi zmdi-power"></i>Logout</a>

                                        <form action="{{ route('logout')}}" id="logout" method="post">
                                            @csrf
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
