<div class="section section-header">
    <div class="parallax filter filter-color-black">
        <div class="image"
             style="background-image: url('assets/img/header-1.jpeg')">
        </div>
        <div class="container">
            <div class="content">
                <div class="title-area">
                    <h1 class="title-modern">Huella</h1>
                        <div class="separator line-separator">♦</div>
                </div>

                <div class="button-get-started">
                    <a href="#" target="_blank" class="btn btn-white btn-fill btn-lg " data-toggle="modal" data-target="#signUp">
                        Registrate
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal Sign Up-->
<div id="signUp" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registro</h4>
            </div>
            <div class="modal-body">
                <form action = "post" method = "post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="username" class="form-control" id="username" placeholder="Nombre de usuario" name="username">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Correo electrónico" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="passwd" placeholder="Contraseña" name="passwd">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Registrate</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
