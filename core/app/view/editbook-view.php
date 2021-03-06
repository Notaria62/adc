<?php

$book = BookData::getById($_GET["id"]);
$categories = CategoryData::getAll();
$authors = AuthorData::getAll();
$editorials = EditorialData::getAll();

?>

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title"><?php echo $book->title; ?> <small>Editar</small>
            <i class="material-icons">edit</i></h4>
        <p class="card-category"></p>
    </div>
    <div class="card-body">
        <div class="card-title">
            <!-- Session comments -->
            <?= Util::display_msg(Session::$msg); ?>
            <!-- End session comments-->
            <h2></h2>
        </div>
        <form class="form-horizontal" role="form" method="post" action="./?action=updatebook" id="addbook">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="isbn" class="bmd-label-floating">ISBN</label>
                        <input type="text" name="isbn" class="form-control" value="<?=$book->isbn; ?>" id="isbn">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="title" class="bmd-label-floating">Titulo</label>
                        <input type="text" name="title" required class="form-control" value="<?= $book->title; ?>"
                            id="title">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="subtitle" class="bmd-label-floating">Subtitulo</label>
                        <input type="text" name="subtitle" class="form-control" value="<?=$book->subtitle; ?>"
                            id="subtitle">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="description" class="bmd-label-floating">Descripcion</label>
                        <textarea class="form-control" name="description"><?= $book->description; ?></textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="n_pag" class="bmd-label-floating">Num. Paginas</label>
                        <input type="text" name="n_pag" class="form-control" id="n_pag" value="<?= $book->n_pag; ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="year" class="bmd-label-floating">Año</label>
                        <input type="text" name="year" class="form-control" value="<?= $book->year; ?>" id="year">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="inputEmail1" class="bmd-label-floating">Categoria</label>

                        <select name="category_id" class="form-control">
                            <option value="">-- SELECCIONE --</option>
                            <?php foreach ($categories as $p) : ?>
                            <option value="<?= $p->id; ?>" <?php if ($book->category_id != null && $book->category_id == $p->id) {
    echo "selected";
} ?>>
                                <?=$p->name; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="inputEmail1" class="bmd-label-floating">Editorial</label>

                        <select name="editorial_id" class="form-control">
                            <option value="">-- SELECCIONE --</option>
                            <?php foreach ($editorials as $p) : ?>
                            <option value="<?=$p->id; ?>" <?php if ($book->editorial_id != null && $book->editorial_id == $p->id) {
    echo "selected";
} ?>>
                                <?= $p->name; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="inputEmail1" class="bmd-label-floating">Autor</label>

                        <select name="author_id" class="form-control">
                            <option value="">-- SELECCIONE --</option>
                            <?php foreach ($authors as $p) : ?>
                            <option value="<?=$p->id; ?>" <?php if ($book->author_id != null && $book->author_id == $p->id) {
    echo "selected";
} ?>>
                                <?=$p->name . " " . $p->lastname; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <input type="hidden" name="id" value="<?=$book->id; ?>">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                    <button type="reset" class="btn btn-default" id="clear">Limpiar Campos</button>
                </div>
            </div>

        </form>

    </div>
</div>