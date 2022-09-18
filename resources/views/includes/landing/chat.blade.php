
<div class="container">
	<div class="row">
	    <div class="chatbox chatbox22 chatbox--tray rounded">
            <div class="chatbox__title">
                <h5 class="font-alerta"><a href="#!">Déjanos tus consultas</a></h5>
                <button class="chatbox__title__tray">
                    <span></span>
                </button>
            </div>
            <div class="chatbox__body bg-dg-celeste">
                <form action="consulta" method="post">
                    <div class="row ">
                        {{ csrf_field() }}
                        <div class="col-12">
                            <div class="form-group">
                                <textarea type="text" id="contacto_consulta" name="contacto_consulta" maxlength="500" class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="contacto_nombre">
                                <small>Nombre completo: <span class="text-warning">*</span></small>
                                </label>
                                <input id="contacto_nombre" name="contacto_nombre" type="text" class="form-control" maxlength="50" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="contacto_email"><small>Correo electrónico: <span class="text-warning">*</span></small></label>
                                <input type="email" id="contacto_email" name="contacto_email" class="form-control" maxlength="50" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="contacto_celular"><small>Celular: <span class="text-warning">*</span></small></label>
                                <input type="text" id="contacto_celular" name="contacto_celular" class="form-control" maxlength="50" required>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-alerta" type="submit" >Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>