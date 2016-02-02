#!/bin/bash 

case $# in
    2)
	. constants.sh

	export NamespaceValue="$1"
	export ModuleNameValue="$2"

	# Extract directory structure
	tar -xf $compressedTarballName \
    		--exclude='*.*' \
	        --transform='flags=r;s|'$ModuleNamePlaceholder'|'$ModuleNameValue'|' \
    		--transform='flags=r;s|'$NamespacePlaceholder'|'$NamespaceValue'|gx' \
	        --show-transformed-names

	#Extract files filtering 'em through external script
	tar -xf $compressedTarballName \
    		--transform='flags=r;s|'$ModuleNamePlaceholder'|'$ModuleNameValue'|' \
	        --transform='flags=r;s|'$NamespacePlaceholder'|'$NamespaceValue'|gx' \
    		--show-transformed-names \
		--to-command="bash -c $currentDirectory/deployFiles.sh 123 356" #$NamespaceValue $ModuleNameValue"
    ;;
    *)
	echo "Usage: ""$0"" Namespace Modulename"
    ;;
esac

