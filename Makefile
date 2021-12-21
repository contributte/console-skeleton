.PHONY: project install setup qa dev cs csf phpstan tests build

############################################################
# PROJECT ##################################################
############################################################

project: install setup

install:
	composer install

setup:
	mkdir -p var/{tmp,log}
	chmod +0777 var/{tmp,log}

############################################################
# DEVELOPMENT ##############################################
############################################################

qa: cs phpstan

cs:
	vendor/bin/codesniffer app

csf:
	vendor/bin/codefixer app

phpstan:
	vendor/bin/phpstan analyse -l 8 -c phpstan.neon --memory-limit=512M app

tests:
	echo "OK (no tests)"

coverage:
	echo "OK (no tests)"
