<!DOCTYPE html>
<html>
    <head>
        <title>Themes Titles</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
				@foreach ($themes as $theme)
				{{$theme->title}}
				@endforeach

				</div>
            </div>
        </div>
    </body>
</html>
