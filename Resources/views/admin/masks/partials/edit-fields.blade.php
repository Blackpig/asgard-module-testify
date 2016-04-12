<div class="box-body">
    {!! Form::normalInput('title', trans('testify::masks.form.title'), $errors, $masks) !!}

    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12">
                <h3>{!! trans('testify::masks.form.mask_options') !!}</h3>
            </div>

            <div class="col-md-3">
                <div class="checkbox">
                    <label for="first_name">
                        <input id="first_name" name="mask[]" type="checkbox" class="flat-blue" value="first_name"
                         <?php echo in_array('first_name', $masks->mask) ? 'checked' : '' ?> />First name
                    </label>
                </div>

                <div class="checkbox">
                    <label for="initialise_first_name">
                        <input id="initialise_first_name" name="mask[]" type="checkbox" class="flat-blue" value="initialise_first_name"
                        <?php echo in_array('initialise_first_name', $masks->mask) ? 'checked' : '' ?> />Initialise first name
                    </label>
                </div>

                <div class="checkbox">
                    <label for="last_name">
                        <input id="last_name" name="mask[]" type="checkbox" class="flat-blue" value="last_name"
                        <?php echo in_array('last_name', $masks->mask) ? 'checked' : '' ?> />Last name
                    </label>
                </div>
            </div>

            <div class="col-md-3">
                <div class="checkbox">
                    <label for="job_title">
                        <input id="job_title" name="mask[]" type="checkbox" class="flat-blue" value="job_title"
                        <?php echo in_array('job_title', $masks->mask) ? 'checked' : '' ?> /> Job Title
                    </label>
                </div>

                <div class="checkbox">
                    <label for="company">
                        <input id="company" name="mask[]" type="checkbox" class="flat-blue" value="company"
                        <?php echo in_array('company', $masks->mask) ? 'checked' : '' ?> /> Company
                    </label>
                </div>
            </div>

            <div class="col-md-3">
                <div class="checkbox">
                    <label for="town">
                        <input id="town" name="mask[]" type="checkbox" class="flat-blue" value="town"
                        <?php echo in_array('town', $masks->mask) ? 'checked' : '' ?> /> Town
                    </label>
                </div>

                <div class="checkbox">
                    <label for="state">
                        <input id="state" name="mask[]" type="checkbox" class="flat-blue" value="state"
                        <?php echo in_array('state', $masks->mask) ? 'checked' : '' ?> /> County
                    </label>
                </div>

                <div class="checkbox">
                    <label for="country">
                        <input id="country" name="mask[]" type="checkbox" class="flat-blue" value="country"
                        <?php echo in_array('country', $masks->mask) ? 'checked' : '' ?> /> Country
                    </label>
                </div>
            </div>

            <div class="col-md-12">
                <h3>{!! trans('testify::masks.form.mark_as_default') !!}</h3>
            </div>

            <div class="col-md-3">
                <div class="checkbox">
                    <label for="is_default">
                        <p><input name="is_default" type="radio" value="0" class="flat-blue" <?php echo $masks->is_default == '0' ? 'checked' : '' ?> /> {!! trans('stockloc::common.labels.no') !!}</p>
                        <p><input name="is_default" type="radio" value="1" class="flat-blue" <?php echo $masks->is_default == '1' ? 'checked' : '' ?> /> {!! trans('stockloc::common.labels.yes') !!}</p>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
