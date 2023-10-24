@extends('layout.panel')


@section('panel_content')

 <div class="container-fluid"><div class="row">
    <div class="col-lg-12">
        <div class="card card-primary card-outline sticky">
            <div class="card-header p-2">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="m-0 p-0 font-weight-bold ml-2">
                        <i class="fas fa-graduation-cap text-primary mr-1"></i> Data Fakultas
                    </h5>
                <div>
                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalCreate">
                        <i class="fas fa-plus mr-1"></i> Tambah</button>
                    <button id="cetakTable" class="btn btn-primary btn-sm ml-1">
                        <i class="fas fa-print mr-1"></i> Cetak</button>
                    </div>
                </div>
            </div>
        </div>
    <div class="card card-primary card-outline">
        <div class="card-body table-responsive">
            <div id="tableFakultas_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="tableFakultas_length">
                            <label class="custom-cursor-default-hover">Tampilkan <select name="tableFakultas_length" aria-controls="tableFakultas" class="custom-select custom-select-sm form-control form-control-sm">
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="250">250</option>
                                <option value="500">500</option>
                            </select> Data</label>
                        </div>
                    </div>
                <div class="col-sm-12 col-md-6">
                    <div id="tableFakultas_filter" class="dataTables_filter">
                        <label><i class="fa fa-search text-primary"></i>
                            <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="tableFakultas">
                        </label>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-sm-12">
                <table id="tableFakultas" class="table table-hover dataTable no-footer" aria-describedby="tableFakultas_info" style="width: 1030px;">
                    <thead>
                        <tr>
                            <th class="sorting sorting_asc custom-cursor-on-hover" tabindex="0" aria-controls="tableFakultas" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: aktifkan untuk mengurutkan kolom menurun" style="width: 68px;">#</th>
                            <th class="sorting custom-cursor-on-hover" tabindex="0" aria-controls="tableFakultas" rowspan="1" colspan="1" style="width: 236px;" aria-label="Kode Fakultas: aktifkan untuk mengurutkan kolom ke atas">Kode Fakultas</th>
                            <th class="sorting" tabindex="0" aria-controls="tableFakultas" rowspan="1" colspan="1" style="width: 341px;" aria-label="Nama Fakultas: aktifkan untuk mengurutkan kolom ke atas">Nama Fakultas</th>
                            <th class="noPrint sorting_disabled" rowspan="1" colspan="1" style="width: 175px;" aria-label="Action">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd">
                            <td class="sorting_1">1</td>
                            <td>TDI-88</td>
                            <td>Teknologi dan Informasi</td>
                            <td class=" noPrint">
                                <button type="button" name="edit" id="1" class="edit_btn btn btn-warning btn-sm mr-1 mt-1" data-toggle="tooltip" title="" data-original-title="Edit">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <button type="button" name="delete" id="1" data-name="Teknologi dan Informasi" class="del_btn btn btn-danger btn-sm mt-1" data-toggle="tooltip" title="" data-original-title="Hapus">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="sorting_1">2</td>
                            <td>EDB-26</td>
                            <td>Ekonomi dan Bisnis</td>
                            <td class=" noPrint">
                                <button type="button" name="edit" id="2" class="edit_btn btn btn-warning btn-sm mr-1 mt-1" data-toggle="tooltip" title="" data-original-title="Edit">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <button type="button" name="delete" id="2" data-name="Ekonomi dan Bisnis" class="del_btn btn btn-danger btn-sm mt-1" data-toggle="tooltip" title="" data-original-title="Hapus">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td class="sorting_1">3</td>
                            <td>KDB-69</td>
                            <td>Komunikasi dan Bahasa</td>
                            <td class=" noPrint">
                                <button type="button" name="edit" id="3" class="edit_btn btn btn-warning btn-sm mr-1 mt-1" data-toggle="tooltip" title="" data-original-title="Edit">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <button type="button" name="delete" id="3" data-name="Komunikasi dan Bahasa" class="del_btn btn btn-danger btn-sm mt-1" data-toggle="tooltip" title="" data-original-title="Hapus">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div id="tableFakultas_processing" class="dataTables_processing card" style="display: none;">
                    <i class="fa fa-spinner fa-spin text-primary mr-1 ml-2">
                        </i>Sedang memproses...</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="tableFakultas_info" role="status" aria-live="polite">Menampilkan 1 sampai 3 dari 3 Data</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="tableFakultas_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="tableFakultas_previous">
                                    <a href="#" aria-controls="tableFakultas" data-dt-idx="0" tabindex="0" class="page-link">Sebelumnya</a>
                                </li>
                                <li class="paginate_button page-item active">
                                    <a href="#" aria-controls="tableFakultas" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item next disabled" id="tableFakultas_next">
                                    <a href="#" aria-controls="tableFakultas" data-dt-idx="2" tabindex="0" class="page-link">Selanjutnya</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


@endsection