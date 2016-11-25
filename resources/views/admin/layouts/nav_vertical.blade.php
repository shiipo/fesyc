<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banner">
                        <img src="{{ asset('imagenes/banner/banner1.jpg') }}" alt="" width="100%" height="200px" class="img-responsive center-block">
                        <div class="info container-fluid">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="{{ asset('imagenes/logo.png') }}" alt="" class="img-circle" width="50px" height="50px">
                                </div>
                                <div class="col-sm-8">
                                    <p><small>{{ ucwords(Auth::user()->name) }}  {{ ucwords(Auth::user()->apellido) }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="list-group">
                <a class="list-group-item" href="#">
                    <i class="fa fa-id-card fa-fw" aria-hidden="true"></i>&nbsp;
                    Información Básica</a>
                <a class="list-group-item" href="#">
                    <i class="fa fa-graduation-cap fa-fw" aria-hidden="true"></i>&nbsp;
                    Información Académica</a>
                <a class="list-group-item" href="#">
                    <i class="fa fa-suitcase fa-fw" aria-hidden="true"></i>&nbsp;
                    Experiencia Laboral</a>
                <a class="list-group-item" href="#">
                    <i class="fa fa-user-plus fa-fw" aria-hidden="true"></i>&nbsp;
                    Formación de Talentos</a>
                <a class="list-group-item" href="#">
                    <i class="fa fa-desktop fa-fw" aria-hidden="true"></i>&nbsp;
                    Actividades de CTI</a>
                <a class="list-group-item" href="#">
                    <i class="fa fa-calendar-check-o fa-fw" aria-hidden="true"></i>&nbsp;
                    Participación en Eventos</a>
            </div>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores blanditiis consectetur eveniet maiores maxime nihil, qui. Ad, esse in incidunt nobis obcaecati officiis perferendis quos reiciendis repudiandae sint sit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam delectus dolorem earum error id in inventore iure maiores, minima mollitia perspiciatis quae quasi, quia ratione rerum sint sunt totam voluptas!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam delectus dolorem earum error id in inventore iure maiores, minima mollitia perspiciatis quae quasi, quia ratione rerum sint sunt totam voluptas!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam delectus dolorem earum error id in inventore iure maiores, minima mollitia perspiciatis quae quasi, quia ratione rerum sint sunt totam voluptas!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam delectus dolorem earum error id in inventore iure maiores, minima mollitia perspiciatis quae quasi, quia ratione rerum sint sunt totam voluptas!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam delectus dolorem earum error id in inventore iure maiores, minima mollitia perspiciatis quae quasi, quia ratione rerum sint sunt totam voluptas!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam delectus dolorem earum error id in inventore iure maiores, minima mollitia perspiciatis quae quasi, quia ratione rerum sint sunt totam voluptas!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->