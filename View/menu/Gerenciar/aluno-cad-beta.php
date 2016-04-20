<div id="tudo">
    <fieldset class="scheduler-border col-sm-11" id="a">
        <legend class="scheduler-border">Aluno</legend>

        <form class="form-horizontal col-sm-12" role="form">
            <div id="principal col-sm-6">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="matr">Matrícula:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="matr" placeholder="Ex.: 1234567">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="matr">Nome:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="nome" placeholder="Ex.: ALECSSANDRO DA SILVA">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="matr">Sexo:</label>
                    <label class="radio-inline col-sm-2">
                        <input type="radio" name="optsexo">Masculino</label>
                    <label class="radio-inline col-sm-2">
                        <input type="radio" name="optsexo">Feminino</label>
                </div>


                <div class="form-group">
                    <label class="control-label col-sm-2" for="datanasc">Data de Nascimento:</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="datanasc">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="turma">Turma:</label>
                    <div class="col-sm-2">

                        <select class="form-control" id="turma">
                            <option>Turma1</option>
                            <option>Turma2</option>
                            <option>Turma3</option>
                            <option>Turma4</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Foto do aluno</label>
                    <input type="file" class="col-sm-4">
                </div>

            </div>


            <div class="form-group col-sm-12">
                <label class="control-label" for="comp">Saúde</label>
                <textarea class="form-control col-md-2" rows="3" id="saude" placeholder="Caso o aluno possua alguma restrição de saúde, descreva aqui."></textarea>

            </div>

            <div class="form-group col-sm-12">
                <label class="control-label" for="alim">Alimentação</label>
                <textarea class="form-control col-sm-5" rows="3" id="alim" placeholder="Caso o aluno possua alguma restrição alimentar, descreva aqui."></textarea>
            </div>
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-success">Salvar</button>
                </div>
                <div class="col-sm-6">
                    <button type="button" class="btn btn-success">Limpar</button>
                </div>
            </div>
        </form>
    </fieldset>

    <fieldset class="scheduler-border col-sm-11" id="b">
        <legend class="scheduler-border">Pai</legend>
        <div style="">
            <div class="col-sm-6" style=" ">
                <button type="button " class="btn btn-primary btn-lg ">Cadastrar Novo</button>
            </div>

            <div class="col-sm-6" style=" ">
                <button type="button " class="btn btn-primary btn-lg ">Associar</button>
            </div>
            <br>
            <br>
            <br>

        </div>
        <form class="form-horizontal col-sm-12" role="form">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nomePai">CPF:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="nomePai" placeholder="Ex.: 123.456.789-01">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nomePai">Nome:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nomePai" placeholder="Ex.: HENRIQUE DA SILVA">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="emailPai">Email:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="emailPai" placeholder="Ex.: HENRIQUE@GMAIL.COM">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="telPai">Telefone:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="telPai" placeholder="Ex.: (21)9999-9999">
                </div>
                <label class="control-label col-sm-2" for="celPai">Celeluar:</label>

                <div class="col-sm-3">
                    <input type="text" class="form-control" id="celPai" placeholder="Ex.: (21)9999-9999">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="rec1Pai">Recado 1:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="rec1Pai" placeholder="Ex.:(21)9999-9999">
                </div>
                <label class="control-label col-sm-2" for="rec2Pai">Recado 2:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="rec2Pai" placeholder="Ex.:(21)9999-9999">
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
        </form>
        <br>
        <br>
    </fieldset>

    <fieldset class="scheduler-border col-sm-11" id="b">
        <legend class="scheduler-border">Mãe</legend>

        <div style="">
            <div class="col-sm-6" style=" ">
                <button type="button " class="btn btn-primary btn-lg ">Cadastrar Novo</button>
            </div>

            <div class="col-sm-6" style=" ">
                <button type="button " class="btn btn-primary btn-lg ">Associar</button>
            </div>
            <br>
            <br>
            <br>

        </div>

        <form class="form-horizontal col-sm-12" role="form">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nomeMae">Nome:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nomeMae" placeholder="Ex.: MARIA DA SILVA ">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="emailMae">Email:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="emailMae" placeholder="Ex.: MARIA@GMAIL.COM">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="telMae">Telefone:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="telMae" placeholder="Ex.: (21)9999-9999">
                </div>
                <label class="control-label col-sm-2" for="celMae">Celular:</label>


                <div class="col-sm-3">
                    <input type="text" class="form-control" id="celMae" placeholder="Ex.: (21)9999-9999">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="rec1Mae">Recado 1:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="rec1Mae" placeholder="Ex.: (21)9999-9999">
                </div>
                <label class="control-label col-sm-2" for="rec2Mae">Recado 2:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="rec2Mae" placeholder="Ex.: (21)9999-9999">
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
            <br>
        </form>
    </fieldset>

    <fieldset class="scheduler-border col-sm-11" id="b">
        <legend class="scheduler-border">Responsável Pedagógico</legend>
        <div style="">
            <div class="col-sm-6" style=" ">
                <button type="button " class="btn btn-primary btn-lg ">Cadastrar Novo</button>
            </div>

            <div class="col-sm-6" style=" ">
                <button type="button " class="btn btn-primary btn-lg ">Associar</button>
            </div>
            <br>
            <br>
            <br>

        </div>
        <form class="form-horizontal col-sm-12" role="form">

            <label class="control-label col-sm-2" for="rec2Mae">CPF</label>
            <div class="input-group col-sm-4 has-sucess">
                <input type="text" class="form-control has-success" placeholder="Ex.: 123.456.789-01">
                <span class="input-group-btn">
        <button class="btn btn-default" type="button">Já existente</button>
      </span>

            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="nomeMae">Nome:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nomeMae" placeholder="Ex.: MARIA DA SILVA ">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="emailMae">Email:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="emailMae" placeholder="Ex.: MARIA@GMAIL.COM">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="telMae">Telefone:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="telMae" placeholder="Ex.: (21)9999-9999">
                </div>
                <label class="control-label col-sm-2" for="celMae">Celular:</label>


                <div class="col-sm-3">
                    <input type="text" class="form-control" id="celMae" placeholder="Ex.: (21)9999-9999">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="rec1Mae">Recado 1:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="rec1Mae" placeholder="Ex.: (21)9999-9999">
                </div>
                <label class="control-label col-sm-2" for="rec2Mae">Recado 2:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="rec2Mae" placeholder="Ex.: (21)9999-9999">
                </div>
            </div>
            <br>

            <div class="col-sm-12">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-success">Salvar</button>
                </div>
                <div class="col-sm-6">
                    <button type="button" class="btn btn-success">Limpar</button>
                </div>
            </div>
        </form>
    </fieldset>

    <fieldset class="scheduler-border col-sm-11" id="b">
        <legend class="scheduler-border">Responsável pelo Transporte</legend>
        <div class="">
            <div class="col-sm-3">
                <button type="button" class="btn btn-primary btn-md">Mãe</button>
            </div>
            <div class="col-sm-3">
                <button type="button" class="btn btn-primary btn-md">Pai</button>
            </div>
            <div class="col-sm-3">
                <button type="button" class="btn btn-primary btn-md">Responsável Pedagógico</button>
            </div>
            <div class="col-sm-3">
                <button type="button" class="btn btn-primary btn-md">Transporte Escolar</button>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <form class="form-horizontal col-sm-12" role="form">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nomeMae">Nome:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nomeMae" placeholder="Ex.: MARIA DA SILVA ">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="emailMae">Email:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="emailMae" placeholder="Ex.: MARIA@GMAIL.COM">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="telMae">Telefone:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="telMae" placeholder="Ex.: (21)9999-9999">
                </div>
                <label class="control-label col-sm-2" for="celMae">Celular:</label>


                <div class="col-sm-3">
                    <input type="text" class="form-control" id="celMae" placeholder="Ex.: (21)9999-9999">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="rec1Mae">Recado 1:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="rec1Mae" placeholder="Ex.: (21)9999-9999">
                </div>
                <label class="control-label col-sm-2" for="rec2Mae">Recado 2:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="rec2Mae" placeholder="Ex.: (21)9999-9999">
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
            <br>
        </form>
    </fieldset>

</div>

<!-- jQuery (necessario para os plugins Javascript Bootstrap) -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('.menu-anchor').on('click touchstart', function(e) {
            $('html').toggleClass('menu-active');
            e.preventDefault();
        });

    });

</script>
