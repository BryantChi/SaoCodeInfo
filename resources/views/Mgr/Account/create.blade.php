@extends('Mgr.layouts.admin')

@section('content')

<div class="h-100 p-3 m-5" style="font-family:Microsoft JhengHei;background:rgb(255, 255, 240, 0.9);">

    <br>
    <h2>新增</h2>
    
    <h4>帳號資料  <span style="font-size: 15px;">「※」號為必填欄位</span></h4>
    <hr />
    <div class="row">
        <div class="col-md-12">
        <form action="" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email" class="control-label">信箱 ※</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ $saoadmin_info->email }}" required />
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">密碼 ※</label>
                    <input type="password" id="password" name="password" class="form-control" required />
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">姓名 ※</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ $saoadmin_info->name }}" />
                </div>
                <div class="form-group">
                    <label for="is_enabled" class="control-label">是否啟用 ※</label>
                    <select class="form-control" name="is_enabled" id="is_enabled">
                        <option value="true" {{ $saoadmin_info->is_enabled ? "selected" : "" }}>啟用</option>
                        <option value="false" {{ $saoadmin_info->is_enabled ? "" : "selected" }}>停用</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="新增" class="btn btn-primary" />
                    <a class="btn" href="{{ route('MgrManagerIndex') }}">返回</a>
                </div>
            </form>
        </div>
    </div>
    
    <div>
        
    </div>
</div>


@endsection