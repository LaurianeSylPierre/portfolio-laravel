<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.typeit/4.4.0/typeit.min.js"></script>
    {{ Html::script('js/vue.js') }}
    {{ Html::style('css/bootstrap.min.css') }}
    {{ Html::style('css/style.css') }}
    <title>Galaxy Lau</title>
</head>
<body>

    <main>
        <div id="cadre">
            <div class="container">
                <div class="row">
                    <a href="index"><h1>Galaxy Lau</h1></a>
                </div>

    @yield('contenu')

            </div>
        </div>
    </main>

</body>
</html>
