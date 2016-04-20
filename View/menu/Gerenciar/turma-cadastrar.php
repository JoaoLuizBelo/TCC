<fieldset class="scheduler-border col-sm-11" id="a">
    <legend class="scheduler-border">Cadastrar Turma</legend>

    <form class="form-horizontal col-sm-12" role="form">
        <div id="principal" style="padding:20px;">

            <div class="form-group">
                <label class="control-label col-sm-2" for="matr">Código da Turma:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="matr" placeholder="Ex.: Pre1Par">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="matr">Nome da Turma:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="matr" placeholder="Ex.: Pre1Par">
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-2" for="turma">Série:</label>
                <div class="col-sm-3">

                    <select class="form-control" id="turma">
                        <option>Série1</option>
                        <option>Série2</option>
                        <option>Série3</option>
                        <option>Série4</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="turma">Turno:</label>
                <div class="col-sm-2">

                    <select class="form-control" id="turma">
                        <option>Turno1</option>
                        <option>Turno2</option>
                        <option>Turno3</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="turma">Próxima Série:</label>
                <div class="col-sm-2">

                    <select class="form-control" id="turma">
                        <option>Série1</option>
                        <option>Série2</option>
                        <option>Série3</option>
                        <option>Série4</option>
                    </select>
                </div>
            </div>


            <div class="col-sm-12">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-success">Salvar</button>
                </div>
                <div class="col-sm-6">
                    <button type="button" class="btn btn-success">Limpar</button>
                </div>
            </div>
        </div>
    </form>
</fieldset>

<fieldset class="scheduler-border col-sm-11" id="b">
    <legend class="scheduler-border">Relacionar Educadores</legend>
    <div style="margin-left: 25% !important;">
        <div class="col-sm-6" id="tabela" style="">

            <table class="table table-hover table-bordered">

                <thead>
                    <tr id="tituloTabela">
                        <th>
                            <center>Ações</center>
                        </th>
                        <th>Nome</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <center>&nbsp;&nbsp;
                                <a id="def" href="h"><span class="icon-bin2"></span></a>
                            </center>
                        </td>

                        <td>PARANGARICUTIRIMICUARO JR</td>
                    </tr>
                    <tr>
                        <td>
                            <center>&nbsp;&nbsp;
                                <a id="def" href="h"><span class="icon-bin2"></span></a>
                            </center>
                        </td>
                        <td>PARANGARICUTIRIMICUARO JR</td>
                    </tr>
                    <tr>
                        <td>
                            <center>&nbsp;&nbsp;
                                <a id="def" href="h"><span class="icon-bin2"></span></a>
                            </center>
                        </td>
                        <td>PARANGARICUTIRIMICUARO JR</td>
                    </tr>
                </tbody>

            </table>
        </div>
        <div class="col-sm-6" style="margin: 10 100 10 40;">
            <button type="button" class="btn btn-success">Adicionar</button>
        </div>
    </div>
</fieldset>



<!-- jQuery (necessario para os plugins Javascript Bootstrap) -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $("#outr").change(function() {
            $(this).find("option:selected").each(function() {
                if ($(this).attr("value") == "1") {
                    $("#outro1").show();

                    window.location = "#OutroResp";
                    $("#outro2").hide();
                    $("#outro3").hide();
                } else if ($(this).attr("value") == "2") {
                    $("#outro1").show();
                    $("#outro2").show();
                    window.location = "#OutroResp";
                    $("#outro3").hide();
                } else if ($(this).attr("value") == "3") {
                    $("#outro1").show();
                    $("#outro2").show();
                    $("#outro3").show();
                    window.location = "#OutroResp";
                } else {
                    $(".oresp").hide();
                }
            });
        }).change();
    });

</script>
