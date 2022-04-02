<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $tittle }}</title>

    @include('partials.stylesheet')
  </head>

  <body>
    <div id="app">
      <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg bg-topnavbase"></div>
        @include('partials.topnav')
        @include('partials.sidebar')
        <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            <div class="section-header">
                <h1>{{ $tittle }}</h1>
            </div>
          </section>
          @yield('content')
        </div>
        <footer class="main-footer">
          @include('partials.footer')
        </div>
        </footer>
      </div>
    </div>

    @include('partials.scriptjs')
  </body>
  </html>
