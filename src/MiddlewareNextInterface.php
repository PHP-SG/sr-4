<?php

namespace Psg\Sr4;


/**
 * Middleware that expects a `next` callback
 *
 * Some middleware has been written with the expectation receiving a `next`
 * callback.  This interface is available to accomodate such with the next
 * callback receiving the request
 */
interface MiddlewareNextInterface
{
	/** Wrap coreware and inner middleware */
	#public function process();
}
