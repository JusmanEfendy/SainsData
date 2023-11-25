<div class="sidebar">
    <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-mini">
                CT
            </a>
            <a href="javascript:void(0)" class="simple-text logo-normal">
                Creative Tim
            </a>
        </div>
        <ul class="nav">
            <li class="active ">
                <a href="{{ route('admin-dashboard') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="active ">
                <a href="{{ route('tabel-stunting') }}">
                    <i class="tim-icons icon-notes"></i>
                    <p>Data Posyandu</p>
                </a>
            </li>
        </ul>
    </div>
</div>
