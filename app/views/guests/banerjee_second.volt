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
        <h4>No processo de avaliação proposto pelo Método Banerjee, os grupos devem ser randomizados em um nível que permita responder uma ou mais perguntas específicas. 
            Por isso, os pesquisadores devem ser cautelosos com as possíveis repercussões (ou spillovers) em um programa respondendo à questão: qual nível de randomização evita ao máximo que os grupos de tratamento e controle tenham contato entre si? 
            Somente será possível inferir a causa de uma mudança se o grupo de controle não tiver contato com
             o grupo de tratamento. Sobre a decisão de qual nível a randomização deve ocorrer:</h4>
        {{ form('guests/banerjeeSendSecond', 'method': 'post') }}
            <fieldset>
                <div class="form-group">
                    <h4>13. Fatores geográficos devem ser considerados para que os grupos não sejam diferentes em aspectos que afetem os resultados da avaliação (ex. diferenças culturais, econômicas, entre outras).</h4>
                        
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
                    <h4>14. Deve-se analisar as limitações políticas que podem interferir no sucesso do programa.</h4>
                        
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
                    <h4>15. Randomizar em nível inadequado pode invalidar os resultados de um experimento.</h4>
                        
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
                    <h4>16. Questões éticas são importantes na decisão sobre a unidade e o nível de randomização.</h4>
                        
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
                    <p>A instituição J-PAL (The Abdul Latif Jameel Poverty Action Lab) tem como uma de suas missões principais reduzir a pobreza, 
                        garantindo que as políticas públicas sejam elaboradas com base em evidências científicas.  A rede realiza pesquisas e treinamentos, 
                        estabelece parcerias com formadores de políticas e trabalha diretamente com o Método Banerjee. Sobre o J-PAL responda:</p>
                </div>
                <div class="form-group">
                    <h4>17. Você conhece a rede de pesquisas J-PAL? </h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q17') }}
                        {{ form.label('alt1q17', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q17') }}
                        {{ form.label('alt2q17', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>18. Você tem conhecimento sobre alguma pesquisa realizada pelo J-PAL? </h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q18') }}
                        {{ form.label('alt1q18', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q18') }}
                        {{ form.label('alt2q18', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>19. Você tem conhecimento sobre os resultados do trabalho realizado pelo J-PAL? </h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q19') }}
                        {{ form.label('alt1q19', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q19') }}
                        {{ form.label('alt2q19', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>20. No contexto brasileiro, você conhece alguma instituição que gere evidências científicas que colaborem, na prática, com políticas públicas? </h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q20') }}
                        {{ form.label('alt1q20', ['class': 'control-label']) }}
                    </div>
                    <div class="controls extra q20_1">
                        <h4>Qual?</h4>
                        <div class="controls">
                            {{ form.render('q20_1', ['class': 'form-control']) }}
                        </div>
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q20') }}
                        {{ form.label('alt2q20', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>21. Você tem conhecimento sobre algum programa escalada a partir das evidências geradas pelo J-PAL? </h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q21') }}
                        {{ form.label('alt1q21', ['class': 'control-label']) }}
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
        $("#alt1q20").on("click", function() {
            $(".q20_1").show();
        });
        $("#alt2q20").on("click", function() {
            $(".q20_1").hide();
            $("#alt1q20_1").prop('checked', false);
        });
    </script>