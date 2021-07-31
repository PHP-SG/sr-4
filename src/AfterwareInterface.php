<?php

namespace Psg\Sr4;


/**
 * Do something after the server has responded
 *
 * An example of "after outerware" would be clean up,
 * dequeueing, or logging
 */
interface AfterwareInterface extends WareInterface
{
	/** Do something unrelated to transforming a request or response */
	# shall implement
	#public function process();
}
