@extends('Mgr.layouts.admin')

@section('content')

<style>

    .btn{
        padding: 3px!important;
    }
</style>

<div class="h-100 p-3 m-5" style="font-family:Microsoft JhengHei;background:rgb(255, 255, 240, 0.9);overflow: scroll;">

        <br>
        <p>
            <a class="btn btn-primary" href="{{ route('MgrSaologinExcelExport') }}">匯出Excel</a>
        </p>
        <div class="row p-3">
        
            <div class="ml-auto">
        
                {{ $saologin_infos->appends(['search' => $search])->links('vendor.pagination.bootstrap-4') }}
        
                <form action="" method="get" class="p-0 m-0">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" id="search" placeholder="輸入關鍵字">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit">搜尋</button>
                        </span>
                    </div>
                </form>
        
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-12">
                <div class="text-right">第 {{ $saologin_infos->firstItem() }} ~ {{ $saologin_infos->lastItem() }} 筆，共
                    {{ $saologin_infos->total() }} 筆</div>
                <table style="word-wrap:break-word;word-break:break-all;"
                    class="table table-striped table-hover table-responsive-lg">
                    <thead>
                        <tr class="table-info">
                            <th style=""></th>
                            <th style="">FBID</th>
                            <th style="">FB名稱</th>                            
                            <th style="">地區</th>
                            <th style="">裝置</th>
                            <th style="">手機號碼</th>
                            <th style="">登錄時間</th>
                            <th style="">建檔時間</th>
                            <th style="">更新時間</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($saologin_infos as $item)
                        <tr>
                            <td>
                                <div style="min-width: 50px;">
                                    <a class="btn btn-primary p-1 mt-1" href="{{ Route('MgrSaologinEdit', ['id' => $item->id]) }}">編輯</a> |
                                    <button class="delete btn btn-danger p-1 mt-1"
                                        onclick=" del('{{ Route('MgrSaologinDelete', ['id' => $item->id]) }}' )">刪除</button>
                                </div>
                            </td>
                            <td class="">{{ $item->fbUid }}</td>
                            <td>{{ $item->fbName }}</td>
                            <td>{{ $item->location }}</td>
                            <td>{{ $item->mobileType }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->LoginTime }}</td>                            
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-right">第 {{ $saologin_infos->firstItem() }} ~ {{ $saologin_infos->lastItem() }} 筆，共
                    {{ $saologin_infos->total() }} 筆</div>
            </div>
        </div>
        
        <div class="row p-3">
            <div class="ml-auto">
                {{ $saologin_infos->appends(['search' => $search])->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>

</div>

<script>

    function del(delurl){
        var check = confirm('是否刪除此登錄資料?');
        if(check == true){
            $.ajax({
                url: delurl, 
                type: 'POST',
                data: { _token : '<?php echo csrf_token()?>'},
                dataType: 'json', 
                success: function(data){
                    if(data.res == "true")
                    {
                        alert('資料刪除成功!!!');
                        window.location.reload();
                    }
                },
                error: function(xhr, type){ 
                    alert('Ajax error!') ;
                } 
            })
        }
    }

</script>
    
@endsection