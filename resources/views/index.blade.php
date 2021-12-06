@extends('layouts.default')

<style>
table {
  width: 90%;
}
.list {
  width: 100%;
  font-weight: bold;
}
.list td {
  text-align: center;
}
.update_btn div:first-child {
  text-align: center;
}
td {
  text-align: center;
}
.update_btn {
  display: flex;
  justify-content: space-between;
}
.update_btn div:first-child {
  width: 50%;
  text-align: center;
}
.update_btn div:last-child {
  width: 15%;
  text-align: center;
}
.update-text {
  display: flex;
  justify-content: space-between;
}
.update-text input:first-child {
  width: 60%;
}
.update-text input:last-child {
  display: block;
  padding: 7px 15px;
  background-color: white;
  color: orange;
  border: 1px solid orange;
  border-radius: 10px
}
.delete-text input:last-child {
  padding: 7px 15px;
  background-color: white;
  color: #7fffd4;
  border: 1px solid #7fffd4;
  border-radius: 10px;
}

</style>

@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<table class="update_delete_content">
  <tr class="list">
    <td>作成日</td>
    <td class="update_btn">
      <div>タスク名</div>
      
      <div>更新</div>
    </td>

    <td>削除</td>
  </tr>
@foreach($items as $item)
  @csrf
  <tr>
    <td class=creared_at>
      {{$item->created_at}}
    </td>

    <td>
      <form action="/todo/update" method="POST" name="update">
        @csrf
      <div class="update-text">
        <input type="text" name="content" value="{{$item->content}}">
        <input type="hidden" name="id" value="{{$item->id}}">
        <input type="submit" value="更新" name="update-content-btn">
      </div>
      </form>
    </td>
    <td>
      <form action="/todo/delete" method="POST" name="delete">
        @csrf
        <div class="delete-text">
          <input type="hidden" name="id" value="{{$item->id}}">
          <input type="submit" value="削除" name="delete-content-btn">
        </div>
      </form>
    </td>
  </tr>
@endforeach
</table>
@endsection


