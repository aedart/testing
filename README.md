[![Latest Stable Version](https://poser.pugx.org/aedart/testing/v/stable)](https://packagist.org/packages/aedart/testing)
[![Total Downloads](https://poser.pugx.org/aedart/testing/downloads)](https://packagist.org/packages/aedart/testing)
[![Latest Unstable Version](https://poser.pugx.org/aedart/testing/v/unstable)](https://packagist.org/packages/aedart/testing)
[![License](https://poser.pugx.org/aedart/testing/license)](https://packagist.org/packages/aedart/testing)

# Testing

Various utilities for testing php code.

# Contents

* [How to install](#how-to-install)
* [Quick start](#quick-start)
* [Acknowledgement](#acknowledgement)
* [License](#license)

## How to install

```console
composer require aedart/testing
```

## Quick start

### Base Unit Test Case

The `UnitTestCase` is an extended version of `\Codeception\TestCase\Test`, which automatically setups `Faker` and closes down `Mockery` once a test has been executed.

```php
<?php
use Aedart\Testing\TestCases\Unit\UnitTestCase;

class MyUnitTest extends UnitTestCase
{    
    // ... Remaining not shown ... //
}
```

## License

[BSD-3-Clause](http://spdx.org/licenses/BSD-3-Clause), Read the LICENSE file included in this package