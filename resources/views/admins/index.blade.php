@extends('back.layout')
@section('title')
    <h1 class="m-0">Liste des administrateurs</h1>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Liste des administrateurs</h3>

                    
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Post-nom</th>
                                <th>Prénom</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>183</td>
                                <td>Doe</td>
                                <td>Doe</td>
                                <td>John</td>
                                <td><span class="tag tag-success">Approved</span></td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm">
                                        accèdez aux détails
                                    </a>
                                    <a href="#" class="btn btn-warning btn-sm">
                                        Modifier
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm">
                                        bloquer
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>219</td>
                                <td> Pierce</td>
                                <td>Pierce</td>
                                <td>Alexander</td>
                                <td><span class="tag tag-warning">Pending</span></td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm">
                                        accèdez aux détails
                                    </a>
                                    <a href="#" class="btn btn-warning btn-sm">
                                        Modifier
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm">
                                        bloquer
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>657</td>
                                <td>Doe</td>
                                <td>Doe</td>
                                <td>bob</td>
                                <td><span class="tag tag-success">Approved</span></td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm">
                                        accèdez aux détails
                                    </a>
                                    <a href="#" class="btn btn-warning btn-sm">
                                        Modifier
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm">
                                        bloquer
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>175</td>
                                <td>Doe</td>
                                <td>Doe</td>
                                <td>Mike</td>
                                <td><span class="tag tag-success">Denied</span></td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm">
                                        accèdez aux détails
                                    </a>
                                    <a href="#" class="btn btn-warning btn-sm">
                                        Modifier
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm">
                                        bloquer
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
