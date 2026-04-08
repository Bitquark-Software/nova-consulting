<?php

namespace Tests\Feature;

use Tests\TestCase;

class SitemapTest extends TestCase
{
    public function test_sitemap_is_valid_xml_and_lists_indexable_pages(): void
    {
        config(['app.url' => 'https://novaconsulting.com.mx']);

        $response = $this->get('/sitemap.xml');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/xml; charset=UTF-8');

        $xml = $response->getContent();
        $this->assertStringContainsString('<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">', $xml);
        $this->assertStringContainsString('https://novaconsulting.com.mx/blog</loc>', $xml);
        $this->assertStringContainsString('https://novaconsulting.com.mx/</loc>', $xml);

        $this->assertStringNotContainsString('dashboard', $xml);
        $this->assertStringNotContainsString('get-a-quote', $xml);
        $this->assertStringNotContainsString('coming-soon', $xml);
    }
}
