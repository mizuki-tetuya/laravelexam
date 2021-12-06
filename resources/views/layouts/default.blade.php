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

      @yield('content')
    </div>
</body>
</html>