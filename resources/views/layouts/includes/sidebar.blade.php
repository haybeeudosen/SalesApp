<nav class="active" id="sidebar">
    <ul class="list-unstyled lead">
        <li>
            <a href=""><i class="fa fa-home fa-lg"></i> Home</a>
        </li>

        <li>
        <a href="{{route('brand.index')}}"><i class="fa fa-club fa-lg"></i>Brand</a>
        </li>

        <li>
            <a href="{{route('category.index')}}"><i class="fa fa-file fa-lg"></i> Category</a>
        </li>

        <li>
            <a href="{{route('product.index')}}"><i class="fa fa-truck fa-lg"></i> Product</a>
        </li>
        <li>
            <a href="{{route('role.index')}}"><i class="fa fa-truck fa-lg"></i> Role</a>
        </li>
    </ul>
</nav>

<style>
    #sidebar ul.lead{
        border-bottom: 1px solid #ddbea9;
        width: fit-content;
    }
    #sidebar ul li a{
        padding: 10px;
        font-size: 1.1em;
        display: block;
        width: 30vh;
        color: #cb997e;
    }
    #sidebar ul li a:hover{
        color: #fff;
        background: #cb997e;
        text-decoration:none!important;
        }
    #sidebar ul li a i{
        margin-right: 10px;
    }
    #sidebar ul li.active>a, a[aria-expanded="true"] {
        color: #fff;
        background: #cb997e;
    }
</style>
