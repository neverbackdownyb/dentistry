<div class="table-responsive">
    <table class="table" id="banners-table">
        <thead>
        <tr>
            <th>Tên banner</th>
            <th>Bắt đầu</th>
            <th>Kết thúc</th>
            <th colspan="3">Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($banners as $banner)
            <tr>
                <td>{{ $banner->name }}</td>
                <td>{{ $banner->start_at }}</td>
                <td>{{ $banner->end_at }}</td>
                <td>
                    {!! Form::open(['route' => ['cms.banners.destroy', $banner->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cms.banners.edit', [$banner->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
