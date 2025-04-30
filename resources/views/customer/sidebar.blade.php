<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo" style="background-color:#08324A">
                <a href="#">
                    <img src="{{asset('logo.png')}}" alt="Inbox Infotech" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">                        
						<li>
                            <a class="js-arrow" href="{{url('customer/dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>                            
                        </li>
						
						<li>
                            <a class="js-arrow" href="{{url('customer/account')}}">
                                <i class="fas fa-user"></i>Account Setting</a>                            
                        </li>
						@if(Session::get('cust_status') == 1)
						<li class="has-sub @yield('tkt')">
                            <a class="js-arrow" href="#">
							<i class="fas fa-table"></i>Ticket List</a>
								<ul class="list-unstyled navbar__sub-list js-sub-list">	
								<li>
                                    <a href="{{url('/customer/supporttickets/showalltikcets')}}">All Tickets</a>
                                </li>
								</ul>
						</li>
						@endif
                    </ul>
                </nav>
            </div>
        </aside>
    