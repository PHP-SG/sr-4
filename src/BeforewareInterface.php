<?php

namespace Psg\Sr4;


/**
 * Do something at the start, unrelated to transforming a request or response
 *
 * An example of "before outerware" would be loading configurations,
 * setting up database connections, etc.
 */
interface BeforewareInterface extends WareInterface
{
	/** Do something unrelated to transforming a request or response */
	#public function process();
}
