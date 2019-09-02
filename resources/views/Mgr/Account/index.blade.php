@extends('Mgr.layouts.admin')

@section('content')

<style>
    .btn{
        padding: 2px;
    }
</style>

<div class="h-100 p-3 m-5" style="font-family:Microsoft JhengHei;background:rgb(255, 255, 240, 0.9);">
    <br>
<h2>帳號管理</h2>

<br>
<p>
    <a href="{{ route('MgrManagerCreate') }}">新增</a>
</p>


<div class="row" >
    <div class="col-md-12">
        <table class="table table-striped table-hover table-responsive-md">
            <thead>
                <tr>
                    <th style="width: 150px;"></th>
                    <th>信箱</th>
                    <th>姓名</th>
                    <th>狀態</th>
                    <th>登入時間</th>
                </tr>
            </thead>
            <tbody>
                @foreach($saoadmin_infos as $item)
                <tr>
                    <td>
                        <div style="min-width: 50px;">
                            <a class="btn btn-link" href="{{ Route('MgrManagerEdit', ['id' => $item->id]) }}">編輯</a> | 
                            <a class="btn btn-link" href="{{ Route('MgrManagerDelete', ['id' => $item->id]) }}" class="delete">刪除</a>
                        </div>
                    </td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->name }}</td>
                    <td style="color: {{ ($item->is_enabled == 1)?'green':'red' }};">
                        {{ ($item->is_enabled == 1)?'on':'off' }}
                    </td>
                    <td>{{ ($item->login_at == '')?'－':$item->login_at  }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

<script>
    

</script>

    
@endsection