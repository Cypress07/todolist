<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBG9JDCk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBG9JDCk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBG9JDCk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBG9JDCk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBG9JDCk\App_KernelDevDebugContainer([
    'container.build_hash' => 'BG9JDCk',
    'container.build_id' => 'aa21e8b8',
    'container.build_time' => 1586865547,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBG9JDCk');
