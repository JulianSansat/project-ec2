<style>
    .extra{
        margin: 20px;
    }
</style>
{{ content() }}

<div class="row">

    <div class="col-md-12">
        <div class="page-header">
            <h2></h2>
        </div>
        <h4>No contexto do combate à tuberculose, a pobreza é tida como um fator diretamente 
            relacionado com as condições da doença. No Brasil, mesmo com terapia e medicação disponíveis, 
            os casos de tuberculose são crescentes e ainda matam cerca de 5,5 mil pessoas ao ano (OMS, Relatório Mundial da Saúde, 2016) 
            o que aponta a necessidade de novas formas de combate. De acordo com o texto acima, responda.</h4>
        {{ form('guests/banerjeeSendThird', 'method': 'post') }}
            <fieldset>
                <div class="form-group">
                    <h4>52. Você considera as políticas de combate à tuberculose existentes no Brasil suficientes para a erradicação da doença?</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q22') }}
                        {{ form.label('alt1q22', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q22') }}
                        {{ form.label('alt2q22', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>53. Você considera o Método Banerjee uma opção para intensificar o combate à tuberculose?</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q23') }}
                        {{ form.label('alt1q23', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q23') }}
                        {{ form.label('alt2q23', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>54. Você tem conhecimento sobre alguma política pública que enfatize o combate à tuberculose no Brasil?</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q24') }}
                        {{ form.label('alt1q24', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q24') }}
                        {{ form.label('alt2q24', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>55. Com base em seus conhecimentos sobre o assunto, acredita que acabar com a pobreza possa significar direta ou indiretamente um avanço no combate à tuberculose?</h4>
                        
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
                    <h4>56. Você tem conhecimento de alguma política pública no contexto brasileiro que tenha sido elaborada com o Método Banerjee? </h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q26') }}
                        {{ form.label('alt1q26', ['class': 'control-label']) }}
                    </div>
                    <div class="controls extra q26_1">
                        <h4>Qual?</h4>
                        <div class="controls">
                            {{ form.render('q26_1', ['class': 'form-control']) }}
                        </div>
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q26') }}
                        {{ form.label('alt2q26', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>As políticas públicas centradas no combate à tuberculose terão melhores resultados se:</h4>
                </div>
                <div class="form-group">
                    <h4>57. Elaboradas com base em evidências científicas sobre seu impacto.</h4>
                        
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
                    <h4>58. Forem testadas e adaptadas para diferentes contextos.</h4>
                        
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
                    <h4>59. Sofrerem interferência de órgãos governamentais com base em dados gerais sobre a população.</h4>
                        
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
                    <h4>60. Contarem com as políticas públicas já existentes no país.</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q30') }}
                        {{ form.label('alt1q30', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q30') }}
                        {{ form.label('alt2q30', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q30') }}
                        {{ form.label('alt3q30', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>61. Elaboradas de acordo com o Método Banerjee.</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q31') }}
                        {{ form.label('alt1q31', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q31') }}
                        {{ form.label('alt2q31', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q31') }}
                        {{ form.label('alt3q31', ['class': 'control-label']) }}
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
        $("#alt1q26").on("click", function() {
            $(".q26_1").show();
        });
        $("#alt2q26").on("click", function() {
            $(".q26_1").hide();
            $("#alt1q26_1").prop('checked', false);
        });
    </script>