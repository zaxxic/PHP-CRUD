<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"> <h3>Zaxic  <span style="color: black">Blog</span></h3></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          
          <a class="nav-link {{ ($tittle === "home") ? 'active' : ''}}" aria-current="page" href="/">Home</a>
          <a class="nav-link {{($tittle === "about") ? 'active' : ''}}" href="/about">About</a>
          <a class="nav-link {{($tittle === "blog") ? 'active' : ''}}" href="/blog">Blog</a>
          
        </div>
      </div>
    </div>
  </nav>