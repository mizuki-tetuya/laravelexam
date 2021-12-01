<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
    body {
      max-width: 100vw;
      height: 100vh;
      background-color: DarkSlateBlue;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .content {
      background-color: white;
      box-sizing: border-box;
      width: 55%;
      height: auto;
      border-radius: 20px;
      padding: 0 30px;
    }
    h1 {
      font-size: 24px;
    }
    .addbotton {
      box-sizing: border-box;
      display: flex;
      justify-content: space-between;
    }
    .text {
      box-sizing: border-box;
      width: 100%;
    }
    .text input {
      padding: 7px 0;
      display: block;
      width: 85%;
    }
    .submit input {
      padding: 7px 15px;
      background-color: white;
      color: violet;
      border: 1px solid violet;
      border-radius: 10px;
    }
    .submit input:hover {
      color: white;
      background-color: violet;
      font-weight: bold;
    }
    .list {
      display: flex;
      justify-content: space-around;
      margin-top: 20px;
      font-weight: bold;
      font-size: 16px;
      text-align: center;
    }
    .tate {
      width: 20%;
    }
    .task {
      width: 20%;
    }
    .button {
      display: flex;
      justify-content: space-between;
      width: 20%;
    }
    </style>
  </head>
  <body>
    <div class="content">
      <h1>Todo List</h1>
      @yield('content-error')
      <form action="/todo/create" method="get">
        @csrf
        <div class="addbotton">
        <div class="text">
          <input type="text" name="content">
        </div>
        <div class="submit">
          <input type="submit" value="追加">
        </div>
      </div>
      </form>
      <div class="list">
        <div class="data">作成日</div>
        <div class="task">タスク名</div>
        <div class="button">
          <div class="update">更新</div>
          <div class="delete">削除</div>
        </div>
      </div>
      @yield('content1')
      @yield('content2')
    </div>
</body>
</html>