<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTjplRpJ\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTjplRpJ/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTjplRpJ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTjplRpJ\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerTjplRpJ\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'TjplRpJ',
    'container.build_id' => 'aef1392f',
    'container.build_time' => 1617278618,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTjplRpJ');