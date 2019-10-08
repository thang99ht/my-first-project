   @extends('admin.layouts.master')
   @section('content')
   <section class="content">
        
        <div class="box row">
            <div class="col-md-6">
                <form action="admin/users/add" method="post">
                  
                    <div class="form-group">
                        <label for="name">Họ và tên</label>
                        <input id="name" type="text" name="name" placeholder="Họ và tên" class="form-control" value="{{old('name')}}">
                        @if($errors->has('name'))
                            <div class="alert alert-danger">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                    </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" name="email" placeholder="Email" class="form-control" value="{{old('email')}}">
                        @if($errors->has('email'))
                            <div class="alert alert-danger">
                                {{$errors->first('email')}}
                            </div>
                        @endif
                    </div>
    
                    <div class="form-group">
                        <label for="birthday">Sinh nhật</label>
                        <input id="birthday" type="date" name="birthday"  class="form-control" value="{{old('birthday')}}">
                        @if($errors->has('birthday'))
                            <div class="alert alert-danger">
                                {{$errors->first('birthday')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Số điện thoại</label>
                        <input id="phone_number" type="text" name="phone_number" placeholder="Nhập SĐT" class="form-control" value="{{old('birthday')}}">
                        @if($errors->has('phone_number'))
                            <div class="alert alert-danger">
                                {{$errors->first('phone_number')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input id="password" type="password" name="password" placeholder="Nhập SĐT" class="form-control" value="{{old('birthday')}}">
                        @if($errors->has('password'))
                            <div class="alert alert-danger">
                                {{$errors->first('password')}}
                            </div>
                        @endif
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                        <button type="reset" class="btn btn-sm btn-primary">Huy</button>
                    </div>
                </form>
            </div>
        </div>

    </section>
    @endsection