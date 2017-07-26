@if(Session::has('message'))

    <p class="bg-danger">{{Session('message')}}</p>

@endif