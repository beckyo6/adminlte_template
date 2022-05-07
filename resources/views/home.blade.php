@extends('back.layout')
@section('title')
    <h1 class="m-0">DASHBOARD</h1>
@endsection
@section('content')
    <div class="row col-lg-12">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white text-center">
                <div class="inner">
                    <h3>150</h3>
                    <p>Total Admins</p>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white text-center">
                <div class="inner">
                    <h3>53</h3>
                    <p>Total Agents</p>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white text-center">
                <div class="inner">
                    <h3>44</h3>
                    <p>Total Agents Valides</p>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white text-center">
                <div class="inner">
                    <h3>65</h3>
                    <p>Total Agents en Attente</p>
                </div>

            </div>
        </div>
        <!-- ./col -->
    </div>

    <div class="row col-lg-12">
        <div class="col-lg-6">
            <div class="card">
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
        </div>
        <div class="col-lg-6 gx-1">
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Liste des agents en attente de validation</h3>

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
                                    <th>Validation</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A</td>
                                    <td>A</td>
                                    <td>
                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                            SAM
                                        </div>
                                    </td>
                                    <td>En attente</td>
                                    <td><span class="badge badge-danger">bloqué</span></td>
                                </tr>
                                <tr>
                                    <td>A</td>
                                    <td>A</td>
                                    <td>
                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                            MARTIN
                                        </div>
                                    </td>
                                    <td>En attente</td>
                                    <td><span class="badge badge-danger">bloqué</span></td>
                                </tr>
                                <tr>
                                    <td>A</td>
                                    <td>A</td>
                                    <td>
                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                            ARICIAS
                                        </div>
                                    </td>
                                    <td>En attente</td>
                                    <td><span class="badge badge-danger">bloqué</span></td>
                                </tr>
                                <tr>
                                    <td>A</td>
                                    <td>A</td>
                                    <td>
                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                            JULES
                                        </div>
                                    </td>
                                    <td>En attente</td>
                                    <td><span class="badge badge-danger">bloqué</span></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
            </div>
        </div>
    </div>
@endsection
