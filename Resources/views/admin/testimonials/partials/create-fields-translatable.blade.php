<div class="box-body">

    {!! Form::normalInput('first_name', trans('testify::testimonials.form.first_name'), $errors, null, ['disabled'=>'disabled', 'placeholder'=>trans('testify::testimonials.placeholders.non_translatable')]) !!}

    {!! Form::normalInput('last_name', trans('testify::testimonials.form.last_name'), $errors, null, ['disabled'=>'disabled', 'placeholder'=>trans('testify::testimonials.placeholders.non_translatable')]) !!}

    {!! Form::i18nInput('job_title', trans('testify::testimonials.form.job_title'), $errors, $lang) !!}

    {!! Form::normalInput('company', trans('testify::testimonials.form.company'), $errors, null, ['disabled'=>'disabled', 'placeholder'=>trans('testify::testimonials.placeholders.non_translatable')]) !!}

    {!! Form::normalInput('town', trans('testify::testimonials.form.town'), $errors, null, ['disabled'=>'disabled', 'placeholder'=>trans('testify::testimonials.placeholders.non_translatable')]) !!}

    {!! Form::normalInput('state', trans('testify::testimonials.form.state'), $errors, null, ['disabled'=>'disabled', 'placeholder'=>trans('testify::testimonials.placeholders.non_translatable')]) !!}

    {!! Form::i18nInput('country', trans('testify::testimonials.form.country'), $errors, $lang) !!}

    {!! Form::i18nTextarea('testimonial', trans('testify::testimonials.form.testimonial'), $errors, $lang) !!}

    {!! Form::normalInput('mask_id', trans('testify::testimonials.form.attribution_mask'), $errors, null, ['disabled'=>'disabled', 'placeholder'=>trans('testify::testimonials.placeholders.non_translatable')]) !!}

</div>
