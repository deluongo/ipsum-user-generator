<!DOCTYPE html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title','P3')
    </title>

    <meta charset='utf-8'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

    <!-- Styles -->
    <link href="{{ asset('/css/master.css') }}" rel="stylesheet">

</head>
<body>
  <div class="scroll_wrapper">
    <div class="navigation">
      <nav>
        <ul>
          <li><a href="/" class="butn btn-green btn-fill-home">HOME</a></li>
          <li><a href="/ipsum" class="butn btn-blue btn-fill-vert">IPSUM</a></li>
          <li><a href="/user" class="butn btn-blue btn-fill-vert">USER</a></li>
          <li><a href="/password" class="butn btn-blue btn-fill-vert">PASSWORD</a></li>
        </ul>
      </nav>
  </div>

    <div>
      {{-- Main page content will be yielded here --}}
      @yield('content')
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')
  </div>
</body>
</html>
