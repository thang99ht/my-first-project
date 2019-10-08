  @extends('admin.layouts.master')
  @section('content')
  <section class="content">

      <div class="box row">
          <div class="col-md-6">
              <form action="{{route('postEdit',['id'=>$user->id])}}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="form-group">
                      <label for="">Tên</label>
                      <input type="text" name="name" value="{{$user->name}}" placeholder="Nhập tên" class="form-control">

                  </div>
                  <div class="form-group">
                      <label for="">Email</label>
                      <input type="text" name="email" value="{{$user->email}}" placeholder="Nhập email" class="form-control">

                  </div>
                  <div class="form-group">
                      <label for="">Sinh nhật</label>
                      <input type="date" name="birthday" value="{{$user->birthday}}" class="form-control">

                  </div>
                  <div class="form-group">
                      <label for="">SĐT</label>
                      <input type="text" name="phone_number" value="{{$user->phone_number}}" placeholder="Nhập SĐT" class="form-control">

                  </div>
                  <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input id="password" type="password" name="password" value="{{$user->password}}" placeholder="Nhập mật khẩu" class="form-control" value="{{old('birthday')}}">
                        @if($errors->has('password'))
                            <div class="alert alert-danger">
                                {{$errors->first('password')}}
                            </div>
                        @endif
                    </div>
                  <div class="text-center">
                      <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                      <a href="#" class="btn btn-sm btn-danger">Hủy</a>
                  </div>
              </form>
          </div>
      </div>

  </section>
  @endsection