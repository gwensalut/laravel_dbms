@extends('layout.app')

@section('title')
INVENTORY
@endsection

@section('content')
<h1 class="text-center display-4">INVENTORY</h1>

<div class="container">
    <div class="card my-3">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="NAME">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="TYPE">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="SERIAL NO.">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="STOCK">
                </div>
                <div class="col d-flex justify-content-center">
                    <button type="button" class="btn btn-sm btn-success">ADD</button>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">TYPE</th>
                <th scope="col">SERIAL NO.</th>
                <th scope="col">STOCKS</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>MONITOR</td>
                <td>HARDWARE</td>
                <td>1234</td>
                <td>22</td>
                <td>
                    <button type="button" class="btn btn-sm btn-primary">EDIT</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">DELETE</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>MOUSE</td>
                <td>HARDWARE</td>
                <td>4567</td>
                <td>12</td>
                <td>
                    <button type="button" class="btn btn-sm btn-primary">EDIT</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">DELETE</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td >KEYBOARD</td>
                <td>HARDWARE</td>
                <td>8910</td>
                <td>29</td>
                <td>
                    <button type="button" class="btn btn-sm btn-primary">EDIT</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">DELETE</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection