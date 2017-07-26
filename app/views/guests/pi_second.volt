<style>
    .extra{
        margin: 20px;
    }
</style>
{{ content() }}

<div class="row">

    <div class="col-md-12">
        <div class="page-header">
        </div>
        {{ form('guests/piSendSecond', 'method': 'post') }}
            <fieldset>
                <div class="form-group">
                    <h4>
                        Tendo em vista a constituição dos Direitos Humanos, assinale as alternativas correspondentes a cada afirmação: 
                    </h4>
                </div>
                <div class="form-group">
                    <h4>72. Governos deveriam flexibilizar seus impostos para diminuir o custo da saúde para os pacientes.</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q11') }}
                        {{ form.label('alt1q11', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q11') }}
                        {{ form.label('alt2q11', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q11') }}
                        {{ form.label('alt3q11', ['class': 'control-label']) }}
                    </div>
                </div>

                <div class="form-group">
                    <h4>73. Patentes podem ser utilizadas como incentivo ao desenvolvimento e pesquisa de novas substâncias bioquímicas.</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q12') }}
                        {{ form.label('alt1q12', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q12') }}
                        {{ form.label('alt2q12', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q12') }}
                        {{ form.label('alt3q12', ['class': 'control-label']) }}
                    </div>
                </div>

                <div class="form-group">
                    <h4>74. Governos deveriam realizar grandes aquisições de medicamentos visando garantir o acesso a medicamentos básicos pela população.</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q13') }}
                        {{ form.label('alt1q13', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q13') }}
                        {{ form.label('alt2q13', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q13') }}
                        {{ form.label('alt3q13', ['class': 'control-label']) }}
                    </div>
                </div>

                <div class="form-group">
                    <h4>75. A P&D deve ser uma das prioridades de investimento do poder público.</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q14') }}
                        {{ form.label('alt1q14', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q14') }}
                        {{ form.label('alt2q14', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q14') }}
                        {{ form.label('alt3q14', ['class': 'control-label']) }}
                    </div>
                </div>

                 <div class="form-group">
                    <h4>76. Empresas privadas ligadas ao setor da saúde devem apresentar relatórios anuais com suas ações para promover acesso às tecnologias da saúde.</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q15') }}
                        {{ form.label('alt1q15', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q15') }}
                        {{ form.label('alt2q15', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q15') }}
                        {{ form.label('alt3q15', ['class': 'control-label']) }}
                    </div>
                </div>

                <div class="form-group">
                    <h4>77. Os processos de regulamentação para o uso de medicamentos genéricos no mercado podem ser acelerados visando ao acesso a recursos básicos de saúde.</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q16') }}
                        {{ form.label('alt1q16', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q16') }}
                        {{ form.label('alt2q16', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q16') }}
                        {{ form.label('alt3q16', ['class': 'control-label']) }}
                    </div>
                </div>

                <div class="form-group">
                    <h4>78. Dos mecanismos apresentados para separar os gastos de P&D do preço final de um produto, assinale os que você tem conhecimento: </h4>
                        <div class="controls">
                            {{ form.render('alt1q17') }}
                            {{ form.label('alt1q17', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt2q17') }}
                            {{ form.label('alt2q17', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt3q17') }}
                            {{ form.label('alt3q17', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt4q17') }}
                            {{ form.label('alt4q17', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt5q17') }}
                            {{ form.label('alt5q17', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt6q17') }}
                            {{ form.label('alt6q17', ['class': 'control-label']) }}
                        </div>
                        <div class="controls extra q17_1">
                                <h4>Qual?</h4>
                                <div class="controls">
                                    {{ form.render('q17_1', ['class': 'form-control']) }}
                                </div>
                        </div>
                        <div class="controls">
                            {{ form.render('alt7q17') }}
                            {{ form.label('alt7q17', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt8q17') }}
                            {{ form.label('alt8q17', ['class': 'control-label']) }}
                        </div>
                    </div>

                    <div class="form-group">
                    <h4>79. Você considera as políticas públicas de saúde no Brasil transparentes o suficiente para a população? </h4>
                        
                        <div class="controls">
                            {{ form.render('alt1q18') }}
                            {{ form.label('alt1q18', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt2q18') }}
                            {{ form.label('alt2q18', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt3q18') }}
                            {{ form.label('alt3q18', ['class': 'control-label']) }}
                        </div>
                    </div>

                    <div class="form-group">
                    <h4>80. Para você, tentativas de retaliação do uso das flexibilidades do Acordo TRIPS da parte de algum governo de país membro/signatário devem ser punidas pelos órgãos competentes?  </h4>
                        
                        <div class="controls">
                            {{ form.render('alt1q19') }}
                            {{ form.label('alt1q19', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt2q19') }}
                            {{ form.label('alt2q19', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt3q19') }}
                            {{ form.label('alt3q19', ['class': 'control-label']) }}
                        </div>
                    </div>

                    <div class="form-group">
                    <h4>81. Você considera que as inovações em saúde no Brasil são suficientemente apoiadas e regulamentadas pelo governo?</h4>
                        
                        <div class="controls">
                            {{ form.render('alt1q20') }}
                            {{ form.label('alt1q20', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt2q20') }}
                            {{ form.label('alt2q20', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt3q20') }}
                            {{ form.label('alt3q20', ['class': 'control-label']) }}
                        </div>
                    </div>

                    <div class="form-group">
                            <h4>82. Você tem conhecimento de alguma inovação presente ou em andamento no tratamento ou combate à tuberculose? </h4>
                            <div class="controls">
                            {{ form.render('alt1q21') }}
                            {{ form.label('alt1q21', ['class': 'control-label']) }}
                            </div>
                            <div class="controls extra q21_1">
                                <h4>Qual?</h4>
                                <div class="controls">
                                    {{ form.render('q21_1', ['class': 'form-control']) }}
                                </div>
                            </div>
                            <div class="controls">
                            {{ form.render('alt2q21') }}
                            {{ form.label('alt2q21', ['class': 'control-label']) }}
                            </div>  
                    </div>
                    
                </div>
                
                <div class="form-group">
                    {{ submit_button('Submeter', 'class': 'btn btn-primary btn-large') }}
                </div>
            </fieldset>
        </form>
    </div>
    </div>
{{ assets.outputJs() }}
<script>
        $(".extra").hide();
        $("#alt6q17").on("click", function() {
            $(".q17_1").show();
        });
        $("#alt7q17").on("click", function() {
            $(".q17_1").hide();
            $("#alt6q17_1").prop('checked', false);
        });
        $("#alt8q17").on("click", function() {
            $(".q17_1").hide();
            $("#alt6q17_1").prop('checked', false);
        });

        $("#alt1q21").on("click", function() {
            $(".q21_1").show();
        });
        $("#alt2q21").on("click", function() {
            $(".q21_1").hide();
            $("#alt1q21_1").prop('checked', false);
        });
</script>