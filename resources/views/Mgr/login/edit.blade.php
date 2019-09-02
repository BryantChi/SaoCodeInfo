@extends('Mgr.layouts.admin')

@section('content')
<div class="h-100 p-3 m-5" style="font-family:Microsoft JhengHei;background:rgb(255, 255, 240, 0.9);">
    <br>
<h2>編輯</h2>

<h4>登錄資料 <span style="font-size: 15px;">「※」號為必填欄位</span></h4>
<hr />
<div class="row">
    <div class="col-md-12">
        <form action="" method="post">
        	{{ csrf_field() }}
            <div class="form-group">
                <label for="UID" class="control-label">FBUID ※</label>
                <input type="text" id="UID" name="UID" class="form-control" value="{{ $saologin_info->fbUid }}" readonly />
            </div>
            <div class="form-group">
                <label for="fbName" class="control-label">FB名稱 ※</label>
                <input type="text" id="fbName" name="fbName" class="form-control" value="{{ $saologin_info->fbName }}" />
            </div>
            <div class="form-group">
                <label for="location" class="control-label">地區 ※</label>
                <select class="form-control" name="location" id="location">
                    <option value="台灣" {{ ($saologin_info->location == '台灣') ? "selected" : "" }}>台灣</option>
                    <option value="香港" {{ ($saologin_info->location == '香港') ? "selected" : ""  }}>香港</option>
                </select>
            </div>
            <div class="form-group">
                <label for="mobileType" class="control-label">裝置 ※</label>
                <select class="form-control" name="mobileType" id="mobileType">
                    <option value="Android" {{ ($saologin_info->mobileType == 'Android') ? "selected" : "" }}>Android</option>
                    <option value="iOS" {{ ($saologin_info->mobileType == 'iOS') ? "selected" : ""  }}>iOS</option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone" class="control-label">手機號碼 ※</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ $saologin_info->phone }}" />
            </div>
            <div class="form-group">
                <input type="submit" value="更新" class="btn btn-primary" />
                <a class="btn" href="{{ route('MgrSaologinIndex') }}">返回</a>
            </div>
        </form>
    </div>
</div>

<div>
    
</div>
</div>



@endsection