<?php

namespace Kaweb\PageButton;

use Statamic\Facades\CP\Nav;
use Statamic\Providers\AddonServiceProvider;

/**
 *
 */
class ServiceProvider extends AddonServiceProvider
{
    public function bootAddon()
    {
		Nav::extend(function (\Statamic\CP\Navigation\Nav $nav) {
			$nav->content('Pages')
				->url('collections/pages')
				->icon('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g><path d="M8,.5h9.59a1,1,0,0,1,.7.29l2.42,2.42a1,1,0,0,1,.29.7V18.5a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V1.5A1,1,0,0,1,8,.5Z" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18,21.5H6a1,1,0,0,1-1-1V3.5" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></path><path d="M16,23.5H4a1,1,0,0,1-1-1V5.5" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>');
		});
    }
}
