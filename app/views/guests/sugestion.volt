{{ content() }}

<div class="row">

    <div class="col-md-12">
        <div class="page-header">
            <h4>92- Prezado Participante, caso seja de vosso interesse, por gentileza, 
                utilize este espaço para manifestar sua contribuição para o aperfeiçoamento do questionário ou para o 
                aperfeiçoamento no combate à tuberculose.</h4>
        </div>
        {{ form('guests/sugestionSend', 'method': 'post') }}
            <fieldset>
                <div class="form-group">  
                    <div class="controls">
                        <textarea name="sugestion" class="form-control"></textarea>
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