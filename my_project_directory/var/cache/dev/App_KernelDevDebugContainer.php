<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCiKzPp7\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCiKzPp7/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCiKzPp7.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCiKzPp7\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCiKzPp7\App_KernelDevDebugContainer([
    'container.build_hash' => 'CiKzPp7',
    'container.build_id' => 'ea51a2c2',
    'container.build_time' => 1715691986,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCiKzPp7');