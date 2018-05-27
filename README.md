## Lumen, Doctrine and oci8 microframework.
[![Build Status](https://travis-ci.org/vhbfernandes/lumen-doctrine-base.png?branch=master)](https://travis-ci.org/vhbfernandes/lumen-doctrine-base)

This repo was created to work as a base for PHP microsservices on OracleDB 12c. 

### Shipped with:
[Laravel Doctrine](https://www.laraveldoctrine.org)

[Fluent Mapping Driver](https://www.laraveldoctrine.org/docs/current/fluent)

[Dingo API](https://github.com/dingo/api/)

[Guzzle Http](http://docs.guzzlephp.org/en/stable/)

#### Doctrine object and mapping examples found on
1. src/app/Models/Entities/ExampleEntity.php
1. src/app/Models/Mappings/ExampleMapping.php

#### Dingo Example routes:
1. src/routes/web.php

#### Example Controllers
1. src/app/Http/Controllers/ExampleController.php

#### Environment File
1. service.env

#### TL;DR
Run development environment with 
```bash
docker-compose up -d
```

##### ~~Forever Beta Docs~~ //TODO fix

##### Note:
Travis builds run on a MySQL container instead of Oracle because of reasons.