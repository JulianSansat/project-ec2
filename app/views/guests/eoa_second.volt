<style>
    .extra{
        margin: 20px;
    }
</style>
{{ content() }}

<div class="row">

    <div class="col-md-12">
        <div class="page-header">
            <h4>Para as perguntas a seguir, considere a ferramenta de quatro ações aplicada em um sistema de saúde, considerando os valores de produtos, serviços e entrega: </h4>
        </div>
        {{ form('guests/eoaSendSecond', 'method': 'post') }}
            <fieldset>
                <div class="form-group">
                    <h4>19. Processos de registros burocráticos e repetitivos geram gastos de tempo para o paciente e podem ser reduzidos.</h4>
                        
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
                    <h4>20. O custo com pessoal para realizar os serviços burocráticos pode ser reduzido. </h4>
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
                    <h4>21. Aspectos como a flexibilidade de preços podem ser significativos. </h4>
                    <div class="controls">
                        {{ form.render('alt1q21') }}
                        {{ form.label('alt1q21', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q21') }}
                        {{ form.label('alt2q21', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q21') }}
                        {{ form.label('alt3q21', ['class': 'control-label']) }}
                    </div>
                </div>

                <div class="form-group">
                    <h4>22. A criação de um sistema de registros e agendamentos geral pode significar mais disponibilidade de serviços para o paciente. </h4>
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
                    <h4>23. A Estratégia do Oceano Azul pode ser aplicada na indústria farmacêutica visando intensificar o combate de doenças negligenciadas. </h4>
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
                
                </div>
                
                <div class="form-group">
                    {{ submit_button('Submeter', 'class': 'btn btn-primary btn-large') }}
                </div>
            </fieldset>
        </form>
    </div>
    </div>
{{ assets.outputJs() }}