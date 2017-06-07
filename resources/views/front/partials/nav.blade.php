<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
             <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                     文档 <span class="caret"></span>
                 </a>

                 <ul class="dropdown-menu" role="menu">
                     <li><a href="/docs/5.4">5.4</a></li>
                     <li><a href="/docs/5.4">5.4</a></li>
                     <li><a href="/docs/5.4">5.4</a></li>
                 </ul>
             </li>
             <li><a href="">博客</a></li>
             <li><a href="">教程</a></li>
             <li><a href="">项目|包</a></li>
         </ul>

         <!-- Right Side Of Navbar -->
         <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        </ul>
    </div>
</div>
</nav>
