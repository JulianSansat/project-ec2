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
        <h4>O presente questionário se fundamenta nas seguintes referências bibliográficas: 

        BANERJEE, Abhijit V.; DUFLO, Esther. (2011). Poor Economics: a radical rethinking of the way to fight global poverty. Public Affairs, New York. 1st Edition.

        GLENNERSTER, Rachel; TAKAVARASHA, Kudzai. (2013). Running Randomized Evaluations: A Practical Guide. Princeton University Press, Princeton, NJ.

        KREMER, Michael and GLENNERSTER, Rachel. (2004). Strong Medicine: Creating Incentives for Pharmaceutical Research on Neglected Diseases. Princeton, NJ: Princeton University Press.</h4>
        {{ form('guests/banerjeeSend', 'method': 'post') }}
            <fieldset>
                <div class="form-group">
                    <h4>31. Como você classifica o seu conhecimento sobre o Método de Banerjee (ou Método Randômico Controlado)?</h4>
                        
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
                    <h4>32. Você leu o livro “Running Randomized Evaluations – A Practical Guide”, de Rachel Glennerster e Kudzai Takavarasha?</h4>
                        
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
                    <h4>33. Você leu o livro “Strong Medicine – Creating Incentives for Pharmaceutical Research on Neglected Diseases”, de Michael Kremer e Rachel Glennerster?</h4>
                        
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
                    <h4>34. Você leu o livro “Poor Economics: a radical rethinking of the way to fight global poverty”, de Abhijit Banerjee e Esther Duflo?</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q4') }}
                        {{ form.label('alt1q4', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q4') }}
                        {{ form.label('alt2q4', ['class': 'control-label']) }}
                    </div>
                </div>

                <div class="form-group">
                            <h4>35. Dos métodos de avaliação listados a seguir (seguindo nomenclatura proposta em GLENNERSTER, Rachel; TAKAVARASHA, Kudzai. (2013). Running Randomized Evaluations: A Practical Guide. Princeton University Press, Princeton, NJ) assinale os quais você possui algum conhecimento:  </h4>
                            <div class="controls">
                            {{ form.render('alt1q5') }}
                            {{ form.label('alt1q5', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt2q5') }}
                            {{ form.label('alt2q5', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt3q5') }}
                            {{ form.label('alt3q5', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt4q5') }}
                            {{ form.label('alt4q5', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt5q5') }}
                            {{ form.label('alt5q5', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt6q5') }}
                            {{ form.label('alt6q5', ['class': 'control-label']) }}
                            </div>
                            <div class="controls">
                            {{ form.render('alt7q5') }}
                            {{ form.label('alt7q5', ['class': 'control-label']) }}
                            </div>
                </div>
                <div class="form-group">
                    <h4>36. O que você entende por randomizar?</h4>
                        
                    <div class="controls">
                        {{ form.render('q6', ['class': 'form-control']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>37. Das afirmações acerca do Método Banerjee, marque as caixas de acordo com o seu grau de concordância:</h4>
                </div>
                <div class="form-group">
                    <h4>Medir o impacto de programas sociais e transformá-lo em dados estatísticos é uma ferramenta indispensável para a construção de políticas públicas eficientes.</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q7_1') }}
                        {{ form.label('alt1q7_1', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q7_1') }}
                        {{ form.label('alt2q7_1', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q7_1') }}
                        {{ form.label('alt3q7_1', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>O Método Banerjee pode apresentar custo elevado dependendo das condições em que é aplicado.</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q7_2') }}
                        {{ form.label('alt1q7_2', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q7_2') }}
                        {{ form.label('alt2q7_2', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q7_2') }}
                        {{ form.label('alt3q7_2', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>O Método Banerjee pode estabelecer parcerias entre instituições e populações visando o sucesso de programas sociais e benefícios mútuos entre os setores.</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q7_3') }}
                        {{ form.label('alt1q7_3', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q7_3') }}
                        {{ form.label('alt2q7_3', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q7_3') }}
                        {{ form.label('alt3q7_3', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>Os resultados de avaliações randomizadas bem realizadas podem gerar economia no futuro.</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q7_4') }}
                        {{ form.label('alt1q7_4', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q7_4') }}
                        {{ form.label('alt2q7_4', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q7_4') }}
                        {{ form.label('alt3q7_4', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>Circunstancialmente, as avaliações randomizadas não são éticas.</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q7_5') }}
                        {{ form.label('alt1q7_5', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q7_5') }}
                        {{ form.label('alt2q7_5', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q7_5') }}
                        {{ form.label('alt3q7_5', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <h4>O Método Banerjee permite responder perguntas específicas sobre um programa com base em evidências estatísticas.</h4>
                        
                    <div class="controls">
                        {{ form.render('alt1q7_6') }}
                        {{ form.label('alt1q7_6', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt2q7_6') }}
                        {{ form.label('alt2q7_6', ['class': 'control-label']) }}
                    </div>
                    <div class="controls">
                        {{ form.render('alt3q7_6') }}
                        {{ form.label('alt3q7_6', ['class': 'control-label']) }}
                    </div>
                </div>
                <div class="form-group">
                    <p>O Método Banerjee utiliza a randomização como forma de separação de amostras. Por outras palavras, ele distribui as pessoas aleatoriamente entre grupo de controle (grupo de comparação) e 
                        grupo de tratamento (grupo que recebe intervenção). Dessa forma, as amostras geradas são estatisticamente idênticas, permitindo que sejam consideradas sem viés de separação. Após o fim do programa,
                         os dois grupos são analisados e perguntas específicas sobre a intervenção podem ser respondidas. Acerca da divisão de grupos de forma randomizada, as amostras estatisticamente idênticas:</p> 
                </div>
                <div class="form-group">
                    <h4>38. Permitem saber o que teria acontecido na ausência de uma intervenção.</h4>
                        
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
                </div>
                <div class="form-group">
                    <h4>39. Permitem se obter uma amostra fiel em relação ao grupo geral de estudo.</h4>
                        
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
                </div>
                <div class="form-group">
                    <h4>40. Permitem descobrir o impacto de um programa ou intervenção.</h4>
                        
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
                </div>
                <div class="form-group">
                    <h4>41. Significam uma garantia de que os grupos não vão se interagir entre si.</h4>
                        
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
                    <h4>42. Permitem se obter resultados livres de viés de separação de grupos.</h4>
                        
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

        </div>
                
                <div class="form-group">
                    {{ submit_button('Submeter', 'class': 'btn btn-primary btn-large') }}
                </div>
            </fieldset>
        </form>
    </div>
    </div>
{{ assets.outputJs() }}