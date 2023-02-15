<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Menu as SiteMenu;
use Illuminate\Support\Facades\Cache;
use App\Models\MenuItem;
use App\Models\Widget;

class Menu extends Component
{
    public $menuName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($menuName)
    {
        $this->menuName = $menuName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if($this->menuName == 'Main Menu')
        {
            $main_menu = SiteMenu::where('position', $this->menuName)->first();
            $main_menu_items = Cache::get('main_menu_items', function () use($main_menu) {
                return self::menu_tree($main_menu->id, 0);
            });
            return view('components.menu')->with('main_menu_items', $main_menu_items)->with('menu_name', $this->menuName);
            
        }
        elseif($this->menuName == 'Footer Menu')
        {
            $footer_menu = SiteMenu::where('position', $this->menuName)->first();
            $footer_menu_items = Cache::get('footer_menu_items', function () use($footer_menu) {
                return $this->menu_tree($footer_menu->id, 0);
            });
            return view('components.menu')->with('footer_menu_items', $footer_menu_items)->with('menu_name', $this->menuName);
            
        }
        elseif($this->menuName == 'Bottom Menu')
        {
            $footer_menu = SiteMenu::where('position', $this->menuName)->first();
            $bottom_menu_items = Cache::get('bottom_menu_items', function () use($footer_menu) {
                return $this->menu_tree($footer_menu->id, 0);
            });
            return view('components.menu')->with('bottom_menu_items', $bottom_menu_items)->with('menu_name', $this->menuName);
            
        }
    }

    public static function menu_tree($menu_id, $parent, $level=0)
    {
        $items = MenuItem::where('menu_id', $menu_id)->where('parent_id', $parent)->orderBy('menu_order', 'ASC')->get();
        if($items)
        {
            foreach ($items as $key => $item) {
                $item->level = $level;
                if($item->menu_type == 'custom_link')
                {
                    if($item->url != '#')
                        $item->slug = url($item->url);
                    else
                        $item->slug = $item->url;
                    $item->code = $item->url;
                }
                elseif ($item->menu_type == 'pages_link' && $item->linkable)
                {
                    $item->slug = url('company', $item->linkable->slug);
                    $item->code = $item->linkable->slug;
                }
                elseif($item->menu_type == 'frontend_pages_link' && $item->linkable)
                {
                    if(isset($item->linkable->slug))
                    {
                        if($item->linkable->slug == 'logout')
                        {
                            $item->slug = 'logout';
                            $item->code = 'logout';
                        }
                        else
                        {
                            $item->slug =url(route($item->linkable->slug, [], false));
                            $item->code = $item->linkable->slug;
                        }
                    }
                    else
                    {
                        $item->slug = "#";
                        $item->code = '#';
                    }
                }
                elseif($item->menu_type == 'locations_link' && $item->linkable)
                {
                    $item->slug = url('location', $item->linkable->slug);
                    $item->code = $item->linkable->slug;
                }
                elseif($item->menu_type == 'services_link' && $item->linkable)
                {
                    $item->slug = url('service', $item->linkable->slug);
                    $item->code = $item->linkable->slug;
                }

                if(count($item->children)>0)
                {
                    $item->children = self::menu_tree($menu_id, $item->id, $level+1);
                }
            }
        }
        return $items;
    }
}
