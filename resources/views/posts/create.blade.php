<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
   
   
    <body>
        <h1 class="Blog">Blog Name</h1>
        
        <form action="/posts" method="POST">
            @csrf
            <!--タイトル部分-->
            <div class='title'>
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value={{ old('post.title' )}}>
                <p class = 'title__error' style = 'color:red'>{{$errors->first('post.title') }}</p>
            </div>    
                
            <!--新しい本文-->
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も一日お疲れさまでした">{{ old('post.body')}}</textarea>
                <p class='body__error' style = 'color:red'>{{$errors ->first('post.body')}}</p>
            </div>
                
            <div class = "button">
                <input type="submit" value="実行">
            </div>
        </form>
        <a href="/">back</a>
    </body>
</html>
