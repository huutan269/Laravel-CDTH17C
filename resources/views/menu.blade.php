@php
    $ar_menu = [
        "Quản lý câu hỏi" => [
            "Danh sách" => 'cau-hoi.',
            "Thêm câu hỏi" => 'cau-hoi.them-moi'
        ],

        "Quản lý lĩnh vực" => [
            "Danh sách" => 'linh-vuc.',
            "Thêm lĩnh vực" => 'linh-vuc.them-moi'
        ]
    ];
@endphp


<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Quản lý</li>
    
    @foreach ($ar_menu as $name => $menu_child)

    <li class="treeview">
        <a href="#">
            <i class="fa fa-edit"></i> <span>{{$name}}</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            @foreach ($menu_child as $name_child => $routeName)
                <li>
                    <a href="{{route($routeName)}}"><i class="fa fa-circle-o"></i> {{$name_child}}</a>
                </li>
            @endforeach
        </ul>
    </li>
    @endforeach

</ul>