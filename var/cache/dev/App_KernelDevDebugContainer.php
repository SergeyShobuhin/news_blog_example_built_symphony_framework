<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXuDc46M\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXuDc46M/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXuDc46M.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXuDc46M\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXuDc46M\App_KernelDevDebugContainer([
    'container.build_hash' => 'XuDc46M',
    'container.build_id' => 'bfc04a67',
    'container.build_time' => 1733460865,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXuDc46M');