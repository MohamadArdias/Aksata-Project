@extends('layouts.master')

@section('title')
Kategori
@endsection

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Kategori</li>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <button onclick="addForm()" class="btn btn-success btn-xs btn-flat"><i
                            class="fa fa-plus-circle"></i> Tambah</button>
                </div>
                <div class="box-body table-responsive">
                    <table class="table table-stiped table-bordered datatable">
                        <thead>
                            <th width="5%">No</th>
                            <th>Kategori</th>
                            <th width="15%"><i class="fa fa-cog"></i></th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@includeIf('kategory.form')

@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-1.11.1.min.js">
    let table;
    
    jQuery(function () {
        table = jQuery('.table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,

        });

    });

    function addForm() {
        jQuery('#modal-form').modal('show');
        jQuery('#modal-form .modal-title').text('Tambah Kategori'); 
    }
</script>
@endpush
