    <!-- Button trigger modal -->
{{-- <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-outline rounded-pill"><i class="fa fa-list" aria-hidden="true"></i></a> --}}

    <!-- icons -->

<a href="{{route('user.index')}}" class="btn btn-outline rounded-pill" id="user"><i class="fa fa-user" aria-hidden="true"></i>User</a>
<a href="#" class="btn btn-outline rounded-pill"><i class="fa fa-phone" aria-hidden="true"></i>Contact us</a>
<a href="#" class="btn btn-outline rounded-pill"><i class="fa fa-users" aria-hidden="true"></i>About Us </a>
<a href="#" class="btn btn-outline rounded-pill"><i class="fa fa-plug" aria-hidden="true"></i>Services</a>


<style>
    .btn-outline{
        border-color: #cb997e;
        color: #cb997e;
        margin-left: 5px;
    }
    .btn-outline:hover{
        background: #cb997e;
        color: #ffe8d6;
    }

    /* btn for user */
    #user{
        margin-left: 4em;
    }
</style>
