<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Twitter Test</title>
  
  <link href='http://fonts.googleapis.com/css?family=Lato:300|Merriweather' rel='stylesheet'>
  <link rel="stylesheet" href="styles/style.min.css">
</head>
<body>
  <header class="header">
    <h1>Twitter Feed</h1>
    <p>Following #obama</p>

    <footer class="attr">
      <p>Handcrafted by Fardeem Munir with ❤</p>
    </footer>
  </header>

  <div class="main">
    <ul class="tweets">
      <script id="tweets-template" type="text/x-handlebars-template">
      {{#each this}}
        <li>
          <img src="{{thumb}}" class="tweet__img" alt="{{author}}"/>

          <section class="tweet__author">
            <h2>{{author}}</h2>
            <h4 class="tweet__handle">{{tw_handle}}</h4>
          </section>

          <a class="tweet__text" href="{{url}}">
            <p>{{tweet}}</p>
          </a>

        </li>
      {{/each}}
      </script>
    </ul>    
  </div>


  <script src="bower/jquery/jquery.min.js"></script>
  <script src="bower/handlebars/handlebars.min.js"></script>

  <script src="scripts/main.js"></script>
</body>
</html>