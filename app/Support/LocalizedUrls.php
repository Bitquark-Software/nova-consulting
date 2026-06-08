<?php

namespace App\Support;

class LocalizedUrls
{
    public static function guide(string $key): string
    {
        $loc = app()->getLocale();
        $path = config('guides.paths.'.$key.'.'.$loc);

        return $path ? url($path) : url('/');
    }

    public static function citySoftware(string $cityKey): string
    {
        $loc = app()->getLocale();
        $path = config('city_landings.paths.'.$cityKey.'.'.$loc);

        return $path ? url($path) : url('/');
    }

    public static function weddingInvitations(): string
    {
        $loc = app()->getLocale();
        $path = config('wedding_invitations.paths.'.$loc);

        return $path ? url($path) : url('/');
    }

    public static function tuxtlaWebDesign(): string
    {
        return url(config('tuxtla_web_design.path', '/diseno-de-paginas-web-en-tuxtla-gutierrez'));
    }

    public static function tuxtlaSoftware(): string
    {
        return url('/empresa-software-tuxtla-chiapas');
    }
}
