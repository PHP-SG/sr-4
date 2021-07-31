<?php

namespace Psg\Sr4;

interface LayeredAppInterface
{
	/**
	 * Handles a request and produces a response.
	 *
	 * May call other collaborating code to generate the response.
	 */
	public function handle($Request);
	/** adds beforeware */
	public function before($ware);

	/** adds afterware */
	public function after($ware);

	/** adds frontware */
	public function front($ware);

	/** adds middleware */
	 public function middle($ware);

	/** adds coreware */
	 public function core($ware);

	/** adds backware */
	public function back($ware);

	/** adds anyware */
	public function add($middleware);

	/** remove ware */
	/** params.
	< middleware > < MiddlewareInterface | MiddlewareNextInterface | closure | class identifier >
	 */
	public function remove($middleware);

	/** returns whether the app currently has the ware (outerware or middleware) somewhere  */
	/** params.
	< middleware > < BeforewareInterface | AfterwareInterface | MiddlewareInterface |
		MiddlewareNextInterface | FrontwareInterface | BackwareInterface | closure | class identifier >
	 */
	public function hasWare($ware);

	/** get the object a ware will be resolved  to if a string is passed in  */
	public function resolveWare($ware);



	public function respond($Response);

	/** produce an ExitResponseInterface for use by Frontware */
	public function createExitResponse(int $code = 200, string $reasonPhrase = '');
}
