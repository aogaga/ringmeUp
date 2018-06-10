<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <div class="brand-wrapper">
            <!-- Hamburger -->
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Brand -->
            <div class="brand-name-wrapper">
                <a class="navbar-brand" href="#" style="color: #fff; font-weight: bold;">
                    {{Ring::sitename()}}
                </a>
            </div>

            <!-- Search -->
            <a data-toggle="collapse" href="#search" class="btn btn-danger" id="search-trigger">
                <span class="glyphicon glyphicon-search"></span>
            </a>

            <!-- Search body -->
            <div id="search" class="panel-collapse collapse">
                <div class="panel-body">
                    <form class="navbar-form" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-ok"></span></button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Main Menu -->
    <div class="side-menu-container">
        <ul class="nav navbar-nav">

            <li><a href="{{URL::to('/list/all')}}"><span class="glyphicon glyphicon-send"></span> Manage Listings</a></li>
            <li><a href="{{URL::to('/list/add')}}"><span class="glyphicon glyphicon-plane"></span> New Listings</a></li>

            <!-- Dropdown-->
            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-lvl1">
                    <span class="glyphicon glyphicon-user"></span> Manage Profile <span class="caret"></span>
                </a>

                <!-- Dropdown level 1 -->
                <div id="dropdown-lvl1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Change Password</a></li>
                            <li><a href="#">Update Account</a></li>


                        </ul>
                    </div>
                </div>
            </li>

            <li><a href="{{URL::to('/logout')}}"><span class="glyphicon glyphicon-off"></span> Logout</a></li>

        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
