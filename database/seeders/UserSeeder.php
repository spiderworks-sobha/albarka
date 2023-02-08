<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'admin@website.com',
            'password' => Hash::make('012Admin#$'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('roles')->insert([
            'name' => 'Admin',
            'guard_name' => 'admin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'App\Models\User',
            'model_id' => 1
        ]);

        $permissions = [
            ['id' => 1, 'name' => 'user_listing', 'route' => 'admin.users.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 2, 'name' => 'user_adding', 'route' => 'admin.users.create', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 3, 'name' => 'user_editing', 'route' => 'admin.users.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 4, 'name' => 'user_deleting', 'route' => 'admin.users.deleting', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 5, 'name' => 'role_adding', 'route' => 'admin.roles.create', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 6, 'name' => 'role_editing', 'route' => 'admin.roles.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 7, 'name' => 'role_listing', 'route' => 'admin.roles.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 8, 'name' => 'role_deleting', 'route' => 'admin.roles.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 9, 'name' => 'permission_listing', 'route' => 'admin.permissions.index', 'guard_name' => 'admin', 'public' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 10, 'name' => 'permission_adding', 'route' => 'admin.permissions.create', 'guard_name' => 'admin', 'public' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 11, 'name' => 'permission_editing', 'route' => 'admin.permissions.edit', 'guard_name' => 'admin', 'public' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 12, 'name' => 'permission_deleting', 'route' => 'admin.permissions.deleting', 'guard_name' => 'admin', 'public' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 13, 'name' => 'admin_links_listing', 'route' => 'admin.admin-links.index', 'guard_name' => 'admin', 'public' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 14, 'name' => 'admin_links_adding', 'route' => 'admin.admin-links.create', 'guard_name' => 'admin', 'public' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 15, 'name' => 'admin_links_editing', 'route' => 'admin.admin-links.edit', 'guard_name' => 'admin', 'public' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 16, 'name' => 'admin_links_deleting', 'route' => 'admin.admin-links.deleting', 'guard_name' => 'admin', 'public' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 17, 'name' => 'media_listing', 'route' => 'admin.media.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 18, 'name' => 'media_adding', 'route' => 'admin.media.save', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 19, 'name' => 'media_editing', 'route' => 'admin.media.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 20, 'name' => 'media_deleting', 'route' => 'admin.media.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 21, 'name' => 'blog_listing', 'route' => 'admin.blogs.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 22, 'name' => 'blog_adding', 'route' => 'admin.blogs.create', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 23, 'name' => 'blog_editing', 'route' => 'admin.blogs.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 24, 'name' => 'blog_deleting', 'route' => 'admin.blogs.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 25, 'name' => 'menu_listing', 'route' => 'admin.menus.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 26, 'name' => 'menu_adding', 'route' => 'admin.menus.create', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 27, 'name' => 'menu_editing', 'route' => 'admin.menus.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 28, 'name' => 'menu_deleting', 'route' => 'admin.menus.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 29, 'name' => 'slider_listing', 'route' => 'admin.sliders.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 30, 'name' => 'slider_adding', 'route' => 'admin.sliders.create', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 31, 'name' => 'slider_editing', 'route' => 'admin.sliders.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 32, 'name' => 'slider_deleting', 'route' => 'admin.sliders.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 33, 'name' => 'testimonial_listing', 'route' => 'admin.testimonials.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 34, 'name' => 'testimonial_adding', 'route' => 'admin.testimonials.create', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 35, 'name' => 'testimonial_editing', 'route' => 'admin.testimonials.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 36, 'name' => 'testimonial_deleting', 'route' => 'admin.testimonials.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 37, 'name' => 'category_adding', 'route' => 'admin.categories.create', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 38, 'name' => 'category_listing', 'route' => 'admin.categories.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 39, 'name' => 'category_editing', 'route' => 'admin.categories.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 40, 'name' => 'category_deleting', 'route' => 'admin.categories.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 41, 'name' => 'site_settings', 'route' => 'admin.settings.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 42, 'name' => 'log_listings', 'route' => 'admin.logs.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 43, 'name' => 'log_deleting', 'route' => 'admin.logs.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 44, 'name' => 'static_page_listing', 'route' => 'admin.static-pages.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 45, 'name' => 'static_pages_editing', 'route' => 'admin.static-pages.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 46, 'name' => 'page_adding', 'route' => 'admin.pages.create', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 47, 'name' => 'page_listing', 'route' => 'admin.pages.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 48, 'name' => 'page_editing', 'route' => 'admin.pages.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 49, 'name' => 'page_deleting', 'route' => 'admin.pages.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 50, 'name' => 'photo_gallery_listing', 'route' => 'admin.photo-galleries.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 51, 'name' => 'photo_gallery_adding', 'route' => 'admin.photo-galleries.create', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 52, 'name' => 'photo_gallery_editing', 'route' => 'admin.photo-galleries.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 53, 'name' => 'photo_gallery_deleting', 'route' => 'admin.photo-galleries.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 54, 'name' => 'team_listing', 'route' => 'admin.team.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 55, 'name' => 'team_adding', 'route' => 'admin.team.create', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 56, 'name' => 'team_editing', 'route' => 'admin.team.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 57, 'name' => 'team_deleting', 'route' => 'admin.team.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 58, 'name' => 'service_listing', 'route' => 'admin.services.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 59, 'name' => 'service_adding', 'route' => 'admin.services.create', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 60, 'name' => 'service_editing', 'route' => 'admin.services.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 61, 'name' => 'service_deleting', 'route' => 'admin.services.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 62, 'name' => 'job_adding', 'route' => 'admin.jobs.create', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 63, 'name' => 'job_listing', 'route' => 'admin.jobs.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 64, 'name' => 'job_editing', 'route' => 'admin.jobs.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 65, 'name' => 'job_deleting', 'route' => 'admin.jobs.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 66, 'name' => 'lead_listing', 'route' => 'admin.leads.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 67, 'name' => 'lead_closing', 'route' => 'admin.leads.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 68, 'name' => 'lead_deleting', 'route' => 'admin.leads.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 69, 'name' => '301_redirects_listing', 'route' => 'admin.redirects.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 70, 'name' => '301_redirects_adding', 'route' => 'admin.redirects.create', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 71, 'name' => '301_redirects_deleting', 'route' => 'admin.redirects.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 72, 'name' => 'quick_task_listing', 'route' => 'admin.quick-tasks.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 73, 'name' => 'quick_task_adding', 'route' => 'admin.quick-tasks.create', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 74, 'name' => 'quick_task_editing', 'route' => 'admin.quick-tasks.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 75, 'name' => 'quick_task_deleting', 'route' => 'admin.quick-tasks.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 76, 'name' => 'login_history_listing', 'route' => 'admin.login-history.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 77, 'name' => 'login_history_deleting', 'route' => 'admin.login-history.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 78, 'name' => 'event_adding', 'route' => 'admin.events.create', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 79, 'name' => 'event_listing', 'route' => 'admin.events.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 80, 'name' => 'event_editing', 'route' => 'admin.events.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 81, 'name' => 'event_deleting', 'route' => 'admin.events.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 82, 'name' => 'partner_adding', 'route' => 'admin.partners.create', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 83, 'name' => 'partner_listing', 'route' => 'admin.partners.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 84, 'name' => 'partner_editing', 'route' => 'admin.partners.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 85, 'name' => 'partner_deleting', 'route' => 'admin.partners.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 86, 'name' => 'job_application_adding', 'route' => 'admin.job-applications.create', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 87, 'name' => 'job_application_listing', 'route' => 'admin.job-applications.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 88, 'name' => 'job_application_editing', 'route' => 'admin.job-applications.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 89, 'name' => 'job_application_deleting', 'route' => 'admin.job-applications.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 90, 'name' => 'widgets', 'route' => 'admin.widgets.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 91, 'name' => 'listing_listing', 'route' => 'admin.listings.index', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 92, 'name' => 'listing_adding', 'route' => 'admin.listings.create', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 93, 'name' => 'listing_editing', 'route' => 'admin.listings.edit', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 94, 'name' => 'listing_deleting', 'route' => 'admin.listings.destroy', 'guard_name' => 'admin', 'public' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ];

        DB::table('permissions')->insert($permissions);

        $role_has_permissions = [
            ['permission_id' => 1, 'role_id' => 1],
            ['permission_id' => 2, 'role_id' => 1],
            ['permission_id' => 3, 'role_id' => 1],
            ['permission_id' => 4, 'role_id' => 1],
            ['permission_id' => 5, 'role_id' => 1],
            ['permission_id' => 6, 'role_id' => 1],
            ['permission_id' => 7, 'role_id' => 1],
            ['permission_id' => 8, 'role_id' => 1],
            ['permission_id' => 9, 'role_id' => 1],
            ['permission_id' => 10, 'role_id' => 1],
            ['permission_id' => 11, 'role_id' => 1],
            ['permission_id' => 12, 'role_id' => 1],
            ['permission_id' => 13, 'role_id' => 1],
            ['permission_id' => 14, 'role_id' => 1],
            ['permission_id' => 15, 'role_id' => 1],
            ['permission_id' => 16, 'role_id' => 1],
            ['permission_id' => 17, 'role_id' => 1],
            ['permission_id' => 18, 'role_id' => 1],
            ['permission_id' => 19, 'role_id' => 1],
            ['permission_id' => 20, 'role_id' => 1],
            ['permission_id' => 21, 'role_id' => 1],
            ['permission_id' => 22, 'role_id' => 1],
            ['permission_id' => 23, 'role_id' => 1],
            ['permission_id' => 24, 'role_id' => 1],
            ['permission_id' => 25, 'role_id' => 1],
            ['permission_id' => 26, 'role_id' => 1],
            ['permission_id' => 27, 'role_id' => 1],
            ['permission_id' => 28, 'role_id' => 1],
            ['permission_id' => 29, 'role_id' => 1],
            ['permission_id' => 30, 'role_id' => 1],
            ['permission_id' => 31, 'role_id' => 1],
            ['permission_id' => 32, 'role_id' => 1],
            ['permission_id' => 33, 'role_id' => 1],
            ['permission_id' => 34, 'role_id' => 1],
            ['permission_id' => 35, 'role_id' => 1],
            ['permission_id' => 36, 'role_id' => 1],
            ['permission_id' => 37, 'role_id' => 1],
            ['permission_id' => 38, 'role_id' => 1],
            ['permission_id' => 39, 'role_id' => 1],
            ['permission_id' => 40, 'role_id' => 1],
            ['permission_id' => 41, 'role_id' => 1],
            ['permission_id' => 42, 'role_id' => 1],
            ['permission_id' => 43, 'role_id' => 1],
            ['permission_id' => 44, 'role_id' => 1],
            ['permission_id' => 45, 'role_id' => 1],
            ['permission_id' => 46, 'role_id' => 1],
            ['permission_id' => 47, 'role_id' => 1],
            ['permission_id' => 48, 'role_id' => 1],
            ['permission_id' => 49, 'role_id' => 1],
            ['permission_id' => 50, 'role_id' => 1],
            ['permission_id' => 51, 'role_id' => 1],
            ['permission_id' => 52, 'role_id' => 1],
            ['permission_id' => 53, 'role_id' => 1],
            ['permission_id' => 54, 'role_id' => 1],
            ['permission_id' => 55, 'role_id' => 1],
            ['permission_id' => 56, 'role_id' => 1],
            ['permission_id' => 57, 'role_id' => 1],
            ['permission_id' => 58, 'role_id' => 1],
            ['permission_id' => 59, 'role_id' => 1],
            ['permission_id' => 60, 'role_id' => 1],
            ['permission_id' => 61, 'role_id' => 1],
            ['permission_id' => 62, 'role_id' => 1],
            ['permission_id' => 63, 'role_id' => 1],
            ['permission_id' => 64, 'role_id' => 1],
            ['permission_id' => 65, 'role_id' => 1],
            ['permission_id' => 66, 'role_id' => 1],
            ['permission_id' => 67, 'role_id' => 1],
            ['permission_id' => 68, 'role_id' => 1],
            ['permission_id' => 69, 'role_id' => 1],
            ['permission_id' => 70, 'role_id' => 1],
            ['permission_id' => 71, 'role_id' => 1],
            ['permission_id' => 72, 'role_id' => 1],
            ['permission_id' => 73, 'role_id' => 1],
            ['permission_id' => 74, 'role_id' => 1],
            ['permission_id' => 75, 'role_id' => 1],
            ['permission_id' => 76, 'role_id' => 1],
            ['permission_id' => 77, 'role_id' => 1],
            ['permission_id' => 78, 'role_id' => 1],
            ['permission_id' => 79, 'role_id' => 1],
            ['permission_id' => 80, 'role_id' => 1],
            ['permission_id' => 81, 'role_id' => 1],
            ['permission_id' => 82, 'role_id' => 1],
            ['permission_id' => 83, 'role_id' => 1],
            ['permission_id' => 84, 'role_id' => 1],
            ['permission_id' => 85, 'role_id' => 1],
            ['permission_id' => 86, 'role_id' => 1],
            ['permission_id' => 87, 'role_id' => 1],
            ['permission_id' => 88, 'role_id' => 1],
            ['permission_id' => 89, 'role_id' => 1],
            ['permission_id' => 90, 'role_id' => 1],
            ['permission_id' => 91, 'role_id' => 1],
            ['permission_id' => 92, 'role_id' => 1],
            ['permission_id' => 93, 'role_id' => 1],
            ['permission_id' => 94, 'role_id' => 1],
        ];

        DB::table('role_has_permissions')->insert($role_has_permissions);

        $admin_links = [
            ['id' => 14, 'permissions_id' => 1, 'name' => 'Users', 'parent_id'=> 0, 'icon' => '<i class=\"fas fa-users\"></i>', 'display_order' => 6, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 15, 'permissions_id' => 7, 'name' => 'Roles', 'parent_id'=> 0, 'icon' => '<i class=\"fab fa-black-tie\"></i>', 'display_order' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 16, 'permissions_id' => 9, 'name' => 'Settings', 'parent_id'=> 0, 'icon' => '<i class=\"fas fa-cogs\"></i>', 'display_order' => 10, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 21, 'permissions_id' => 9, 'name' => 'Permissions', 'parent_id'=> 16, 'icon' => '<i class=\"fas fa-arrows-alt\"></i>', 'display_order' => 14, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 22, 'permissions_id' => 13, 'name' => 'Admin Links', 'parent_id'=> 16, 'icon' => '<i class=\"fas fa-bars\"></i>', 'display_order' => 13, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 23, 'permissions_id' => 17, 'name' => 'Media', 'parent_id'=> 0, 'icon' => '<i class=\"fas fa-photo-video\"></i>', 'display_order' => 7, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 24, 'permissions_id' => 21, 'name' => 'Blogs', 'parent_id'=> 0, 'icon' => '<i class=\"fas fa-th\"></i>', 'display_order' => 8, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 25, 'permissions_id' => 25, 'name' => 'Menus', 'parent_id'=> 0, 'icon' => '<i class=\"fas fa-align-justify\"></i>', 'display_order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 26, 'permissions_id' => 29, 'name' => 'Sliders', 'parent_id'=> 0, 'icon' => '<i class=\"far fa-images\"></i>', 'display_order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 27, 'permissions_id' => 33, 'name' => 'Testimonials', 'parent_id'=> 0, 'icon' => '<i class=\"fas fa-quote-left\"></i>', 'display_order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 28, 'permissions_id' => 38, 'name' => 'Categories', 'parent_id'=> 0, 'icon' => '<i class=\"fab fa-buromobelexperte\"></i>', 'display_order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 29, 'permissions_id' => 41, 'name' => 'Site Settings', 'parent_id'=> 0, 'icon' => '<i class=\"fas fa-toolbox\"></i>', 'display_order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 30, 'permissions_id' => 42, 'name' => 'Logs', 'parent_id'=> 0, 'icon' => '<i class=\"fas fa-coins\"></i>', 'display_order' => 9, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 31, 'permissions_id' => 44, 'name' => 'Static Pages', 'parent_id'=> 0, 'icon' => '<i class=\"fas fa-calendar-alt\"></i>', 'display_order' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 32, 'permissions_id' => 47, 'name' => 'Pages', 'parent_id'=> 0, 'icon' => '<i class=\"fas fa-cannabis\"></i>', 'display_order' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 33, 'permissions_id' => 50, 'name' => 'Photo Galleries', 'parent_id'=> 0, 'icon' => '<i class=\"fas fa-images\"></i>', 'display_order' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 34, 'permissions_id' => 54, 'name' => 'Team', 'parent_id'=> 0, 'icon' => '<i class=\"fas fa-user-friends\"></i>', 'display_order' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 35, 'permissions_id' => 58, 'name' => 'Services', 'parent_id'=> 0, 'icon' => '<i class=\"fas fa-concierge-bell\"></i>', 'display_order' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 36, 'permissions_id' => 63, 'name' => 'Jobs', 'parent_id'=> 0, 'icon' => '<i class=\"fas fa-tools\"></i>', 'display_order' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 37, 'permissions_id' => 66, 'name' => 'Leads', 'parent_id'=> 0, 'icon' => '<i class=\"fas fa-list\"></i>', 'display_order' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 38, 'permissions_id' => 69, 'name' => '301 Redirects', 'parent_id'=> 0, 'icon' => '<i class=\"fas fa-retweet\"></i>', 'display_order' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 39, 'permissions_id' => 72, 'name' => 'Quick Tasks', 'parent_id'=> 0, 'icon' => '<i class=\"fas fa-box-tissue\"></i>', 'display_order' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 40, 'permissions_id' => 76, 'name' => 'Login History', 'parent_id'=> 0, 'icon' => '<i class=\"fas fa-sign-in-alt\"></i>', 'display_order' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 41, 'permissions_id' => 79, 'name' => 'Events', 'parent_id'=> 0, 'icon' => '<i class="fas fa-basketball-ball"></i>', 'display_order' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 42, 'permissions_id' => 83, 'name' => 'Partners', 'parent_id'=> 0, 'icon' => '<i class="fas fa-handshake"></i>', 'display_order' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 43, 'permissions_id' => 87, 'name' => 'Applications', 'parent_id'=> 36, 'icon' => '<i class="fas fa-book"></i>', 'display_order' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 44, 'permissions_id' => 63, 'name' => 'Vaccancies', 'parent_id'=> 36, 'icon' => '<i class="fas fa-boxes"></i>', 'display_order' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 45, 'permissions_id' => 90, 'name' => 'Widgets', 'parent_id'=> 0, 'icon' => '<i class="fas fa-atlas"></i>', 'display_order' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 46, 'permissions_id' => 91, 'name' => 'Listings', 'parent_id'=> 0, 'icon' => '<i class="fas fa-list"></i>', 'display_order' => 0, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ];

        DB::table('admin_links')->insert($admin_links);

        $settings = [
            ['id' => 1, 'code' => 'logo', 'input_type' => 'File', 'value_text' => 'uploads/settings/logo.png', 'settings_type' => 'Logo', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 2, 'code' => 'logo_small', 'input_type' => 'File', 'value_text' => 'uploads/settings/logo-sm612c5acedd245.png', 'settings_type' => 'Logo', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 3, 'code' => 'fav_icon', 'input_type' => 'File', 'value_text' => 'uploads/settings/favicon.ico', 'settings_type' => 'Logo', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 4, 'code' => 'contact_address1', 'input_type' => 'Text', 'value_text' => 'Address1', 'settings_type' => 'Contact', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 5, 'code' => 'contact_address2', 'input_type' => 'Text', 'value_text' => 'Address1', 'settings_type' => 'Contact', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 10, 'code' => 'contact_number', 'input_type' => 'Text', 'value_text' => '9496849448', 'settings_type' => 'Contact', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 11, 'code' => 'whatsapp_number', 'input_type' => 'Text', 'value_text' => '9496849448', 'settings_type' => 'Contact', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 12, 'code' => 'contact_email', 'input_type' => 'Text', 'value_text' => 'contact@spiderworks.in', 'settings_type' => 'Contact', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 13, 'code' => 'twitter-link', 'input_type' => 'Text', 'value_text' => 'https://twitter.com', 'settings_type' => 'Social Media', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 14, 'code' => 'facebook-link', 'input_type' => 'Text', 'value_text' => 'https://facebook.com', 'settings_type' => 'Social Media', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 15, 'code' => 'intagram-link', 'input_type' => 'Text', 'value_text' => 'https://instagram.com', 'settings_type' => 'Social Media', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 16, 'code' => 'linkedin-link', 'input_type' => 'Text', 'value_text' => 'https://in.linkedin.com/', 'settings_type' => 'Social Media', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 17, 'code' => 'youtube-link', 'input_type' => 'Text', 'value_text' => 'https://youtube.com', 'settings_type' => 'Social Media', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 21, 'code' => 'site_name', 'input_type' => 'Text', 'value_text' => 'SpiderWorks', 'settings_type' => 'Common', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 22, 'code' => 'google_tag_manager_head', 'input_type' => 'Text', 'value_text' => NULL, 'settings_type' => 'Common', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 23, 'code' => 'google_tag_manager_body', 'input_type' => 'Text', 'value_text' => NULL, 'settings_type' => 'Common', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 24, 'code' => 'other_common_scripts', 'input_type' => 'Text', 'value_text' => NULL, 'settings_type' => 'Common', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 25, 'code' => 'smtp_host', 'input_type' => 'Text', 'value_text' => NULL, 'settings_type' => 'Smtp', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 26, 'code' => 'smtp_port', 'input_type' => 'Text', 'value_text' => NULL, 'settings_type' => 'Smtp', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 27, 'code' => 'smtp_user', 'input_type' => 'Text', 'value_text' => NULL, 'settings_type' => 'Smtp', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 28, 'code' => 'smtp_password', 'input_type' => 'Text', 'value_text' => NULL, 'settings_type' => 'Smtp', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 29, 'code' => 'smtp_encryption', 'input_type' => 'Text', 'value_text' => NULL, 'settings_type' => 'Smtp', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 30, 'code' => 'smtp_from_address', 'input_type' => 'Text', 'value_text' => NULL, 'settings_type' => 'Smtp', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 31, 'code' => 'smtp_from_name', 'input_type' => 'Text', 'value_text' => 'Admin', 'settings_type' => 'Smtp', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 32, 'code' => 'google_map_embed_code', 'input_type' => 'Text', 'value_text' => '', 'settings_type' => 'Contact', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 33, 'code' => 'google_login', 'input_type' => 'Text', 'value_text' => '-1', 'settings_type' => 'Google', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 34, 'code' => 'google_auth_client_id', 'input_type' => 'Text', 'value_text' => '', 'settings_type' => 'Google', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 35, 'code' => 'google_auth_client_secret', 'input_type' => 'Text', 'value_text' => '', 'settings_type' => 'Google', 'created_by'=> 1, 'updated_by' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ];

        DB::table('settings')->insert($settings);

    }
}
