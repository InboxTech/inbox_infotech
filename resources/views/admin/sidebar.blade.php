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
                            <a class="js-arrow" href="/redirect">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
						@if(Auth::user()->users_type == '1')	
						<li class="has-sub @yield('pgs')">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-ticket-alt"></i>Ticket Management</a>
								<ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{url('/admin/tieket_category/list')}}">Manage Category</a>
                                </li>
                                <li>
                                    <a href="{{url('/admin/tieket_sub_category/list')}}">Manage Sub Category</a>
                                </li>
								<li>
                                    <a href="{{url('/admin/projects/list')}}">Manage Project</a>
                                </li>
								<li>
                                    <a href="{{url('/admin/customers/list')}}">Manage Customer</a>
                                </li>
                            </ul>
                        </li>
						
								
                        <li class="@yield('user')">
                            <a href="{{url('/admin/users/userlist')}}">
                                <i class="fas fa-users"></i>Users Management</a>
                        </li>
                        
                        <li class="has-sub @yield('pgs')">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Manage Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                <a href="{{url('/admin/award/list')}}">Award</a>
                                </li>
								<li>
                                    <a href="{{url('admin/contactus')}}">Contact Us</a>
                                </li>
								<li>
                                <a href="{{url('/admin/testimonial/list')}}">Clients Testimonials</a>
                                </li>
								<li>
                                    <a href="{{url('/admin/clientlogo/list')}}">Clients Logo</a>
                                </li>
								<li>
                                <a href="{{url('/admin/cms/cmslist')}}">CMS</a>
                                </li>
                                <li>
                                    <a href="{{url('/admin/leadership/list')}}">Leadership</a>
                                </li>
								<li>
                                <a href="{{url('admin/home_banner')}}">Slider Management</a>
                                </li>
								<li>
                                    <a href="{{url('/admin/product/list')}}">Products</a>
                                </li>
                                <li>
                                    <a href="{{url('/admin/service/list')}}">Services</a>
                                </li>
								<li>
                                    <a href="{{url('/admin/industry/list')}}">Industries</a>
                                </li>
								<li>
                                    <a href="{{url('/admin/blog/list')}}">Blog</a>
                                </li>
								</ul>
                        </li>						
						@endif
							
							@if(Auth::user()->users_type == '1' || Auth::user()->users_type == '3' && Auth::user()->status == 1)
                        <li class="has-sub" >
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Career Management</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{url('/admin/career/jobposting/list')}}">Job Posting Management</a>
                                </li>
                                <li>
                                    <a href="{{url('/admin/career/jobapplication/list')}}">Application Management</a>
                                </li>
                               
                            </ul>
                        </li>
							@endif
							@if(Auth::user()->users_type == '1' || Auth::user()->users_type == '3' || Auth::user()->users_type == '4' && Auth::user()->status == 1)
							<li class="has-sub @yield('tkt')">
                            <a class="js-arrow" href="#">
							<i class="fas fa-table"></i>Ticket List</a>
								<ul class="list-unstyled navbar__sub-list js-sub-list">	
								<li>
                                    <a href="{{url('/admin/supporttickets/list')}}">All Tickets</a>
                                </li>
								</ul>
						</li>
						@endif
                    </ul>
                </nav>
            </div>
        </aside>
    