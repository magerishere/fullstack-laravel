<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
                                        src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg"
                                        alt="User Image">
        <div>
            <p class="app-sidebar__user-name">John Doe</p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="dashboard.html"><i class="app-menu__icon fa fa-dashboard"></i><span
                    class="app-menu__label">Dashboard</span></a></li>
        @foreach($menus as $menu)
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu__icon {{$menu['icon']}}"></i><span
                        class="app-menu__label">{{$menu['title']}}</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    @foreach($menu['submenus'] as $submenu)
                        <li><a class="treeview-item" href="{{$submenu['route']}}"><i class="icon fa fa-circle-o"></i>
                                {{$submenu['title']}}</a></li>

                    @endforeach
                </ul>
            </li>
        @endforeach

    </ul>
</aside>
