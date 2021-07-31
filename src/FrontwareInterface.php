<?php

namespace Psg\Sr4;


/** Process the request and potentially alter the response and request prior to middleware and coreware
Example would be a Authorization middleware
*/
interface FrontwareInterface extends WareInterface
{
	/** Process the request and potentially alter the response and request prior to middleware and coreware
	 *
	 * The response is provided as a parameter under to premise
	 * earlier frontware will start to modify the respone
	 * This necessitates that the AppInterface::handle function
	 * generates a seed response for the first frontware
	 */
	 /** return
	 < ServerRequestInterface >
	 ||
	 [< ServerRequestInterface > || < ResponseInterface >, ...]
	 */
	#public function process();
}
