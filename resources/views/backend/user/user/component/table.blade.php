<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value ="" id="checkAll" class = "input-checkbox">
        </th>
        <th>Họ Tên</th>
        <th>Email</th>
        <th>Số Điện Thoại</th>
        <th>Địa chỉ</th>
        <th class = "text-center">Tình Trạng</th>
        <th class = "text-center">Thao Tác</th>
    </tr>
    </thead>
    <tbody>
        @if(isset($users) && is_object($users))
        @foreach($users as $user)
        <tr>
        <td>
            <input type="checkbox" value ="{{$user->id}}"class = "input-checkbox checkBoxItem">
        </td>
        <td>
            {{$user->name}}
        </td>
        <td>
            {{$user->email}}
        </td>
        <td>
            {{$user->phone}}
        </td>
        <td>
            {{$user->address}}
        </td>
        <td class = "text-center js-switch -{{$user->id}}">
            <input type="checkbox" value="{{ $user->publish}}" 
            class="js-switch status" data-field="publish" 
            data-model="User" {{($user->publish == 2) ? 'checked' : ''}}
             data-modelId="{{$user->id}}" />
        </td>
        <td class="text-center">
            <a href="{{route('user.edit',$user->id)}}" class = "btn btn-success"><i
            class="fa fa-edit"></i></a>
            <a href="{{route('user.delete',$user->id)}}" class = "btn 
            btn-danger"><i class="fa fa-trash"></i></a>
        </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
{{ $users->links('pagination::bootstrap-4') }}