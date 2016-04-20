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
    <legend class="scheduler-border">Responsável</legend>
    <form class="form-horizontal col-sm-10" role="form">
        <div id="pai">
            <h3>Pai</h3>
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
        </div>
    </form>
    <br>
    <br>

    <form class="form-horizontal col-sm-10" role="form">
        <div id="Mae">
            <h3>Mãe</h3>
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
        </div>

    </form>

    <form class="form-horizontal col-sm-10" role="form">
        <div id="OutroResp">
            <h3>Outros Responsáveis</h3>
            <br>
            <div class="form-group">
                <label class="control-label col-sm-8" for="">Existem outros responsáveis? Escolha ao lado a quantidade:</label>
                <div class="col-sm-2">

                    <select class="form-control" id="outr">
                        <option value="Nao">Não</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>

                    </select>
                </div>
            </div>
            <div class="oresp scheduler-border" id="outro1">

                <div class="form-group">
                    <label class="control-label col-sm-2" for="turma">Escolha o parentesco:</label>
                    <div class="col-sm-3">

                        <select class="form-control">
                            <option>Irmã(o)</option>
                            <option>Avô(ó)</option>
                            <option>Tio(a)</option>
                            <option>Primo(a)</option>
                            <option>Outros</option>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nomePai">Nome:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nomePai" placeholder="Digite o nome do pai... ">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="emailPai">Email:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="emailPai" placeholder="Digite o email do pai...">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="telPai">Telefone:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="emailPai" placeholder="Digite o telefone do pai... Ex.:(21)9999-9999">
                    </div>
                    <label class="control-label col-sm-2" for="telPai">Celular:</label>


                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="emailPai" placeholder="Digite o telefone do pai... Ex.:(21)9999-9999">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="telPai">Recado 1:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="emailPai" placeholder="Digite o telefone do pai... Ex.:(21)9999-9999">
                    </div>
                    <label class="control-label col-sm-2" for="telPai">Recado 2:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="emailPai" placeholder="Digite o telefone do pai... Ex.:(21)9999-9999">
                    </div>
                </div>
                <br>
            </div>

            <div class="oresp" id="outro2">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="turma">Escolha o parentesco:</label>
                    <div class="col-sm-3">

                        <select class="form-control">
                            <option>Irmã(o)</option>
                            <option>Avô(ó)</option>
                            <option>Tio(a)</option>
                            <option>Primo(a)</option>
                            <option>Outros</option>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nomePai">Nome:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nomePai" placeholder="Digite o nome do pai... ">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="emailPai">Email:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="emailPai" placeholder="Digite o email do pai...">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="telPai">Telefone:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="emailPai" placeholder="Digite o telefone do pai... Ex.:(21)9999-9999">
                    </div>
                    <label class="control-label col-sm-2" for="telPai">Celular:</label>


                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="emailPai" placeholder="Digite o telefone do pai... Ex.:(21)9999-9999">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="telPai">Recado 1:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="emailPai" placeholder="Digite o telefone do pai... Ex.:(21)9999-9999">
                    </div>
                    <label class="control-label col-sm-2" for="telPai">Recado 2:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="emailPai" placeholder="Digite o telefone do pai... Ex.:(21)9999-9999">
                    </div>
                </div>
                <br>
            </div>

            <div class="oresp" id="outro3">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="turma">Escolha o parentesco:</label>
                    <div class="col-sm-3">

                        <select class="form-control">
                            <option>Irmã(o)</option>
                            <option>Avô(ó)</option>
                            <option>Tio(a)</option>
                            <option>Primo(a)</option>
                            <option>Outros</option>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nomePai">Nome:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nomePai" placeholder="Digite o nome do pai... ">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="emailPai">Email:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="emailPai" placeholder="Digite o email do pai...">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="telPai">Telefone:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="emailPai" placeholder="Digite o telefone do pai... Ex.:(21)9999-9999">
                    </div>
                    <label class="control-label col-sm-2" for="telPai">Celular:</label>


                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="emailPai" placeholder="Digite o telefone do pai... Ex.:(21)9999-9999">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="telPai">Recado 1:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="emailPai" placeholder="Digite o telefone do pai... Ex.:(21)9999-9999">
                    </div>
                    <label class="control-label col-sm-2" for="telPai">Recado 2:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="emailPai" placeholder="Digite o telefone do pai... Ex.:(21)9999-9999">
                    </div>
                </div>
                <br>
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
