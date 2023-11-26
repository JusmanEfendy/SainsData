@include('layouts.header')
<title>{{ $title }}</title>

<body class="">
    <div class="wrapper">

        @include('layouts.sidebar')

        <div class="main-panel">
            <!-- Navbar -->
            @include('layouts.navbar', ['navbarBrand' => 'Posyandu'])
            <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-header">
                                    <h4 class="card-title"> Simple Table</h4>
                                    <a href="{{ route('posyandu.create') }}" class="btn btn-fill btn-primary">Add data
                                        +</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table tablesorter " id="">
                                            <thead class=" text-primary">
                                                <tr>
                                                    <th>
                                                        Name
                                                    </th>
                                                    <th>
                                                        Country
                                                    </th>
                                                    <th>
                                                        City
                                                    </th>
                                                    <th class="text-center">
                                                        Salary
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Dakota Rice
                                                    </td>
                                                    <td>
                                                        Niger
                                                    </td>
                                                    <td>
                                                        Oud-Turnhout
                                                    </td>
                                                    <td class="text-center">
                                                        $36,738
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Minerva Hooper
                                                    </td>
                                                    <td>
                                                        Curaçao
                                                    </td>
                                                    <td>
                                                        Sinaai-Waas
                                                    </td>
                                                    <td class="text-center">
                                                        $23,789
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Sage Rodriguez
                                                    </td>
                                                    <td>
                                                        Netherlands
                                                    </td>
                                                    <td>
                                                        Baileux
                                                    </td>
                                                    <td class="text-center">
                                                        $56,142
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Philip Chaney
                                                    </td>
                                                    <td>
                                                        Korea, South
                                                    </td>
                                                    <td>
                                                        Overland Park
                                                    </td>
                                                    <td class="text-center">
                                                        $38,735
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Doris Greene
                                                    </td>
                                                    <td>
                                                        Malawi
                                                    </td>
                                                    <td>
                                                        Feldkirchen in Kärnten
                                                    </td>
                                                    <td class="text-center">
                                                        $63,542
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Mason Porter
                                                    </td>
                                                    <td>
                                                        Chile
                                                    </td>
                                                    <td>
                                                        Gloucester
                                                    </td>
                                                    <td class="text-center">
                                                        $78,615
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Jon Porter
                                                    </td>
                                                    <td>
                                                        Portugal
                                                    </td>
                                                    <td>
                                                        Gloucester
                                                    </td>
                                                    <td class="text-center">
                                                        $98,615
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title"> Sidebar Background</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <div class="badge-colors text-center">
                            <span class="badge filter badge-primary active" data-color="primary"></span>
                            <span class="badge filter badge-info" data-color="blue"></span>
                            <span class="badge filter badge-success" data-color="green"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line text-center color-change">
                    <span class="color-label">LIGHT MODE</span>
                    <span class="badge light-badge mr-2"></span>
                    <span class="badge dark-badge ml-2"></span>
                    <span class="color-label">DARK MODE</span>
                </li>
                <li class="button-container">
                    <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank"
                        class="btn btn-primary btn-block btn-round">Download Now</a>
                    <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html"
                        target="_blank" class="btn btn-default btn-block btn-round">
                        Documentation
                    </a>
                </li>
                <li class="header-title">Thank you for 95 shares!</li>
                <li class="button-container text-center">
                    <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot;
                        45</button>
                    <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot;
                        50</button>
                    <br>
                    <br>
                    <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star ntkme/github-buttons on GitHub">Star</a>
                </li>
            </ul>
        </div>
    </div>
    <!--   Core JS Files   -->
    @include('layouts.script')
</body>

</html>