install:
	composer install

validate:
	composer validate

brain-games:
	php bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin