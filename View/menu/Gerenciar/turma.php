<fieldset class="scheduler-border col-sm-11">
    <legend class="scheduler-border">Gerenciar Turma</legend>
    <form class="form-horizontal col-sm-12" role="form">
        <div class="form-group" id="principal">
            <div class="left">

                <div class="input-group col-sm-7 has-sucess">
                    <input type="text" class="form-control has-success" placeholder="Digite aqui o nome da turma">
                    <span class="input-group-btn">
        <button class="btn btn-default" type="button">Pesquisar</button>
      </span>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="turma">Série:</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="turma">
                            <option>Todas</option>
                            <option>Série1</option>
                            <option>Série2</option>
                            <option>Série3</option>
                            <option>Série4</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-sm-2 teste">
                <a href="?menu=turma-cadastrar">
                    <button class="btn btn-primary btn-lg" type="button">
                        Cadastrar Nova Turma </button>
                </a>
            </div>
        </div>
    </form>

</fieldset>

<div id="tabelaTurma" class="col-sm-8">

    <table class="table table-hover table-bordered" style="left='50%';">

        <thead style="">
            <tr>
                <th class="col-sm-2"> Ações</th>
                <th>Código</th>
                <th>Turma</th>
                <th>Série</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>
                    <center>&nbsp;&nbsp;

                        <a id="abc" href="#"><span class="icon-pencil"></span></a> &nbsp;&nbsp;&nbsp;
                        <a id="def" href="h"><span class="icon-bin2"></span></a>
                    </center>
                </td>
                <td>Pre1P</td>
                <td>PRÉ 1 PARCIAL </td>
                <td>PRÉ</td>
            </tr>
            <tr>
                <td>
                    <center>&nbsp;&nbsp;

                        <a id="abc" href="#"><span class="icon-pencil"></span></a> &nbsp;&nbsp;&nbsp;
                        <a id="def" href="h"><span class="icon-bin2"></span></a>
                    </center>
                </td>
                <td>Pre1P</td>
                <td>PRÉ 1 PARCIAL </td>
                <td>PRÉ</td>
            </tr>
            <tr>
                <td>
                    <center>&nbsp;&nbsp;
                        <a id="abc" href="#"><span class="icon-pencil"></span></a> &nbsp;&nbsp;&nbsp;
                        <a id="def" href="h"><span class="icon-bin2"></span></a>
                    </center>
                </td>
                <td>Pre1P</td>
                <td>PRÉ 1 PARCIAL </td>
                <td>PRÉ</td>
            </tr>

        </tbody>

    </table>
</div>
