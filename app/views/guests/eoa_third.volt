<style>
    .extra{
        margin: 20px;
    }
</style>
{{ content() }}

<div class="row">

    <div class="col-md-12">
        <div class="page-header">
            <h4>Para as perguntas a seguir, considere o contexto do combate à tuberculose. Existem estratégias de entrega de serviços (como a estratégia DOTS – do 
                inglês Directly Observed Treatment Short-term - Tratamento Diretamente Observado de Curto Prazo), mas elas não se mostraram suficientes para atingir
                as metas de redução de casos e aumento das taxas de cura estabelecidas pela OMS.</h4>
        </div>
        {{ form('guests/eoaSendThird', 'method': 'post') }}
            <fieldset>
                <div class="form-group">
                    <h4>24. O combate à tuberculose pode estar “navegando em um oceano vermelho”.</h4>
                        
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
                    <h4>25. Os programas e intervenções realizados atualmente podem ser reformulados seguindo os moldes propostos pela Estratégia do Oceano Azul. </h4>
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
                    <h4>26. Você tem interesse em saber mais sobre a Estratégia do Oceano Azul? </h4>
                    <div class="controls">
                        {{ form.render('alt1q26') }}
                        {{ form.label('alt1q26', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q26') }}
                        {{ form.label('alt2q26', ['class': 'control-label']) }}
                    </div>
                </div>

                <div class="form-group">
                    <h4>27. Você considera a Estratégia do Oceano Azul um conteúdo válido a ser inserido nos currículos de cursos superiores? </h4>
                    <div class="controls">
                        {{ form.render('alt1q27') }}
                        {{ form.label('alt1q27', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q27') }}
                        {{ form.label('alt2q27', ['class': 'control-label']) }}
                    </div>
                </div>

                <div class="form-group">
                    <h4>28. Você considera importante a difusão dos conhecimentos sobre a Estratégia do Oceano Azul no ambiente corporativo brasileiro? </h4>
                    <div class="controls">
                        {{ form.render('alt1q28') }}
                        {{ form.label('alt1q28', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q28') }}
                        {{ form.label('alt2q28', ['class': 'control-label']) }}
                    </div>
                </div>

                <div class="form-group">
                    <h4>29. Você considera a Estratégia do Oceano Azul viável em um âmbito geral? </h4>
                    <div class="controls">
                        {{ form.render('alt1q29') }}
                        {{ form.label('alt1q29', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q29') }}
                        {{ form.label('alt2q29', ['class': 'control-label']) }}
                    </div>
                </div>

                <div class="form-group">
                    <h4>30. Você proporia a Estratégia do Oceano Azul como caminho a ser seguido pela instituição na qual trabalha? </h4>
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
