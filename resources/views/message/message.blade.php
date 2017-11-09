@if(Session::has('message'))
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
        .load_more h3{
            position:absolute;
            color:white;
            background:black;
            padding:10px 30px;

            top:40%;
            left:50%;
            transform:translate(-50%,-100%);
        }

        .load_more.active{
            display:block;
    </style>

    <div class="load_more" id="message"><h3>{{Session('message')}}</h3></div>

    <script>

        setInterval(function(){
            $("#message").fadeOut(1000);
        },3000);

    </script>
@endif