<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW2m4glx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW2m4glx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerW2m4glx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerW2m4glx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerW2m4glx\App_KernelDevDebugContainer([
    'container.build_hash' => 'W2m4glx',
    'container.build_id' => 'd1177bd5',
    'container.build_time' => 1639749963,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerW2m4glx');