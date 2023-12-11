@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
        <span class="text-bold" style="font-size: 23px">
            {{ __('Account') }}
        </span>
        </div>
        <div class="card-body p-3 mr-3">
            <div class="mb-5">
                   <div class="row">
                       <div class="col-6">
                           <select class="custom-select select2 username select2-hidden-accessible" name="Symbols"
                                   data-select2-id="select2-data-1-l6vo" tabindex="-1" aria-hidden="true">
                               <option value="" data-select2-id="select2-data-3-eqg2">
                                   Chọn Tên Đăng Nhập
                               </option>
                               @foreach($users as $u)
                                   <option value="{{ $u->id }}">{{ $u->username }}</option>
                               @endforeach
                           </select>
                       </div>
                       <button type="submit" class="btn btn-info filter mr-2">Tìm Kiếm</button>
                       <a class="btn btn-success" style="width: 180px">
                           Thêm Mới Tài Khoản
                       </a>
                   </div>
            </div>
            <table class="table table-striped table-hover mt-5" id="tableUser" width="100%">
                <thead>
                <tr>
                    <th  rowspan="1" colspan="1">ID</th>
                    <th  rowspan="1" colspan="1">Tên Đăng Nhập</th>
                    <th  rowspan="1" colspan="1">Email</th>
                    <th  rowspan="1" colspan="1">Role</th>
                    <th  rowspan="1" colspan="1">Thời gian tạo</th>
                    <th  rowspan="1" colspan="1">Thời gian cập nhật
                    </th>
                    <th  rowspan="1" colspan="1">Hành Động</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->roles)
                                {{ $user->roles->implode('name', ', ') }}
                            @endif
                        </td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">
                                <i class="fa fa-edit"></i>
                            </a>

                            <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#tableUser').DataTable({
                "processing": true,
                "pageLength": 10
            });
        });
    </script>

@endpush

