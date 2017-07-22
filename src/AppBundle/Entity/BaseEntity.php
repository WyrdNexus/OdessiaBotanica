<?php

namespace AppBundle\Entity;


abstract class BaseEntity
{

    function __toString()
    {
        // user of some type
        if ( !empty($this->last_name) && !empty($this->first_name) ) {
            return $this->first_name . ' ' . $this->last_name;
        }

        // this should catch SOMETHING
        $fallback = $this->title
            ?? $this->name
            ?? $this->email
            ?? $this->slug
            ?? $this->token
            ?? null
        ;
        if ( !empty($fallback)) {
            return $fallback;
        }

        // at least tell us the entity and ID
        $id = '';
        if ( !empty($this->id)) {
            $id = '['. $this->id .']';
        }
        return get_called_class() . $id;
    }
}