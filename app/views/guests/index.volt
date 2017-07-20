
{{ content() }}

<div class="page-header">
    <h2>Registro de participante</h2>
</div>

{{ form('guests', 'id': 'GuestsForm', 'onbeforesubmit': 'return false') }}

    <fieldset>

        <div class="control-group">
            {{ form.label('name', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('name', ['class': 'form-control']) }}
            </div>
        </div>
        <br>
        <div class="control-group">
            {{ form.label('tel', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('tel', ['class': 'form-control']) }}
            </div>
        </div>
        <br>
        <div class="control-group">
            {{ form.label('email', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('email', ['class': 'form-control']) }}
            </div>
        </div>
        <br>
        <div class="control-group">
            {{ form.label('escolarship', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('escolarship', ['class': 'form-control']) }}
            </div>
        </div>
        <br>
        <div class="control-group">
            {{ form.label('age', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('age', ['class': 'form-control']) }}
            </div>
        </div>
        <br>
        <div class="control-group">
            {{ form.label('study_area', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('study_area', ['class': 'form-control']) }}
            </div>
        </div>
        <br>
        <div class="form-actions">
            {{ submit_button('Registrar', 'class': 'btn btn-primary', 'onclick': 'return SignUp.validate();') }}
        </div>

    </fieldset>
</form>
