<?php

namespace Psg\Sr4;


/** Wrap coreware and inner middleware */
interface MiddlewareInterface extends WareInterface
{
	/** Wrap coreware and inner middleware */
	#public function process();
}
