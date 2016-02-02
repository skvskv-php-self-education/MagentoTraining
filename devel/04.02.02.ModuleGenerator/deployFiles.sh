#!/bin/bash

. constants.sh

mkdir -p $(dirname $TAR_FILENAME) 2>&1 > /dev/null
touch $TAR_FILENAME 2>&1 > /dev/null

cat \
    | sed -r 's/'$NamespacePlaceholder$inFileDataSuffix'/'$NamespaceValue'/g' \
    | sed -r 's/'$ModuleNamePlaceholder$inFileDataSuffix'/'$ModuleNameValue'/g' \
    | sed -r 's/'$(echo $NamespacePlaceholder$inFileDataSuffix | tr '[:upper:]' '[:lower:]')'/'$(echo $NamespaceValue | tr '[:upper:]' '[:lower:]')'/g' \
    | sed -r 's/'$(echo $ModuleNamePlaceholder$inFileDataSuffix | tr '[:upper:]' '[:lower:]')'/'$(echo $ModuleNameValue | tr '[:upper:]' '[:lower:]')'/g' \
    | cat > $TAR_FILENAME
