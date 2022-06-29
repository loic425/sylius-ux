<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Sylius\Ux\Core\Twig\Extension\SortByExtension;
use Sylius\Ux\Core\Twig\Extension\TestFormAttributeExtension;
use Sylius\Ux\Core\Twig\Extension\TestHtmlAttributeExtension;

return function(ContainerConfigurator $configurator) {
    $services = $configurator->services();

    $services->set('sylius.ux.twig_extension.sort_by', SortByExtension::class)
        ->tag('twig.extension')
    ;

    $services->set('sylius.ux.twig_extension.test_form_attribute', TestFormAttributeExtension::class)
        ->tag('twig.extension')
    ;

    $services->set('sylius.ux.twig_extension.test_html_attribute', TestHtmlAttributeExtension::class)
        ->tag('twig.extension')
    ;
};
