<?php 

namespace Minecraft\Tools;

class MCdfg 
{
	const VAR_PREFIX = '$$';
	const VAR_DEFAULT = 'param';
	const INTPUT_FOLDER = 'templates/';
	const OUTPUT_FOLDER = 'generated/';

	public function loop(array $loop, string $template, array $parameters) 
	{
		echo PHP_EOL . 'MCdfg - START';

		$fi = 1;
		foreach ($loop as $key => $value) 
		{
			$output_file = $parameters[0] . $value . $parameters[1];
			$params = is_array($value) ? $value : [$value];

			$state = self::generate($template, $output_file, $params);

			if ($state) 
			{
				echo PHP_EOL . $fi . ' - ' . $output_file . ' Generated';
				$fi++;
			} 
			else 
			{
				echo PHP_EOL . 'Fatal - Unknown parameter';
				break;
			}

		}

		echo PHP_EOL . 'MCdfg - END' . PHP_EOL;
	}

	public function generate(string $template, string $output_file, array $parameters)
	{
		$content = file_get_contents(self::INTPUT_FOLDER . $template);

		$i = 1;
		foreach ($parameters as $key => $value) 
		{
			if (is_string($key)) 
			{
				$content = str_replace(self::VAR_PREFIX . $key, $value, $content);
				file_put_contents(self::OUTPUT_FOLDER . $output_file, $content);
			}
			elseif (is_numeric($key)) 
			{
				$content = str_replace(self::VAR_PREFIX . self::VAR_DEFAULT . $i, $value, $content);
				file_put_contents(self::OUTPUT_FOLDER . $output_file, $content);
			}
			else
			{
				return false;
			}

			$i++;
		}

		return true;
	}

}