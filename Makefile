.PHONY: qa cs cfx phpstan tests build

qa: cs phpstan

cs:
	vendor/bin/codesniffer app

cfx:
	vendor/bin/codefixer app

phpstan:
	vendor/bin/phpstan analyse -l max -c phpstan.neon --memory-limit=512M app

tests:
	echo "OK (no tests)"

tests-coverage:
	echo "OK (no tests)"
