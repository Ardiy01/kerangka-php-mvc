<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container py-1">
      <a class="navbar-brand" href="<?= BASEURL; ?>">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav text-center">
          <li class="nav-item">
            <a class="nav-link <?php if ($data['judul'] == 'Welcome') echo 'active'; ?>" aria-current="page" href="<?= BASEURL; ?>">Home</a>
          </li>
          <li class="nav-item" id="about">
            <a class="nav-link <?php if ($data['judul'] == 'About') echo 'active'; ?>" id="link-about" href="<?= BASEURL; ?>/home/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
      </div>
    </div>
</nav>