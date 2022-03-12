<?php
namespace Dream\Contracts\Container;
use \Closure;
interface ContainerInterface
{
	/**
	 * 向容器注册绑定
	 * @param     string     $abstract 绑定标识
	 * @param     mixed      $concrete 绑定内容
	 */
	public function bind($abstract, Closure $concrete);

	/**
	 * 共享的绑定
	 * @param     string     $abstract 绑定标识
	 * @param     mixed      $concrete 绑定内容
	 */
	public function instance($abstract, $concrete);

	/**
	 * 从容器中获取绑定
	 * @param     string     $abstract   绑定标识
	 * @param     array      $parameters 参数
	 */
	public function make($abstract, array $parameters = []);
}