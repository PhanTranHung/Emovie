<!-- Sidebar -->
<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
    <ul class="nav sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">
               Administrator
            </a>
        </li>
        <li>
            <a href="{{ URL::route('homepage') }}">Home</a>
        </li>
        <li>
            <a href="#">Admins</a>
        </li>
        <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorys <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li class="dropdown-header">Dropdown heading</li>
				<li><a href="{{ url('/categorys/action') }}">Action</a></li>
				<li><a href="{{ url('/categorys/sci-fic') }}">Science Fiction</a></li>
                <li><a href="{{ url('/categorys/animation') }}">Animation</a></li>
                <li><a href="{{ url('/categorys/horror') }}">Horror</a></li>
                <li><a href="{{ url('/categorys/sports') }}">Sports</a></li>
                <li><a href="{{ url('/categorys/anime') }}">Anime</a></li>
                <li><a href="{{ url('/categorys/documentary') }}">Documentary</a></li>
                <li><a href="{{ url('/categorys/adventure') }}">Adventure</a></li>
				<li><a href="{{ url('/categorys/romance') }}">Romance</a></li>
				<li><a href="{{ url('/categorys/family') }}">Family</a></li>
			</ul>
        </li>
        <li>
            <a href="{{ URL::route('add') }}">Add movie</a>
        </li>
        <li>
            <a href="#">Nothing</a>
        </li>
        <li>
            <a href="#">Nothing</a>
        </li>
        <li>
            <a href="#">Nothing</a>
        </li>
        <li>
            <a href="{{route('logout')}}">Logout</a>
        </li>
    </ul>
</nav>
<!-- /#sidebar-wrapper -->