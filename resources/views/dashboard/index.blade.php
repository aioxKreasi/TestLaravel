@extends('template.admin')
@section('konten')
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <!-- task, page, download counter  start -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-purple">$30200</h4>
                                            <h6 class="text-muted m-b-0">All Earnings</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="fa fa-bar-chart f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-purple">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">% change</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-line-chart text-white f-16"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-green">290+</h4>
                                            <h6 class="text-muted m-b-0">Page Views</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="fa fa-file-text-o f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-green">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">% change</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-line-chart text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-red">145</h4>
                                            <h6 class="text-muted m-b-0">Task Completed</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="fa fa-calendar-check-o f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-red">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">% change</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-line-chart text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-blue">500</h4>
                                            <h6 class="text-muted m-b-0">Downloads</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="fa fa-hand-o-down f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-blue">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">% change</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-line-chart text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- task, page, download counter  end -->

                        <!--  sale analytics start -->
                        <div class="col-xl-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Sales Analytics</h5>
                                    <span class="text-muted">Get 15% Off on <a href="https://www.amcharts.com/" target="_blank">amCharts</a> licences. Use code "codedthemes" and get the discount.</span>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                            <li><i class="fa fa-window-maximize full-card"></i></li>
                                            <li><i class="fa fa-minus minimize-card"></i></li>
                                            <li><i class="fa fa-refresh reload-card"></i></li>
                                            <li><i class="fa fa-trash close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div id="sales-analytics" style="height: 400px;"></div>
                                </div>
                            </div>
                        </div>
                        <!--  sale analytics end -->

                        <!--  project and team member start -->
                        <div class="col-xl-12 col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5>Projects</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                            <li><i class="fa fa-window-maximize full-card"></i></li>
                                            <li><i class="fa fa-minus minimize-card"></i></li>
                                            <li><i class="fa fa-refresh reload-card"></i></li>
                                            <li><i class="fa fa-trash close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>
                                                    <div class="chk-option">
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label class="check-task">
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                        <i class="cr-icon fa fa-check txt-default"></i>
                                                                    </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    Assigned</th>
                                                <th>Name</th>
                                                <th>Due Date</th>
                                                <th class="text-right">Priority</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="chk-option">
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label class="check-task">
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                            <i class="cr-icon fa fa-check txt-default"></i>
                                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block align-middle">
                                                        <img src="{{asset('mega-able-lite')}}/assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                        <div class="d-inline-block">
                                                            <h6>John Deo</h6>
                                                            <p class="text-muted m-b-0">Graphics Designer</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Able Pro</td>
                                                <td>Jun, 26</td>
                                                <td class="text-right"><label class="label label-danger">Low</label></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="chk-option">
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label class="check-task">
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                            <i class="cr-icon fa fa-check txt-default"></i>
                                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block align-middle">
                                                        <img src="{{asset('mega-able-lite')}}/assets/images/avatar-5.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                        <div class="d-inline-block">
                                                            <h6>Jenifer Vintage</h6>
                                                            <p class="text-muted m-b-0">Web Designer</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Mashable</td>
                                                <td>March, 31</td>
                                                <td class="text-right"><label class="label label-primary">high</label></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="chk-option">
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label class="check-task">
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                            <i class="cr-icon fa fa-check txt-default"></i>
                                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block align-middle">
                                                        <img src="{{asset('mega-able-lite')}}/assets/images/avatar-3.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                        <div class="d-inline-block">
                                                            <h6>William Jem</h6>
                                                            <p class="text-muted m-b-0">Developer</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Flatable</td>
                                                <td>Aug, 02</td>
                                                <td class="text-right"><label class="label label-success">medium</label></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="chk-option">
                                                        <div class="checkbox-fade fade-in-primary">
                                                            <label class="check-task">
                                                                <input type="checkbox" value="">
                                                                <span class="cr">
                                                                            <i class="cr-icon fa fa-check txt-default"></i>
                                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-block align-middle">
                                                        <img src="{{asset('mega-able-lite')}}/assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                        <div class="d-inline-block">
                                                            <h6>David Jones</h6>
                                                            <p class="text-muted m-b-0">Developer</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Guruable</td>
                                                <td>Sep, 22</td>
                                                <td class="text-right"><label class="label label-primary">high</label></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="text-right m-r-20">
                                            <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div>
        </div>
    </div>   
@endsection