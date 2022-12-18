<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{URL::asset('admincss/admin_dashbord.css') }}">
    <link rel="stylesheet" href="{{URL::asset('css/mdb.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <title>Admin Dashboard | Table</title>
</head>

<body id="body">
    <div class="container-all">
        <nav class="navbar">
            <div class="nav_icon" onclick="toggleSidebar()">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="navbar__left">
                <a href="{{URL('/')}}">আপনসেবা ওয়েভসাইট</a>
                <a class="active_link" href="{{URL('/admin')}}">এডমিন প্যানেল</a>
            </div>
            <div class="navbar__right">
                <a href="{{URL('/')}}">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
                <a href="{{URL('/')}}">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                </a>
                <a href="{{URL('/')}}">
                    <img width="30" src="images/avatar.svg" alt="" />
                    <!-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->
                </a>
            </div>
        </nav>


@yield('content')


        <div id="sidebar">
            <div class="sidebar__title">
                <div class="sidebar__img">
                    <img src="images/logo.png" alt="logo" />
                </div>
                <i onclick="closeSidebar()" class="fa fa-times" id="sidebarIcon" aria-hidden="true"></i>
            </div>

            <div class="sidebar__menu">
                <div class="sidebar__link active_menu_link">
                    <i class="fa fa-home"></i>
                    <a href="{{URL('/admin')}}">Dashboard</a>
                </div>
                <h2>MNG</h2>
                <div class="sidebar__link">
                    {{-- <i class="fa fa-user-secret" aria-hidden="true"></i> --}}
                    <a href="{{URL('/adminJobTable')}}">যারা চাকুরির জন্য আবেদন করেছে তাদের দেখতে এখানে ক্লিক করুন</a>
                </div>
                <div class="sidebar__link">
                    {{-- <i class="fa fa-building-o"></i> --}}
                    <a href="{{URL('/adminTable')}}">যারা সার্ভিস নেওয়ার জন্য আবেদন করেছে তাদের দেখতে এখানে ক্লিক করুন</a>
                </div>
                <div class="sidebar__link">
                    {{-- <i class="fa fa-wrench"></i> --}}
                    <a href="{{URL('/jobPost')}}">নতুন চাকুরি পোস্ট করার জন্য এখানে ক্লিক করুন</a>
                </div>
                <div class="sidebar__link">
                    {{-- <i class="fa fa-wrench"></i> --}}
                    <a href="{{URL('/adminJobManage')}}">চাকুরির লিস্ট দেখতে, চাকুরি আপডেট/ডিলিট করতে এখানে ক্লিক করুন</a>
                </div>
                <div class="sidebar__link">
                    {{-- <i class="fa fa-handshake-o"></i> --}}
                    <a href="{{URL('/adminService')}}">হোমপেইজ এর সার্ভিস এড, আপডট, ডিলিট করতে এখানে ক্লিক করুন</a>
                </div>
                <div class="sidebar__link">
                    {{-- <i class="fa fa-archive"></i> --}}
                    <a href="{{URL('/adminContact')}}">যারা Contact Us ফর্ম টি পূরণ করেছে তাদের দেখতে এখানে ক্লিক করুন</a>
                </div>
                <div class="sidebar__link">
                    {{-- <i class="fa fa-handshake-o"></i> --}}
                    <a href="{{URL('/siteVisitor')}}">এই ওয়েভসাইট টির ভিসিটর দের Information দেখতে এখানে ক্লিক করুন</a>
                </div>
                <h2>PAYROLL</h2>
                <div class="sidebar__logout">
                    <i class="fa fa-power-off"></i>
                    <a href="{{URL('/logout')}}">Log out</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="{{URL::asset('js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{URL::asset('adminjs/admin_dashbord.js') }}"></script>
    <script src="{{URL::asset('js/axios.js') }}"></script>
    {{-- <script src="{{URL::asset('js/table.js') }}"></script> --}}
    <script src="{{URL::asset('js/validation.js') }}"></script>
    {{-- <script src="{{URL::asset('js/form.js') }}"></script> --}}
    <script src="{{URL::asset('js/tata.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

@yield('script')

</body>

</html>