
{{ content() }}

<div class="page-header">
    <h2>Insira seus dados</h2>
</div>

{{ form('guestRegister', 'id': 'guestForm', 'onbeforesubmit': 'return false') }}

    <fieldset>

        <div class="control-group">
            {{ form.label('name', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('name', ['class': 'form-control']) }}
                <p class="help-block">(required)</p>
                <div class="alert alert-warning" id="name_alert">
                    <strong>Warning!</strong> Please enter your full name
                </div>
            </div>
        </div>

        <div class="control-group">
            {{ form.label('tel', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('tel', ['class': 'form-control']) }}
                <p class="help-block">(required)</p>
                <div class="alert alert-warning" id="tel_alert">
                    <strong>Warning!</strong> Please enter your tel
                </div>
            </div>
        </div>

        <div class="control-group">
            {{ form.label('escolarship', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('escolarship', ['class': 'form-control']) }}
                <p class="help-block">(required)</p>
                <div class="alert alert-warning" id="escolarship_alert">
                    <strong>Warning!</strong> Please enter your escolarship
                </div>
            </div>
        </div>

        <div class="control-group">
            {{ form.label('age', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('age', ['class': 'form-control']) }}
                <p class="help-block">(required)</p>
                <div class="alert alert-warning" id="age_alert">
                    <strong>Warning!</strong> Please enter your age
                </div>
            </div>
        </div>

        <div class="control-group">
            {{ form.label('study_area', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('study_area', ['class': 'form-control']) }}
                <p class="help-block">(required)</p>
                <div class="alert alert-warning" id="study_area_alert">
                    <strong>Warning!</strong> Please enter your study area
                </div>
            </div>
        </div>

        <div class="control-group">
            {{ form.label('email', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('email', ['class': 'form-control']) }}
                <p class="help-block">(required)</p>
                <div class="alert alert-warning" id="email_alert">
                    <strong>Warning!</strong> Please enter your email
                </div>
            </div>
        </div>

        <div class="form-actions">
            {{ submit_button('Register', 'class': 'btn btn-primary', 'onclick': 'return SignUp.validate();') }}
            <p class="help-block">By signing up, you accept terms of use and privacy policy.</p>
        </div>

    </fieldset>
</form>
