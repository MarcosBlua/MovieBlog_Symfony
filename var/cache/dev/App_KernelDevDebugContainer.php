<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQ6Xyl4I\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQ6Xyl4I/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQ6Xyl4I.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQ6Xyl4I\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQ6Xyl4I\App_KernelDevDebugContainer([
    'container.build_hash' => 'Q6Xyl4I',
    'container.build_id' => '27696dba',
    'container.build_time' => 1610540340,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQ6Xyl4I');
