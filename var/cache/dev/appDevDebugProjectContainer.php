<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAjvf6gx\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAjvf6gx/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerAjvf6gx.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerAjvf6gx\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerAjvf6gx\appDevDebugProjectContainer([
    'container.build_hash' => 'Ajvf6gx',
    'container.build_id' => '15b204ae',
    'container.build_time' => 1574093806,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAjvf6gx');
