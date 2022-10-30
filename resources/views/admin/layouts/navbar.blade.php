<div uk-sticky class="uk-navbar-container tm-navbar-container uk-active">
            <div class="uk-container uk-container-expand">
                <nav uk-navbar>
                    <div class="uk-navbar-left">
                        <a id="sidebar_toggle" class="uk-navbar-toggle" uk-navbar-toggle-icon ></a>
                        <a href="{{route('admin')}}" class="uk-navbar-item uk-logo">
                            <strong>UI Admin</strong>
                        </a>
                    </div>
                    <div class="uk-navbar-right uk-light">
                        <ul class="uk-navbar-nav">
                            <li class="uk-active">
                                <a href="#">{{Auth::user()->name}} &nbsp;<span class="ion-ios-arrow-down"></span></a>
                                <div uk-dropdown="pos: bottom-right; mode: click; offset: -17;">
                                   <ul class="uk-nav uk-navbar-dropdown-nav">
                                       <li><a href="{{route('actionlogout')}}">Logout</a></li>
                                   </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div id="sidebar" class="tm-sidebar-left uk-background-default">
            <center>
                <div class="user">
                    <div class="uk-margin-top"></div>
                    <div id="name" class="uk-text-uppercase"><strong>{{Auth::user()->name}}</strong></div>
                    <div id="email" class="uk-text-truncate">{{Auth::user()->email}}</div>
                    <span id="status" data-enabled="true" data-online-text="Online" data-away-text="Away" data-interval="10000" class="uk-margin-top uk-label uk-label-success"></span>
                </div>
                <br />
            </center>
            <ul class="uk-nav uk-nav-default">

                <li class="uk-nav-header">
                    <strong>Setting Hotel</strong>
                </li>
                <li><a href="{{route('room')}}">Room</a></li>
                <li><a href="{{route('facilitiesroom')}}">Facilities Room</a></li>
                <li><a href="{{route('facilitieshotel')}}">Facilities Hotel</a></li>
                <li><a href="{{route('account')}}">Account</a></li>
            </ul>
        </div>
        