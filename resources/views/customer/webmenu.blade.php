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
				<i class="zmdi zmdi-notifications"></i>
				<span class="quantity">3</span>
				<div class="notifi-dropdown js-dropdown">
					<div class="notifi__title">
						<p>You have 3 Notifications</p>
					</div>
					<div class="notifi__item">
						<div class="bg-c1 img-cir img-40">
							<i class="zmdi zmdi-email-open"></i>
						</div>
						<div class="content">
							<p>You got a email notification</p>
							<span class="date">April 12, 2018 06:50</span>
						</div>
					</div>
					<div class="notifi__item">
						<div class="bg-c2 img-cir img-40">
							<i class="zmdi zmdi-account-box"></i>
						</div>
						<div class="content">
							<p>Your account has been blocked</p>
							<span class="date">April 12, 2018 06:50</span>
						</div>
					</div>
					<div class="notifi__item">
						<div class="bg-c3 img-cir img-40">
							<i class="zmdi zmdi-file-text"></i>
						</div>
						<div class="content">
							<p>You got a new file</p>
							<span class="date">April 12, 2018 06:50</span>
						</div>
					</div>
					<div class="notifi__footer">
						<a href="#">All notifications</a>
					</div>
				</div>
			</div>
		</div>
		<div class="account-wrap">
			<div class="account-item clearfix js-item-menu">
				<div class="image">
				@if(Session::get('image') != '')
					<img src="{{asset('storage/media/customer/'.Session::get('image'))}}" alt="Session::get('username')" />
				@else
					<img src="{{asset('user-profile.png')}}" alt="{{Session::get('username')}}" />
				@endif

				</div>
				<div class="content">
					<a class="js-acc-btn" href="#">@if ($message = Session::get('username'))
			{{$message}}
			@endif	
			</a>
				</div>
				<div class="account-dropdown js-dropdown">
					<div class="info clearfix">
						<div class="image">
							<a href="#">
								@if(Session::get('image') != '')
								<img src="{{asset('storage/media/customer/'.Session::get('image'))}}" alt="Session::get('username')" />
								@else
								<img src="{{asset('user-profile.png')}}" alt="{{Session::get('username')}}" />
								@endif
							</a>
						</div>
						<div class="content">
							<h5 class="name">
								<a href="#">{{Session::get('username')}}</a>
							</h5>
						</div>
					</div>
					<div class="account-dropdown__body">
						<div class="account-dropdown__item">
							<a href="{{url('customer/account')}}">
								<i class="zmdi zmdi-account"></i>Account</a>
						</div>
					</div>
					<div class="account-dropdown__body">
						<div class="account-dropdown__item">
							<a href="{{url('customer/account/changepassword')}}">
								<i class="zmdi zmdi-settings"></i>Change Password</a>
						</div>
					</div>
					<div class="account-dropdown__footer">
						<a href="{{url('customer/logout')}}">
							<i class="zmdi zmdi-power"></i>Logout</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</header>