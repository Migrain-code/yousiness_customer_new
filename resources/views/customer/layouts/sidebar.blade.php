<!-- Profile Sidebar -->
<div class="col-md-5 col-lg-4 col-xl-3 customer-menu">
    <div class="profile-sidebar">
        <div class="widget-profile pro-widget-content">
            <div class="profile-info-widget">

                <a href="#" class="booking-doc-img">
                    <img src="{{storage(auth('customer')->user()->image)}}" alt="User Image">
                </a>
                <div class="profile-det-info">
                    <h3>{{auth('customer')->user()->name}}</h3>
                    <div class="patient-details">
                        <h5><i class="fas fa-birthday-cake"></i> {{\Illuminate\Support\Carbon::parse(auth('customer')->user()->birthday)->format('d.m.Y')}}</h5>
                        <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i>@if(auth('customer')->user()->city) {{auth('customer')->user()->city->name}} @else Konum Yok @endif</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-widget">
            <nav class="dashboard-menu">
                <ul>
                    <li @if(request()->routeIs('customer.home')) class="active" @endif>
                        <a href="{{route('customer.home')}}">
                            <i class="fas fa-columns"></i>
                            <span>Mein Konto</span>
                        </a>
                    </li>
                    <li @if(request()->routeIs('customer.favorite.index')) class="active" @endif>
                        <a href="{{route('customer.favorite.index')}}">
                            <i class="fas fa-bookmark"></i>
                            <span>Meine Favoriten Salons</span>
                        </a>
                    </li>
                    <li @if(request()->routeIs('customer.addicted.index')) class="active" @endif>
                        <a href="{{route('customer.addicted.index')}}">
                            <i class="fas fa-users"></i>
                            <span>Meine Salons</span>
                        </a>
                    </li>

                    <li @if(request()->routeIs('customer.order.index')) class="active" @endif>
                        <a href="{{route('customer.order.index')}}" >
                            <i class="fas fa-list-alt"></i>
                            <span>Meine Bestellungen</span>
                            <small class="unread-msg">{{auth('customer')->user()->orders->count()}}</small>
                        </a>
                    </li>
                    <li @if(request()->routeIs('customer.packet.index')) class="active" @endif>
                        <a href="{{route('customer.packet.index')}}">
                            <i class="fas fa-clipboard"></i>
                            <span>Meine Pakete</span>
                        </a>
                    </li>
                    <li @if(request()->routeIs('customer.appointment.index')) class="active" @endif>
                        <a href="{{route('customer.appointment.index')}}">
                            <i class="fas fa-clock"></i>
                            <span>Meine Vergangene Termine</span>
                        </a>
                    </li>
                    <li @if(request()->routeIs('customer.comments')) class="active" @endif>
                        <a href="{{route('customer.comments')}}">
                            <i class="fas fa-comment"></i>
                            <span>Meine Kommentare</span>
                        </a>
                    </li>
                    <li @if(request()->routeIs('customer.campaign.index')) class="active" @endif>
                        <a href="{{route('customer.campaign.index')}}">
                            <i class="fas fa-percent"></i>
                            <span>Meine Kampagnen</span>
                        </a>
                    </li>
                    <li @if(request()->routeIs('customer.notifications')) class="active" @endif>
                        <a href="{{route('customer.notifications')}}">
                            <i class="fas fa-bell"></i>
                            <span>Benachrichtigungen</span>
                        </a>
                    </li>
                    <li @if(request()->routeIs('customer.campaign.index')) class="active" @endif>
                        <a href="{{route('customer.permissions')}}">
                            <i class="fas fa-bell-slash"></i>
                            <span>Berechtigungen</span>
                        </a>
                    </li>
                    <li @if(request()->routeIs('customer.profile.edit')) class="active" @endif>
                        <a href="{{route('customer.profile.edit')}}">
                            <i class="fas fa-user-cog"></i>
                            <span>Persöhnliche Daten</span>
                        </a>
                    </li>
                    <li @if(request()->routeIs('customer.profile.password.edit')) class="active" @endif>
                        <a href="{{route('customer.profile.password.edit')}}">
                            <i class="fas fa-lock"></i>
                            <span>Passwort ändern</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="$('#customer-logout-form').submit()">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Ausloggen</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <form method="post" action="{{route('customer.logout')}}" id="customer-logout-form">@csrf</form>
    </div>
</div>
<!-- / Profile Sidebar -->