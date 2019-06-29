#!/bin/sh
phpqa \
    --report \
    --analyzedDirs "src,tests" \
    --buildDir "build/qatools" \
    --tools "phpmetrics,phploc,phpcs,phpmd,pdepend,phpcpd,phpstan" 