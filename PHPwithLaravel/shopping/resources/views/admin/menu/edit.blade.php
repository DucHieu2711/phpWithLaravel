<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.admin')

@section('title')
    <title>Cập nhật MENU</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.contentHeader',['name' => 'MENU', 'key' => 'Cập nhật'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 ml-5">
                        <form action="{{route('menus.update',['id' => $menuFollowDelete->id])}}" method="post">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Tên MENU:</label>
                                <input type="text" name="name" class="form-control" placeholder="Nhập MENU" value="{{ $menuFollowDelete->name }}" >

                            </div>
                            <div class="form-group">
                                <label>Chọn MENU cha</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">Chọn MENU cha</option>
                                    {!! $optionSelect !!}
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Cập nhật MENU</button>
                        </form>
                    </div>
                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

