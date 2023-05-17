@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4 w-75">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Dropdown Card Example</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control form-control-user" placeholder="Belajar Laravel Dasar">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationDefault04">State</label>
                    <select class="custom-select" id="validationDefault04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection