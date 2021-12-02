@extends('layouts.default')

<style>



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
@foreach($items as $item)
<table>
  @csrf
  <tr>
    <td>
      {{$item->created_at}}
    </td>
    <td>
      {{$item->content}}
    </td>
    <td>
      <form action="/todo/update" method="POST">
        <input type="submit" value="更新">
      </form>
    </td>
    <td>
      <form action="/todo/delete" method="POST">
        <input type="submit" value="削除">
      </form>
    </td>
  </tr>
</table>
@endforeach
@endsection


