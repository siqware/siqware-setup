<div class="ui sidebar vertical left menu overlay  borderless visible sidemenu inverted  grey"
     style="-webkit-transition-duration: 0.1s; transition-duration: 0.1s;" data-color="grey">
    <a class="item logo" href="index.html">
        <img src="{{asset('siqWare/img/logo.png')}}" alt="siqWarelogo"/><img
            src="{{asset('siqWare/img/thumblogo.png')}}" alt="siqWarelogo" class="displaynone"/>
    </a>
    <div class="ui accordion inverted">
        {{--Dropdown desktop--}}
        <a class="title item">
            <i class="ion-speedometer titleIcon icon"></i> Dropdown <i class="dropdown icon"></i>
        </a>
        <div class="content">
            <a class="item" href="index.html">
                Submenu
            </a>
        </div>
        {{--menu item desktop--}}
        <a class="item" href="typography.html">
            <i class="ion-link icon"></i> <span>Menu</span>
        </a>
    </div>
    {{--Dropdown mobile--}}
    <div class="ui dropdown item displaynone scrolling popupHover"  data-content="Dropdown Menu" data-position="right center">
        <span>Dashboard</span>
        <i class="ion-speedometer icon"></i>

        <div class="menu">
            <div class="header">
                Dashboard
            </div>
            <div class="ui divider"></div>
            <a class="item" href="index.html">
                Dashboard v1
            </a>
        </div>
    </div>
    {{--menu item mobile--}}
    <a class="item popupHover displaynone" href="typography.html" data-content="Menu Item" data-position="right center">
        <i class="ion-link icon"></i>
    </a>
</div>
