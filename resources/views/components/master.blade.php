<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <x-assets.style/>
    <style>
    @media (min-width: 992px) {
            body.vertical-layout.vertical-menu-modern .content, body.vertical-layout.vertical-menu-modern .footer {
                margin-left: 0 !important;
            }
        }
    </style>
</head>
<body class="vertical-layout vertical-menu-modern material-vertical-layout material-layout content-left-sidebar todo-application  fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar">
    {{-- @component('components.base.nav')
    @endcomponent --}}
    <x-base.nav/>

    {{$content}}
  
 
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <x-assets.script/>
    {{$script}}
</body>

</html>