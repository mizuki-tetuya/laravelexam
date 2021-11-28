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

<table>
  @csrf
  <tr>
    <td>
      <div class="date-now">{{$date}}</div>
    </td>
    <td>
      <input type="text" name="items" value={{$item}}>
    </td>
    <td>
      <form action="/todo/update">
        <input type="submit" value="更新">
      </form>
    </td>
    <td>
      <form action="/todo/delete">
        <input type="submit" value="削除">
      </form>
    </td>
  </tr>
</table>
</ul>

@endsection