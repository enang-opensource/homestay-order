<!-- Header Section Start -->
<header id="header">
  <div class="logo">SADEWA</div>
  <div class="logo-sm">HOMESTAY</div>
  <div class="phone">
    <a href="#" class="text-white">
      <?php if (session()->get('nama_user')!=null): ?>
        Welcome, <?= session()->get('nama_user'); ?>
      <?php else: ?>
        <i class="fa fa-phone"></i>+62856-4324-9258
      <?php endif; ?>
    </a>
  </div>
  <div class="mobile-menu-btn"><i class="fa fa-bars"></i></div>
  <nav class="main-menu top-menu">
    <ul>
      @foreach ($menu as $nav)
      <li
      class="{{ strpos($nav['url'], '#') !== false ? 'menu-item' : '' }}
      {{ !isset($menu_link) ? ($nav['index'] == 1 ? 'active' : '') : (isset($active) && $nav['index'] == $active ? 'active' : '') }}">
      <a
      href="{{ strpos($nav['url'], '#') !== false ? (isset($menu_link) ? base_url('/') : '') : '' }}{{ $nav['url'] }}">
      {{ $nav['title'] }}
    </a>
  </li>
  @endforeach
</ul>
</nav>
</header>
<!-- Header Section End -->
