<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                
                <div class="container">
                    <input type="text" class="form-control string-target" name="">
                    <br>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary">Click Me!</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
       
        $('.btn').on('click',function(){
            var str = $('.string-target').val();
            if(!str){
                alert('Please enter the string.');
                return false;
            }
            isSpliceJoin(str, 2);
        })

     function isSpliceJoin(str, int){
        var target = 'abaca';
        var tempStr = str.split(''),
              tempTarget = target.split('');
          
          for (var val of tempTarget) {
            var foundIndex = tempStr.includes(val);
            if (foundIndex) {
              tempStr.splice(tempStr.indexOf(val), 1);
            } else {
                alert('false')
              return false;
            }
          }
          alert('true')
          return true;
     }
    </script>
</html>
