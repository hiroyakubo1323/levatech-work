<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <!--ブログページの名前-->
        <h1 class = "blog-name">Blog Name</h1>
        
        <!--createボタンの作成-->
        <a href="/posts/create">create</a>
        
        <!--ブログ一覧-->
        <div class="posts">
             @foreach($posts as $post)
                <div class ="post">
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <p class = "body">{{$post->body}}</p>
                </div>
                
                <div class="edit_button">
                    <button onclick="location.href='/posts/{{ $post->id }}/edit'">edit</button>
                </div>
            @endforeach
        </div>
        <div class ="paginate">{{$posts->links()}}</div>
    </body>
</html>
