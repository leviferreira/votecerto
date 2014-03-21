install:
	php composer.phar install --no-dev
	@mkdir -p `pwd`/build/logs
	
phpunit:
	php phpunit.phar -c app/

phpmd:
	phpmd `pwd`/src xml codesize,design,unusedcode --reportfile `pwd`/build/logs/pmd.xml

phpcs:
	phpcs \
		--report=checkstyle \
		--report-file=`pwd`/build/logs/checkstyle.xml \
		--standard=PSR2 \
		--extensions=php \
		`pwd`/src
lint:
	php -l *