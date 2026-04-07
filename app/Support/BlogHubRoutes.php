<?php

namespace App\Support;

final class BlogHubRoutes
{
    /**
     * Routes that belong to the public “content hub” (blog tab + index page scope).
     */
    private const NAME_PATTERNS = [
        '/^blog\./',
        '/^guide\./',
        '/^landing\.software\./',
        '/^landing\.en\.software\./',
        '/^landing\.webdesign\./',
    ];

    public static function matches(?string $routeName): bool
    {
        if ($routeName === null || $routeName === '') {
            return false;
        }

        foreach (self::NAME_PATTERNS as $pattern) {
            if (preg_match($pattern, $routeName) === 1) {
                return true;
            }
        }

        return false;
    }
}
