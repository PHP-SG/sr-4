<?php

namespace Psg\Sr4;


/** Wrap coreware and inner middleware */
interface CorewareInterface extends WareInterface
{
	/** Wrap coreware and inner middleware */
	#public function process();
}
