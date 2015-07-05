<?php
class ShouQ_banner_square_Test extends PHPUnit_Framework_TestCase
{
    public function testTypeOfResponse()
    {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://snake.yaoyao.rdlab.meilishuo.com/shouq/ShouQ_banner_square");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$output = curl_exec($ch);
		curl_close($ch);
		$output = json_decode($output);
		$type = gettype($output);
		$this->assertEquals("array", $type);
    }
	

    public function noneTypeOfResponse()
    {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://snake.yaoyao.rdlab.meilishuo.com/shouq/ShouQ_banner_square");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$output = curl_exec($ch);
		curl_close($ch);
		$output = json_decode($output);
		$res = $output[0]->imgurl;
		$this->assertEquals("http://d04.res.meilishuo.net/img/_o/df/4e/578ff41ccd89e34dabbd0212c0f5_315_451.cg.jpg", $res);
    }
}
