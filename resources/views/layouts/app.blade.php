<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>

        <!-- CSSとJavaScript -->
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- ナビバーの内容 -->
            </nav>
        </div>
        <!-- 下記の箇所に子のviewが挿入される -->
        @yield('content')
    </body>
</html>
