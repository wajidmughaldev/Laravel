<div class="container">
    @includeIf('pages/components/sidebar')

    <main class="content">
      @hasSection ('content')
        @yield('content')
      @else
        <h1>No content found</h1>  
      @endif
    </main>
  </div>