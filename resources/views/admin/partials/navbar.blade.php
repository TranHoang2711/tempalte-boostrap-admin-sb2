<!-- Sidebar -->
<ul CLASS="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a CLASS="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div CLASS="sidebar-brand-icon rotate-n-15">
            <i CLASS="fas fa-laugh-wink"></i>
        </div>
        <div CLASS="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr CLASS="sidebar-divider">

    <!-- Heading -->
    <div CLASS="sidebar-heading" style="display: none;">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li CLASS="nav-item">
        <a CLASS="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i CLASS="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" CLASS="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div CLASS="bg-white py-2 collapse-inner rounded">
                <h6 CLASS="collapse-header">Custom Components:</h6>
                <a CLASS="collapse-item" href="#">Buttons</a>
                <a CLASS="collapse-item" href="#">Cards</a>
            </div>
        </div>
    </li>

</ul>
<!-- End of Sidebar -->

3. File navbar.blade.php
?
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63
64
65
66
67
68
69
70
71
72
73
74
75
76
77
78
79
80
81
82
83
84
85
86
87
88
89
90
91
92
93
94
95
96
97
98
99
100
101
102
103
104
105
106
107
108
109
110
111
112
113
114
115
116
117
118
119
120
121
122
123
124
125
126
127
128
129
130
131
132
133
134
135
136
137
138
139
140
141
142
<!-- Topbar -->
<nav CLASS="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" CLASS="btn btn-link d-md-none rounded-circle mr-3">
        <i CLASS="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->

    <div CLASS="input-group">
        <input type="text" CLASS="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div CLASS="input-group-append">
            <button CLASS="btn btn-primary" type="button">
                <i CLASS="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>


    <!-- Topbar Navbar -->
    <ul CLASS="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li CLASS="nav-item dropdown no-arrow d-sm-none">
            <a CLASS="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i CLASS="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div CLASS="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form CLASS="form-inline mr-auto w-100 navbar-search">
                    <div CLASS="input-group">
                        <input type="text" CLASS="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div CLASS="input-group-append">
                            <button CLASS="btn btn-primary" type="button">
                                <i CLASS="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li CLASS="nav-item dropdown no-arrow mx-1">
            <a CLASS="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i CLASS="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span CLASS="badge badge-danger badge-counter">3+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div CLASS="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 CLASS="dropdown-header">
                    Alerts Center
                </h6>
                <a CLASS="dropdown-item d-flex align-items-center" href="#">
                    <div CLASS="mr-3">
                        <div CLASS="icon-circle bg-primary">
                            <i CLASS="fas fa-file-alt text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div CLASS="small text-gray-500">December 12, 2019</div>
                        <span CLASS="font-weight-bold">A NEW monthly report is ready to download!</span>
                    </div>
                </a>

                <a CLASS="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
            </div>
        </li>

        <!-- Nav Item - Messages -->
        <li CLASS="nav-item dropdown no-arrow mx-1">
            <a CLASS="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i CLASS="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span CLASS="badge badge-danger badge-counter">7</span>
            </a>
            <!-- Dropdown - Messages -->
            <div CLASS="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 CLASS="dropdown-header">
                    Message Center
                </h6>
                <a CLASS="dropdown-item d-flex align-items-center" href="#">
                    <div CLASS="dropdown-list-image mr-3">
                        <img CLASS="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                        <div CLASS="status-indicator bg-success"></div>
                    </div>
                    <div CLASS="font-weight-bold">
                        <div CLASS="text-truncate">Hi there! I am wondering IF you can help me with a problem I've been having.</div>
                        <div CLASS="small text-gray-500">Emily Fowler · 58m</div>
                    </div>
                </a>
                <a CLASS="dropdown-item d-flex align-items-center" href="#">
                    <div CLASS="dropdown-list-image mr-3">
                        <img CLASS="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                        <div CLASS="status-indicator"></div>
                    </div>
                    <div>
                        <div CLASS="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                        <div CLASS="small text-gray-500">Jae Chun · 1d</div>
                    </div>
                </a>

                <a CLASS="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
            </div>
        </li>

        <div CLASS="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li CLASS="nav-item dropdown no-arrow">
            <a CLASS="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span CLASS="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img CLASS="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
            </a>
            <!-- Dropdown - User Information -->
            <div CLASS="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a CLASS="dropdown-item" href="#">
                    <i CLASS="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a CLASS="dropdown-item" href="#">
                    <i CLASS="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <a CLASS="dropdown-item" href="#">
                    <i CLASS="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a>
                <div CLASS="dropdown-divider"></div>
                <a CLASS="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i CLASS="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
