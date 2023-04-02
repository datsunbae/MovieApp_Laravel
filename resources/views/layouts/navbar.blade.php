<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<div style="text-align: center;">
	<a href="/admininterface" class="brand-link">
	<img src="{{ asset('img/logo.svg')}}">
	</a>
	</div>
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="{{ asset('admin/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="/admininterface" class="d-block">{{ Auth::user()->name }}</a>
			</div>
		</div>
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="{{route('category.create')}}" class="nav-link">
						<i class="nav-icon fas fa-th"></i>
						<p>
							Category
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{route('country.create')}}" class="nav-link">
						<i class="nav-icon fas fa-globe"></i>
						<p>
							Country
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{route('genre.create')}}" class="nav-link">
						<i class="nav-icon fas fa-th"></i>
						<p>
							Genre
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{route('movie.create')}}" class="nav-link">
						<i class="nav-icon fas fa-film"></i>
						<p>
							Movie
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{route('episode.create')}}" class="nav-link">
						<i class="nav-icon fas fa-film"></i>
						<p>
							Episode
						</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
<style>
.sidebar-dark-primary{
	background-color: #2b2b31;
}
</style>