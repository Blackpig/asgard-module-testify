<?php namespace Modules\Testify\Sidebar;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\Core\Contracts\Authentication;

class SidebarExtender implements \Maatwebsite\Sidebar\SidebarExtender
{
    /**
     * @var Authentication
     */
    protected $auth;

    /**
     * @param Authentication $auth
     *
     * @internal param Guard $guard
     */
    public function __construct(Authentication $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @param Menu $menu
     *
     * @return Menu
     */
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('core::sidebar.content'), function (Group $group) {
            $group->item(trans('testify::testimonials.title.module'), function (Item $item) {
                $item->icon('fa fa-comments');
                $item->weight(10);
                $item->authorize(
                     /* append */
                );
                $item->item(trans('testify::testimonials.title.testimonials'), function (Item $item) {
                    $item->icon('fa fa-comments-o');
                    $item->weight(0);
                    $item->append('admin.testify.testimonials.create');
                    $item->route('admin.testify.testimonials.index');
                    $item->authorize(
                        $this->auth->hasAccess('testify.testimonials.index')
                    );
                });
                $item->item(trans('testify::masks.title.masks'), function (Item $item) {
                    $item->icon('fa fa-ellipsis-h');
                    $item->weight(0);
                    $item->append('admin.testify.masks.create');
                    $item->route('admin.testify.masks.index');
                    $item->authorize(
                        $this->auth->hasAccess('testify.masks.index')
                    );
                });
// append


            });
        });

        return $menu;
    }
}
