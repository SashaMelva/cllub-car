<!DOCTYPE html>
<html lang="ru" class="page">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>АвтоКлуб</title>

</head>
<body >
    <div id="app"  class="grid-main-content">
    <header>
      <div class="header-app-page">
        <div class="conteiner">

          <h1 class="logo-text-header">Автосервис «АвтоКлуб»</h1>
        </div>
      </div>
      <nav class="nav-header-app-page">
        <div class="conteiner nav-ul-link">
        </div>
      </nav>
    </header>

    <main class="conteiner">
      <router-view></router-view>
    </main>

    <footer class="footer-app-page">
      <div class="conteiner content-footer">
        <h1 class="logo-text-header logo-text-foter-position">Автосервис «АвтоКлуб»</h1>
        <div>
          <p>Наши контакты: <span class="span-dark-blu">8 (918) 123-12-23</span></p>
        </div>
        <div class="content-adress">
          <p>Наш адрес:</p>
          <p><span class="span-dark-blu">г. Краснодар ул. им. Красная 201</span></p>
        </div>
      </div>
    </footer>
    </div>
<script src="{{mix('js/app.js')}}"></script>
</body>
</html>
