@extends('back.layout')
@section('content')
    <div class="row col-lg-12">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white text-center">
                <div class="inner">
                    <h3>150</h3>
                    <p>New Orders</p>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white text-center">
                <div class="inner">
                    <h3>53</h3>
                    <p>Bounce Rate</p>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white text-center">
                <div class="inner">
                    <h3>44</h3>
                    <p>User Registrations</p>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white text-center">
                <div class="inner">
                    <h3>65</h3>

                    <p>Unique Visitors</p>
                </div>

            </div>
        </div>
        <!-- ./col -->
    </div>

    <div class="card col-lg-6">
        <div class="card-header border-transparent">
            <h3 class="card-title">Liste des administrateurs</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Post-nom</th>
                            <th>Prénom</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A</td>
                            <td>A</td>
                            <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20">
                                    Aaron
                                </div>
                            </td>
                            <td><span class="badge badge-warning">active</span></td>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td>A</td>
                            <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20">
                                    Aaron
                                </div>
                            </td>
                            <td><span class="badge badge-warning">active</span></td>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td>A</td>
                            <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20">
                                    Aaron
                                </div>
                            </td>
                            <td><span class="badge badge-warning">active</span></td>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td>A</td>
                            <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20">
                                    Aaron
                                </div>
                            </td>
                            <td><span class="badge badge-warning">active</span></td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>

    </div>
    <!-- /.card -->
@endsection
