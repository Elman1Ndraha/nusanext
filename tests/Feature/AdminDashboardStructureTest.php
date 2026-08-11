<?php

namespace Tests\Feature;

use Tests\TestCase;

class AdminDashboardStructureTest extends TestCase
{
    public function test_dashboard_shows_cms_flow_structure(): void
    {
        $controller = new \App\Http\Controllers\AdminController();
        $view = $controller->dashboard();
        $html = $view->render();

        $this->assertStringContainsString('Alur CMS', $html);
        $this->assertStringContainsString('ADMIN', $html);
        $this->assertStringContainsString('Admin Dashboard', $html);
        $this->assertStringContainsString('MySQL', $html);
        $this->assertStringContainsString('Website Publik', $html);
    }
}
