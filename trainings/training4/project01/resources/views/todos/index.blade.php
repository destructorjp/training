<!doctype html>
<html lang="ja">
    <head>
        <title>Todo List</title>
        <!-- 必要なメタタグ -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>

    <body>
        <div class="container" style="margin-top:50px;">
            <h1>To Do List 追加</h1>

            <form action="{{ url('/todos')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="body" class="form-control" placeholder="todo list" style="max-widht:1000px;">
                </div>
                <button type="submit" class="btn btn-secondary">追加</button>
            </form>

            <h1 style="margin-top:50px;">Task</h1>
            <table class="table table-bordered" style="max-widht:1000px;margin-top:20px;">
                <tbody>
                @foreach ($todos as $todo)
                    <tr>
                        <td>
                            <input type="checkbox" style="margin-right:10px;">
                            {{$todo->body}}
                        </td>
                        <td>
                            <form action="{{ action('TodosController@edit', $todo) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('get') }}
                                <button type="submit" class="btn btn-secondary">編集</button>
                            </form>
                        </td>


                        <td>
                            <form action="{{url('/todos', $todo->id)}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-dark">削除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

        <!-- オプションのJavaScript -->
        <!-- 最初にjQuery、次にPopper.js、次にBootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script>
            (function() {
            'use strict';

            var cmds = document.getElementsByClassName('del');
            var i;

            for (i = 0; i < cmds.length; i++) {
                cmds[i].addEventListener('click', function(e) {
                e.preventDefault();
                if (confirm('are you sure?')) {
                    document.getElementById('form_' + this.dataset.id).submit();
                }
                });
            }
            });
        </script>
  </body>
</html>
