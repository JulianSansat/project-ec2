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
        {{ form('guests/eoa_first', 'method': 'post') }}
            <fieldset>
                <div class="form-group">
                    <h4>1. Como você avalia o seu conhecimento sobre a Estratégia do Oceano Azul (EOA)?</h4>
                        
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
                    <h4>2. Você teve acesso a algum material sobre a Estratégia do Oceano Azul? </h4>
                    <div class="controls">
                        {{ form.render('alt1q2') }}
                        {{ form.label('alt1q2', ['class': 'control-label']) }}
                    </div>
                    <div class="controls extra q2_1">
                        <h4>Com base no que você teve acesso, você acredita ser possível a implementação da Estratégia do Oceano Azul em uma instituição (empresa pública ou privada, e ICT) apenas com o estudo do livro?</h4>
                        <div class="controls">
                            {{ form.render('alt1q2_1') }}
                            {{ form.label('alt1q2_1', ['class': 'control-label']) }}

                            {{ form.render('alt2q2_1') }}
                            {{ form.label('alt2q2_1', ['class': 'control-label']) }}

                            {{ form.render('alt3q2_1') }}
                            {{ form.label('alt3q2_1', ['class': 'control-label']) }}
                        </div>
                    </div>
                   
                    <div class="controls">
                        {{ form.render('alt2q2') }}
                         {{ form.label('alt2q2', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>3. O que a Estratégia do Oceano Azul pode gerar em uma companhia? Escolher quantas opções julgar necessárias.</h4>
                        <div class="controls">
                            {{ form.render('alt1q3') }}
                            {{ form.label('alt1q3', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt2q3') }}
                            {{ form.label('alt2q3', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt3q3') }}
                            {{ form.label('alt3q3', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt4q3') }}
                            {{ form.label('alt4q3', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt5q3') }}
                            {{ form.label('alt5q3', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt6q3') }}
                            {{ form.label('alt6q3', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt7q3') }}
                            {{ form.label('alt7q3', ['class': 'control-label']) }}
                        </div>
                        <div class="controls">
                            {{ form.render('alt8q3') }}
                            {{ form.label('alt8q3', ['class': 'control-label']) }}
                        </div>
                        </div>

                        <div class="form-group">
                            <h4>4. Qual você acredita ser a prática adotada pela Estratégia do Oceano Azul?</h4>
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
                        </div>

                        <div class="form-group">
                            <h4>5. O que você entende por inovação de valor? </h4>
                            <div class="controls">
                                {{ form.render('q5', ['class': 'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            <h4>6. Você tem conhecimento de alguma inovação de valor (em qualquer setor) gerada a partir da Estratégia do Oceano Azul? </h4>
                            <div class="controls">
                            {{ form.render('alt1q6') }}
                            {{ form.label('alt1q6', ['class': 'control-label']) }}
                            </div>
                            <div class="controls extra q6_1">
                                <h4>Qual?</h4>
                                <div class="controls">
                                    {{ form.render('q6_1', ['class': 'form-control']) }}
                                </div>
                            </div>
                            <div class="controls">
                            {{ form.render('alt2q6') }}
                            {{ form.label('alt2q6', ['class': 'control-label']) }}
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <h4>7. A Estratégia do Oceano Azul é uma abordagem utilizada, atualmente, na instituição na qual você trabalha?  </h4>
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
                            <h4>8. Dos princípios apresentados a seguir (conforme denominação original de Kim e Mauborgne, 2005), quais deles a empresa na qual você trabalha utiliza para a implementação da Estratégia do Oceano Azul? (Leia todos antes de assinalar)</h4>
                            <div class="controls">
                            {{ form.render('alt1q8') }}
                            {{ form.label('alt1q8', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt2q8') }}
                            {{ form.label('alt2q8', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt3q8') }}
                            {{ form.label('alt3q8', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt4q8') }}
                            {{ form.label('alt4q8', ['class': 'control-label']) }}
                            </div>  
                            <div class="controls">
                            {{ form.render('alt5q8') }}
                            {{ form.label('alt5q8', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt6q8') }}
                            {{ form.label('alt6q8', ['class': 'control-label']) }}
                            </div>  
                            <div class="controls">
                            {{ form.render('alt7q8') }}
                            {{ form.label('alt7q8', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt8q8') }}
                            {{ form.label('alt8q8', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt9q8') }}
                            {{ form.label('alt9q8', ['class': 'control-label']) }}
                            </div>                         
                        </div>

                        <div class="form-group">
                            <h4>9. Você conhece alguma ferramenta abordada na Estratégia do Oceano Azul?  </h4>
                            <div class="controls">
                            {{ form.render('alt1q9') }}
                            {{ form.label('alt1q9', ['class': 'control-label']) }}
                            </div>
                            <div class="controls extra q9_1">
                                <h4>Qual?/Quais</h4>
                                <div class="controls">
                                    {{ form.render('q9_1', ['class': 'form-control']) }}
                                </div>
                            </div>
                            <div class="controls">
                            {{ form.render('alt2q9') }}
                            {{ form.label('alt2q9', ['class': 'control-label']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            <h4>10. Das ferramentas apresentadas a seguir (conforme denominação original de Kim e Mauborgne, 2005), quais delas são/foram empregadas na sua empresa visando o desenvolvimento e aplicação da Estratégia do Oceano Azul? (Leia todas antes de assinalar)  </h4>
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
                        </div>

                        <div class="form-group">
                            <h4>11. Considerando a sua empresa, foi encontrada alguma dificuldade na implementação e execução da Estratégia do Oceano Azul?  </h4>
                            <div class="controls">
                            {{ form.render('alt1q11') }}
                            {{ form.label('alt1q11', ['class': 'control-label']) }}
                            </div>
                            <div class="controls extra q11_1">
                                <h4>Qual foi a dificuldade encontrada?</h4>
                                <div class="controls">
                                    {{ form.render('q11_1', ['class': 'form-control']) }}
                                </div>
                            </div>
                            <div class="controls">
                            {{ form.render('alt2q11') }}
                            {{ form.label('alt2q11', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt3q11') }}
                            {{ form.label('alt3q11', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt4q11') }}
                            {{ form.label('alt4q11', ['class': 'control-label']) }}
                            </div>
                        </div>

                         <div class="form-group">
                            <h4>12. A instituição na qual você trabalha inclui todos os funcionários dela na elaboração de estratégias?   </h4>
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
                            <h4>13. Como a instituição na qual você trabalha dissemina a Estratégia do Oceano Azul?  </h4>
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
                            <div class="controls">
                            {{ form.render('alt4q13') }}
                            {{ form.label('alt4q13', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt5q13') }}
                            {{ form.label('alt5q13', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt6q13') }}
                            {{ form.label('alt6q13', ['class': 'control-label']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            <h4>14. A instituição na qual você trabalha adota estratégias distintas para inovação de valor (oceano azul) e competição (oceano vermelho)?  </h4>
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
                            <h4>15. Na instituição na qual você trabalha, as oportunidades de desenvolvimento de novos produtos são necessárias para a definição das estratégias? </h4>
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
                            <h4>16. Você considera válida a aplicação da Estratégia do Oceano azul em esferas públicas? </h4>
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
                            <h4>17. Conhece alguma aplicação da Estratégia do Oceano Azul na área da saúde? </h4>
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
                            <h4>18. Você concorda com a seguinte afirmação: criar um oceano azul na área da saúde está mais relacionado com o que o paciente não precisa do que com o que ele precisa. Reduzir gastos e elevar a entrega de serviços é fundamental. </h4>
                            <div class="controls">
                            {{ form.render('alt1q18') }}
                            {{ form.label('alt1q18', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt2q18') }}
                            {{ form.label('alt2q18', ['class': 'control-label']) }}
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
        $("#alt1q2").on("click", function() {
            $(".q2_1").show();
        });
        $("#alt2q2").on("click", function() {
            $(".q2_1").hide();
            $("#alt1q2_1").prop('checked', false);
            $("#alt2q2_1").prop('checked', false);
            $("#alt3q2_1").prop('checked', false);
        });

        $("#alt1q6").on("click", function() {
            $(".q6_1").show();
        });
        $("#alt2q6").on("click", function() {
            $(".q6_1").hide();
            $("#alt1q6_1").prop('checked', false);
        });

        $("#alt1q9").on("click", function() {
            $(".q9_1").show();
        });
        $("#alt2q9").on("click", function() {
            $(".q9_1").hide();
            $("#alt1q9_1").prop('checked', false);
        });

        $("#alt1q11").on("click", function() {
            $(".q11_1").show();
        });
        $("#alt2q11").on("click", function() {
            $(".q11_1").hide();
            $("#alt1q11_1").prop('checked', false);
        });
        $("#alt3q11").on("click", function() {
            $(".q11_1").hide();
            $("#alt1q11_1").prop('checked', false);
        });
        $("#alt4q11").on("click", function() {
            $(".q11_1").hide();
            $("#alt1q11_1").prop('checked', false);
        });
    </script>