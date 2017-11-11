@if(count($errors)>0)
    <style>
        .load_more{
            height: 100vh;
            width: 100vw;
            position:fixed;

            top:0;
            left:0;
            /*background: rgba(0,0,0,0.3);*/
            z-index: 999999;
            transition:all 0.5s;
            margin-top:100px;
        }
        .load_more ul{
            position:absolute;
            padding:10px;
            background:black;
            padding:10px 30px;
            list-style: none;
            top:50%;
            left:50%;
            transform:translate(-50%,-100%);
        }
        .load_more ul h4{
            color:white;
            margin:0;
        }

    </style>

    <div class="load_more" id="message">
        <ul >
            @foreach($errors->all() as $error)

                <li><h4>{{$error}}</h4></li>

            @endforeach
        </ul>


    </div>
    <script>

        setInterval(function(){
            $("#message").fadeOut(1000);
        },3000);


        $(function () {
            $("html, body").animate({
                scrollTop: $('html, body').get(0).scrollHeight
            }, 1000);
        });

    </script>
@endif