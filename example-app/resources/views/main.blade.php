<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>
        Jela svijeta
    </title>
</head>
<body>
    <header>
        <h1>
            {{$heading}}
        </h1>
        <div></div>
        <nav>
            <a href="">
                Kategorija 1
            </a>
            <a href="">
                Kategorija 2
            </a>
            <a href="">
                Kategorija 3
            </a>
        </nav>
    </header>
    <div>
        <div>
            <hr>
            <h2>
                Kategorija 1
            </h2>
            <section>

                @if(count($meals) == 0)
                    <p>
                        Trenutno nema objavljenih jela
                    </p>
                @endif

                @foreach($meals as $meal)
                <article>
                    <h3>
                        {{$meal['title']}}
                    </h3>
                    <x-meal_tag :tags_csv="$meal['tags']" />
                    <img src="">
                    <x-meal_ingredient :ingredients_csv="$meal['ingredients']" />
                </article>
                <hr>
                @endforeach

            </section>
            <hr>
        </div>
    </div>
    <footer>
        <div></div>
        <p>
        </p>
    </footer>
</body>
</html>