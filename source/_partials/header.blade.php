<header>
    <div class="container">
        <div class="logo">
          <img src="/assets/images/logo.png" alt="">
        </div>
        <ul>
          <li>
            <a href="{{ $page->baseUrl }}/posts" class="{{ $page->selected('posts') }}">所有文章</a>
          </li>
          <li>
            <a href="{{ $page->baseUrl }}/posts/Laravel" class="{{ $page->selected('laravel') }}">Laravel</a>
          </li>
          <li>
            <a href="{{ $page->baseUrl }}/posts/PHP">PHP</a>
          </li>
          <li>
            <a href="{{ $page->baseUrl }}/posts/Flask">Flask</a>
          </li>
          <li>
            <a href="{{ $page->baseUrl }}/posts/Python">Python</a>
          </li>
          <li>
            <a href="">Vue</a>
          </li>
          <li>
            <a href="">JavaScript</a>
          </li>
          <li>
            <a href="">Go</a>
          </li>
        </ul>
    </div>
</header>