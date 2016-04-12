<div class="box-body">

    {!! Form::normalInput('first_name', trans('testify::testimonials.form.first_name'), $errors) !!}

    {!! Form::normalInput('last_name', trans('testify::testimonials.form.last_name'), $errors) !!}

    {!! Form::i18nInput('job_title', trans('testify::testimonials.form.job_title'), $errors, $lang) !!}

    {!! Form::normalInput('company', trans('testify::testimonials.form.company'), $errors) !!}

    {!! Form::normalInput('town', trans('testify::testimonials.form.town'), $errors) !!}

    {!! Form::normalInput('state', trans('testify::testimonials.form.state'), $errors) !!}

    {!! Form::i18nInput('country', trans('testify::testimonials.form.country'), $errors, $lang) !!}

    {!! Form::i18nTextarea('testimonial', trans('testify::testimonials.form.testimonial'), $errors, $lang) !!}

    <div class="form-group">
        {!! Form::label("mask_id", 'Attribution mask:') !!}
            <select name="mask_id" id="mask_id" class="form-control">
            <?php foreach ($masks as $mask): ?>
            <option value="{{ $mask->id }}" {{ $mask->is_default == 1 ? 'selected' : '' }}>{{ $mask->title }}</option>
            <?php endforeach; ?>
        </select>
    </div>

</div>
