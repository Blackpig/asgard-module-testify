<?php namespace Modules\Testify\Support\Traits;

trait MasksTrait
{

    public static function applyMask($mask, $data)
    {
        $mask = collect($mask);

        $name['salutation'] = $mask->contains('salutation') ? $data->salutation : '';
        $name['first_name'] = $mask->contains('first_name') ? $data->first_name : '';
        $name['first_name'] = $mask->contains('initialise_first_name') ? $data->first_name[0] : $name['first_name'];
        $name['last_name'] = $data->last_name;

        $accreditation[] = implode(' ', array_filter($name));

        $mask = $mask->diff(['salutation', 'first_name', 'last_name', 'initialise_first_name']);

        $mask->each( function( $field, $key ) use ($data, &$accreditation) {
           $accreditation[] = $data->{$field};
        });

        return implode(", ", $accreditation);
    }
}
