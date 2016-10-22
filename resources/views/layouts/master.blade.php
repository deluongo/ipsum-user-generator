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

  <section>
    <nav>
      <ul>
        <li><a href="/" class="butn btn-green btn-fill-home">Home</a></li>
        <li><a href="/ipsums" class="butn btn-blue btn-fill-vert">Ipsum</a></li>
        <li><a href="/users" class="butn btn-blue btn-fill-vert">Users</a></li>
        <li><a href="/passwords" class="butn btn-blue btn-fill-vert">Passwords</a></li>
      </ul>
    </nav>
  </section>
  <div class="scroll_wrapper">
    <section>
      {{-- Main page content will be yielded here --}}
      @yield('content')
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')
  </div>

</body>
</html>
