############################################################
# PROJECT ##################################################
############################################################
.PHONY: project install setup clean

project: install setup

install:
	composer install
	npm install

setup:
	mkdir -p var/tmp var/log
	chmod +0777 var/tmp var/log

clean:
	find var/tmp -mindepth 1 ! -name '.gitignore' -type f,d -exec rm -rf {} +
	find var/log -mindepth 1 ! -name '.gitignore' -type f,d -exec rm -rf {} +

############################################################
# DEVELOPMENT ##############################################
############################################################
.PHONY: qa dev cs csf phpstan tests coverage dev build

qa: cs phpstan

cs:
	vendor/bin/codesniffer app tests

csf:
	vendor/bin/codefixer app tests

phpstan:
	vendor/bin/phpstan analyse -c phpstan.neon --memory-limit=512M app tests/toolkit

tests:
	vendor/bin/tester -s -p php --colors 1 -C tests

coverage:
	vendor/bin/tester -s -p phpdbg --colors 1 -C --coverage ./coverage.xml --coverage-src ./app tests

dev:
	echo "NO DEV"

build:
	echo "BUILD OK"

############################################################
# DEPLOYMENT ###############################################
############################################################
.PHONY: deploy

deploy: clean project build
