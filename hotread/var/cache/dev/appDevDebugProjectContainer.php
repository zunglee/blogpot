<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCncszqj\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCncszqj/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerCncszqj.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerCncszqj\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerCncszqj\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Cncszqj',
    'container.build_id' => '8073f82b',
    'container.build_time' => 1515954741,
));