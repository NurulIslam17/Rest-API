@extends('backend.base');
@section('title')
    Multi - data
@endsection

@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h3 class="title-1">Multiple Data</h3>
                <button class="au-btn au-btn-icon au-btn--blue">
                    <i class="zmdi zmdi-plus"></i>Add Item</button>
            </div>
        </div>
    </div>


    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3 jq-table w-100" id="example">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>date</th>
                            <th>type</th>
                            <th>description</th>
                            <th>status</th>
                            <th>price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2018-09-29 05:57</td>
                            <td>Mobile</td>
                            <td>iPhone X 64Gb Grey</td>
                            <td class="process">Processed</td>
                            <td>$999.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
@endsection
