<fieldset class="scheduler-border col-sm-11">
    <legend class="scheduler-border">Gerenciar Aluno</legend>
    <form class="form-horizontal col-sm-12" role="form">
        <div class="form-group" id="principal">
            <div class="left">

                <div class="input-group col-sm-7 has-sucess">
                    <input type="text" class="form-control has-success" placeholder="Digite aqui o nome ou número da matrícula">
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



                    <label class="control-label col-sm-2" for="turma">Turma:</label>
                    <div class="col-sm-2">

                        <select class="form-control" id="turma">
                            <option>Todas</option>
                            <option>Turma1</option>
                            <option>Turma2</option>
                            <option>Turma3</option>
                            <option>Turma4</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-sm-2 teste">
                <a href="?menu=aluno-cadastrar">
                    <button class="btn btn-primary btn-lg" type="button">
                        Cadastrar Novo Aluno </button>
                </a>
            </div>
        </div>
    </form>

</fieldset>

<div id="tabela">

    <table class="table table-hover table-bordered">

        <thead style="">
            <tr id="tituloTabela">
                <th>
                    <center>Ações</center>
                </th>
                <th>Matrícula</th>
                <th>Nome</th>
                <th>Turma</th>
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
                <td>1234321</td>
                <td>PARANGARICUTIRIMICUARO JR</td>
                <td>PARANGA@JR.COM</td>
            </tr>
            <tr>
                <td>
                    <center>&nbsp;&nbsp;

                        <a id="abc" href="#"><span class="icon-pencil"></span></a> &nbsp;&nbsp;&nbsp;
                        <a id="def" href="h"><span class="icon-bin2"></span></a>
                    </center>
                </td>
                <td>1234321</td>
                <td>PARANGARICUTIRIMICUARO JR</td>
                <td>PARANGA@JR.COM</td>
            </tr>
            <tr>
                <td>
                    <center>&nbsp;&nbsp;

                        <a id="abc" href="#"><span class="icon-pencil"></span></a> &nbsp;&nbsp;&nbsp;
                        <a id="def" href="h"><span class="icon-bin2"></span></a>
                    </center>
                </td>
                <td>1234321</td>
                <td>PARANGARICUTIRIMICUARO JR</td>
                <td>PARANGA@JR.COM</td>
            </tr>
        </tbody>

    </table>
</div>
