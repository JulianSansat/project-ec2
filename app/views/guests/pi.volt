<style>
    .extra{
        margin: 20px;
    }
</style>
{{ content() }}

<div class="row">

    <div class="col-md-12">
        <div class="page-header">
            <h4>O presente questionário se fundamenta na seguinte referência bibliográfica:

                MIRZA, Zafar; KRATTIGER, Anatole F.; TAUBMAN, Antony; WATAL, Jayashree. World Health Organization (WHO);
                World Trade Organization (WTO); World Intelectual Property Oragnization (2016). 
                Promoting Access to Medical Technologies and Innovation - Intersections between public health, 
                intellectual property and trade.  WHO, WIPO, WTO, Geneva, Switzerland.</h4>
        </div>
        {{ form('guests/piSend', 'method': 'post') }}
            <fieldset>
                <div class="form-group">
                    <h4>A interação entre o sistema de saúde pública, 
                        o comércio e a propriedade intelectual afetam diretamente o 
                        desenvolvimento de novas tecnologias e pesquisas na área da saúde. 
                        Seguindo a constituição da Organização Mundial da Saúde, 
                        o acesso a medicamentos é parte do direito aos cuidados básicos de saúde. 
                        O desenvolvimento de novos medicamentos envolve pessoas de diferentes áreas 
                        e interações fundamentais entre agentes que, por vezes, podem se contradizer.
                    </h4>
                </div>
                <div class="form-group">
                    <h4>62. Como você classifica seu conhecimento em relação às interações entre a Organização Mundial 
                        da Saúde (OMS), a Organização Mundial de Propriedade Intelectual (OMPI) e a Organização Mundial 
                        do Comércio (OMC) com foco na saúde pública?</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q1') }}
                        {{ form.label('alt1q1', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q1') }}
                        {{ form.label('alt2q1', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q1') }}
                        {{ form.label('alt3q1', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt4q1') }}
                        {{ form.label('alt4q1', ['class': 'control-label']) }}
                    </div>
                </div>

                <div class="form-group">
                    <h4>63. Você sabe o que é Fardo Mundial da Doença (em inglês, Global Disease Burden)?</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q2') }}
                        {{ form.label('alt1q2', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q2') }}
                        {{ form.label('alt2q2', ['class': 'control-label']) }}
                    </div>
                </div>

                <div class="form-group">
                    <h4>64. Você tem conhecimento sobre o termo ‘Doenças Negligenciadas’?</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q3') }}
                        {{ form.label('alt1q3', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q3') }}
                        {{ form.label('alt2q3', ['class': 'control-label']) }}
                    </div>
                </div>

                <div class="form-group">
                            <h4>65. Dos seguintes elementos, assinale os que você acredita exercerem influência no desenvolvimento de novas tecnologias na área da saúde:</h4>
                            <div class="controls">
                            {{ form.render('alt1q4') }}
                            {{ form.label('alt1q4', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt2q4') }}
                            {{ form.label('alt2q4', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt3q4') }}
                            {{ form.label('alt3q4', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt4q4') }}
                            {{ form.label('alt4q4', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt5q4') }}
                            {{ form.label('alt5q4', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt6q4') }}
                            {{ form.label('alt6q4', ['class': 'control-label']) }}
                            </div>
                </div>

                <div class="form-group">
                    <h4>66. Você tem conhecimento sobre o desenvolvimento de novos medicamentos? </h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q5') }}
                        {{ form.label('alt1q5', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q5') }}
                        {{ form.label('alt2q5', ['class': 'control-label']) }}
                    </div>
                </div>

                <div class="form-group">
                    <h4>67. Como você avalia o uso de patentes em relação ao desenvolvimento de novas drogas? </h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q6') }}
                        {{ form.label('alt1q6', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q6') }}
                        {{ form.label('alt2q6', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q6') }}
                        {{ form.label('alt3q6', ['class': 'control-label']) }}
                    </div>
                </div>

                <div class="form-group">
                    <h4>68. Você tem conhecimento acerca do Acordo sobre Aspectos dos Direitos de Propriedade Intelectual ligados ao Comércio (TRIPS)? </h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q7') }}
                        {{ form.label('alt1q7', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q7') }}
                        {{ form.label('alt2q7', ['class': 'control-label']) }}
                    </div>
                </div>

                <div class="form-group">
                    <h4>69. Você conhece as flexibilidades advindas do acordo TRIPS relacionadas a produtos farmacêuticos? </h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q8') }}
                        {{ form.label('alt1q8', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q8') }}
                        {{ form.label('alt2q8', ['class': 'control-label']) }}
                    </div>
                </div>

                <div class="form-group">
                            <h4>70. Para você, os investimentos na área da saúde (pesquisa, desenvolvimento e entrega de produtos e serviços) devem partir prioritariamente:</h4>
                            <div class="controls">
                            {{ form.render('alt1q9') }}
                            {{ form.label('alt1q9', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt2q9') }}
                            {{ form.label('alt2q9', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt3q9') }}
                            {{ form.label('alt3q9', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt4q9') }}
                            {{ form.label('alt4q9', ['class': 'control-label']) }}
                            </div>
                </div>

                <div class="form-group">
                    <h4>71. Das formas de controle e redução de despesas ligadas à saúde, assinale as que você tem conhecimento:</h4>
                        <div class="controls">
                            {{ form.render('alt1q10') }}
                            {{ form.label('alt1q10', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt2q10') }}
                            {{ form.label('alt2q10', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt3q10') }}
                            {{ form.label('alt3q10', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt4q10') }}
                            {{ form.label('alt4q10', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt5q10') }}
                            {{ form.label('alt5q10', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt6q10') }}
                            {{ form.label('alt6q10', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt7q10') }}
                            {{ form.label('alt7q10', ['class': 'control-label']) }}
                        </div>
                        <div class="controls extra q10_1">
                                <h4>Qual?</h4>
                                <div class="controls">
                                    {{ form.render('q10_1', ['class': 'form-control']) }}
                                </div>
                        </div>
                        <div class="controls">
                            {{ form.render('alt8q10') }}
                            {{ form.label('alt8q10', ['class': 'control-label']) }}
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
        $("#alt7q10").on("click", function() {
            $(".q10_1").show();
        });
        $("#alt8q10").on("click", function() {
            $(".q10_1").hide();
            $("#alt1q10_1").prop('checked', false);
        });
</script>