<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHY0q73R\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHY0q73R/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHY0q73R.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHY0q73R\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHY0q73R\App_KernelDevDebugContainer([
    'container.build_hash' => 'HY0q73R',
    'container.build_id' => 'df519541',
    'container.build_time' => 1586186363,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHY0q73R');
