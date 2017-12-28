<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            .btn-cs{
                padding: 5px 21px 5px 20px;
                font-size: 32px;
                text-decoration: none;
                background: #0a0a0c;
                color: white;
                font-weight: 600;
                border: 2px solid #fff;
            }
            .btn-cs:hover{
                text-decoration: none;
                background: white;
                color: #0a0a0c;
                border: 2px solid #0a0a0c;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                    Welcome Home!
				</div>
                <a  class="btn btn-primary btn-cs" href="{{route('themes')}}">Themes</a>
            </div>
        </div>
    </body>
</html>
