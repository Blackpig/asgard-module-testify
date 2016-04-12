<div class="box-body">

    {!! Form::normalInput('title', trans('testify::masks.form.title'), $errors) !!}

    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12">
                <h3>{!! trans('testify::masks.form.mask_options') !!}</h3>
            </div>

            <div class="col-md-3">
                <div class="checkbox">
                    <label for="first_name">
                        <input id="first_name" name="mask[]" type="checkbox" class="flat-blue" value="first_name" />{!! trans('testify::testimonials.form.first_name') !!}
                    </label>
                </div>

                <div class="checkbox">
                    <label for="initialise_first_name">
                        <input id="initialise_first_name" name="mask[]" type="checkbox" class="flat-blue" value="initialise_first_name" />{!! trans('testify::masks.form.initial_first_name') !!}
                    </label>
                </div>

                 <div class="checkbox">
                    <label for="last_name">
                        <input id="last_name" name="mask[]" type="checkbox" class="flat-blue" value="last_name" checked/>{!! trans('testify::testimonials.form.last_name') !!}
                    </label>
                </div>
            </div>

            <div class="col-md-3">
                <div class="checkbox">
                    <label for="job_title">
                        <input id="job_title" name="mask[]" type="checkbox" class="flat-blue" value="job_title" />{!! trans('testify::testimonials.form.job_title') !!}
                    </label>
                </div>

                <div class="checkbox">
                    <label for="company">
                        <input id="company" name="mask[]" type="checkbox" class="flat-blue" value="company" />{!! trans('testify::testimonials.form.company') !!}
                    </label>
                </div>
            </div>

            <div class="col-md-3">
                <div class="checkbox">
                    <label for="town">
                        <input id="town" name="mask[]" type="checkbox" class="flat-blue" value="town" />{!! trans('testify::testimonials.form.town') !!}
                    </label>
                </div>

                <div class="checkbox">
                    <label for="state">
                        <input id="state" name="mask[]" type="checkbox" class="flat-blue" value="state" />{!! trans('testify::testimonials.form.state') !!}
                    </label>
                </div>

                <div class="checkbox">
                    <label for="country">
                        <input id="country" name="mask[]" type="checkbox" class="flat-blue" value="country" />{!! trans('testify::testimonials.form.country') !!}
                    </label>
                </div>
            </div>

            <div class="col-md-12">
                <h3>{!! trans('testify::masks.form.mark_as_default') !!}</h3>
            </div>

            <div class="col-md-3">
                <div class="checkbox">
                    <label for="is_default">
                        <p><input name="is_default" type="radio" value="0" class="flat-blue" checked/> {!! trans('stockloc::common.labels.no') !!}</p>
                        <p><input name="is_default" type="radio" value="1" class="flat-blue"/> {!! trans('stockloc::common.labels.yes') !!}</p>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
