<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">New <i class="material-icons">import_contacts</i></h4>
        <p class="card-category"></p>
    </div>
    <div class="card-body">
        <div class="card-title">
            <!-- Session comments -->
            <?= Util::display_msg(Session::$msg); ?>
            <!-- End session comments-->
            <h2></h2>
        </div>
        <form class="form-horizontal" method="post" id="addcategory" action="./?action=addauthor" role="form">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name" class="bmd-label-floating">Nombre*</label>

                        <input type="text" name="name" required class="form-control" id="name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastname" class="bmd-label-floating">Apellido*</label>

                        <input type="text" name="lastname" required class="form-control" id="lastname">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>