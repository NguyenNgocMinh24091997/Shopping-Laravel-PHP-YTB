@extends('layout.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    @include('partials.content-header', ['name'=>'Menu', 'key'=>'List'] )


    <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('menu.create')}}" class="btn btn-success float-right m-2">Add</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên menu</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($menus as $menu)
                            <tr>
                                <th scope="row">{{$menu->id}}</th>
                                <td>{{$menu->name}}</td>
                                <td>
                                    <a href="{{route('menu.edit', ['id'=>$menu['id']])}}" class="btn btn-default">Edit</a>
                                    <a href="{{route('menu.delete', ['id'=>$menu['id']])}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">{{$menus->links('pagination::bootstrap-4')}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection



