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
        {{ form('guests/piSendThird', 'method': 'post') }}
            <fieldset>
                <div class="form-group">
                    <h4>
                        Assinale a opção para as afirmações a seguir:  
                    </h4>
                </div>
                <div class="form-group">
                    <h4>83. No Brasil, as inovações tecnológicas na área da saúde podem sofrer mudanças visando o acesso da população à saúde pública:</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q22') }}
                        {{ form.label('alt1q22', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q22') }}
                        {{ form.label('alt2q22', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q22') }}
                        {{ form.label('alt3q22', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>84. O Brasil precisa conciliar seu desenvolvimento tecnológico com as políticas de acesso à saúde.</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q23') }}
                        {{ form.label('alt1q23', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q23') }}
                        {{ form.label('alt2q23', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q23') }}
                        {{ form.label('alt3q23', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>85. O uso de mecanismos como Licenças Compulsórias para uso de medicamentos patenteados deve ser mais intensificado visando ao acesso aos cuidados de saúde básica.</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q24') }}
                        {{ form.label('alt1q24', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q24') }}
                        {{ form.label('alt2q24', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q24') }}
                        {{ form.label('alt3q24', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>86. A fabricação de genéricos deve ser amplamente viabilizada, tendo como objetivo a diminuição dos monopólios farmacêuticos, tanto no Brasil como no mundo todo. </h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q25') }}
                        {{ form.label('alt1q25', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q25') }}
                        {{ form.label('alt2q25', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q25') }}
                        {{ form.label('alt3q25', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>87. A concessão de patentes secundárias ou de segundo uso precisa ser regularizada com mais afinco e rigor evitando práticas para estender monopólios farmacêuticos (conhecidas como “evergreening”, em inglês). </h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q26') }}
                        {{ form.label('alt1q26', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q26') }}
                        {{ form.label('alt2q26', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q26') }}
                        {{ form.label('alt3q26', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>88. As universidades brasileiras podem ser mais inseridas no desenvolvimento tecnológico industrial, tendo em vista que existem pesquisas que permanecem restritas ao meio acadêmico. </h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q27') }}
                        {{ form.label('alt1q27', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q27') }}
                        {{ form.label('alt2q27', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q27') }}
                        {{ form.label('alt3q27', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>89. O acesso aos medicamentos patenteados pode ser facilitado por acordos internacionais, aumentando o acesso a medicamentos para doenças tidas como negligenciadas.</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q28') }}
                        {{ form.label('alt1q28', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q28') }}
                        {{ form.label('alt2q28', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q28') }}
                        {{ form.label('alt3q28', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>90. Governos podem se unir para buscar formas de financiamento para inovações na área da saúde.</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q29') }}
                        {{ form.label('alt1q29', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q29') }}
                        {{ form.label('alt2q29', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q29') }}
                        {{ form.label('alt3q29', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>91. Você acredita na possibilidade de junções dos setores público e privado para aumentar a qualidade e garantir o acesso à saúde pública?</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q30') }}
                        {{ form.label('alt1q30', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q30') }}
                        {{ form.label('alt2q30', ['class': 'control-label']) }}
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

        $("#alt1q21").on("click", function() {
            $(".q21_1").show();
        });
        $("#alt2q21").on("click", function() {
            $(".q21_1").hide();
            $("#alt1q21_1").prop('checked', false);
        });
</script>