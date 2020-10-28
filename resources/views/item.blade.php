<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
            .active{
                background: yellow;
            }
        </style>
    </head>
     @if(count($errors) > 0)
        <div class="alert alert-danger">
           <ul>
           @foreach($errors->all() as $error)
            <li>{{$error}}</li>
           @endforeach
           </ul>
        </div>
    @endif
      @if(\Session::has('success'))
              <div class="alert alert-success">
               <p>{{ \Session::get('success') }}</p>
              </div>
             @endif
    <body>
        <div class="flex-center position-ref full-height">
           
          

            <div class="content">

                <div class="links">
                    <h1><b>Item Management Page</h1></b>    
                        <form class="form-inline" method ="post" action="{{url('/add')}}">
                        	@csrf
                              <input type="text" id="item" placeholder="Enter item" name="name">
                              <button type="submit">Add</button>
                        </form><br>
                        <div class="row">
                            <div class="col-sm-4">
                                <ul class="list">
                                    @foreach( $item as $val)
                                         <li class="list_a"> {{ $val->name }} </li>
                                    @endforeach
                                    
                         

                                </ul>
                            </div>
                               <div class="col-sm-2">
                                    <button id="left"> > </button>
                                     <button id="right"> < </button>
                               </div>
                            <div class="col-sm-4">
                                  <ul id="list_b" class ="list_b">
                                   

                                </ul>
                            </div>

                        </div>
                 
               
                </div>
            </div>
        </div>
<script>

var selector = '.list li';

$(selector).on('click', function(){
    $(selector).removeClass('active');
    $(this).addClass('active');
});

$('#left').on('click', function(){
     var  val =$('.active').text();
     $('#list_b').append('<li class="list_b_element">'+val+'</li>')
});

$(document).on("click", "#list_b > li" , function() {
   $('.list_b_element').removeClass('active');
   $(this).addClass("active");
});

$('#right').on('click', function(){
     var  val = $('#list_b').find('li.active').text();
     $('.list').append('<li class="list_b_element">'+val+'</li>')
});

</script>
    </body>
</html>
