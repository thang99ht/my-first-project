@extends('admin.layouts.master')
@section('content')
<section class="content">

   <div class="box">
      <div class="box-header">
         <h4>Danh sách danh mục</h4>
         <div class="row">
            <div class="col-md-4">
               <form method="get">
                  <div class="form-group">
                     <div class="input-group input-group-sm">
                        <input type="text" value="" name="keyword" class="form-control">
                        <span class="input-group-btn">
                           <button type="submit" class="btn btn-info btn-flat">Search!</button>
                        </span>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>

      <table class="table table-striped">
         <tbody>
            <tr>
               <th style="width: 10px">id</th>
               <th>Tên người dùng</th>
               <th>Sinh nhật</th>
               <th>Email</th>
               <th>Điện thoại</th>
               <th>
                  <a href="admin/users/add" class="btn btn-xs btn-primary">Thêm</a>
               </th>
            </tr>
            @foreach($users as $u)
            <tr>
               <td>{{$u['id']}}</td>
               <td>{{$u['name']}}</td>
               <td>{{$u['birthday']}}</td>
               <td>{{$u['email']}}</td>
               <td>{{$u['phone_number']}}</td>
               <td>
                  <a href="admin/users/edit/{{$u['id']}}" class="btn btn-xs btn-info">Sửa</a>
                  <a href="admin/users/delete/{{$u['id']}}" url="" class="btn btn-remove btn-xs btn-danger">Xóa</a>
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>

</section>
@endsection