<div class="box-body">
     {!! Form::normalInput('first_name', trans('testify::testimonials.form.first_name'), $errors, $testimonials, ['disabled'=>'disabled']) !!}

    {!! Form::normalInput('last_name', trans('testify::testimonials.form.last_name'), $errors, $testimonials, ['disabled'=>'disabled']) !!}

    {!! Form::i18nInput('job_title', trans('testify::testimonials.form.job_title'), $errors, $lang, $testimonials) !!}

    {!! Form::normalInput('company', trans('testify::testimonials.form.company'), $errors, $testimonials, ['disabled'=>'disabled']) !!}

    {!! Form::normalInput('town', trans('testify::testimonials.form.town'), $errors, $testimonials, ['disabled'=>'disabled']) !!}

    {!! Form::normalInput('state', trans('testify::testimonials.form.state'), $errors, $testimonials, ['disabled'=>'disabled']) !!}

    {!! Form::i18nInput('country', trans('testify::testimonials.form.country'), $errors, $lang, $testimonials) !!}

    {!! Form::i18nTextarea('testimonial', trans('testify::testimonials.form.testimonial'), $errors, $lang, $testimonials) !!}

</div>
