<?php namespace Modules\Testify\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class EditTestimonialRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
        ];
    }

    public function translationRules()
    {
        return [
            'testimonial' => 'required'
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function translationMessages()
    {
        return [
            'first_name.required' => trans('testify::testimonials.messages.first_name is required'),
            'last_name.required' => trans('testify::testimonials.messages.last_name is required'),
            'testimonial.required' => trans('testify::testimonials.messages.testimonial is required'),
        ];
    }
}
