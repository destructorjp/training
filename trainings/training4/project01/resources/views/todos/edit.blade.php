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
        <h1>Todoリスト更新</h1>

        <form action='{{ url('/todos',$todo->id) }}' method="post">
            {{csrf_field()}}
            {{ method_field('patch')}}
            <div class="form-group">
                <input type="text" name="body"class="form-control" value="{{ $todo->body }}" style="max-width:1000px;">
            </div>
            <button type="submit" class="btn btn-secondary">更新する</button>
        </form>
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
